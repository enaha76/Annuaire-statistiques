// import axios from 'axios';

var id_rtablisment = 0;

// TODO: yalti n3rev 4e code che9lto chinhi "#myCheckboxes" moho 5alg vi table

var checkboxes = document.getElementsByName("myCheckboxes");
var h = "#danger-header-modal";

for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener("click", function () {
        handleCheckboxClick(this);
    });
}


// option js
// here a js code its work to take the value of etablissment in witch one we chose
const select = document.querySelector("#mySelect");
select.onchange = function () {
    const selectedOption = select.options[select.selectedIndex];
    const value = selectedOption.value;
    id_rtablisment = Number(value);
    // value is id of  selected option
    window.id_chk = id_rtablisment;
};
// end

// the current year 
let year_d =
    String(new Date().getFullYear() - 1) +
    "-" +
    String(new Date().getFullYear());

$("input#year").on("click", function () {
    // console.log("Anchor clicked!");
    let selectedYear = $(this).val();
    year_d = selectedYear;
    // console.log("Selected year: " + selectedYear);
    $("#selected").text(selectedYear);
});
//end 

// console.log(selectedYear);


//function calcule avrege

// function display_inpute() {
//     var y = `
//     <input type='file' id="fileInput">
//     <span class='button '>Choose</span>
//     <span class='label' data-js-label>No file selected</label>
//     `;
//     document.getElementById("cache_file").innerHTML = y;
// }

// const v=[];

// work with exel file 

//varibles
var fileInput = document.getElementById("fileInput");
var dataJSON;
let null_count = 0;
let err_count = 0;
let cor_count = 0;
let is_cor = false;


window.onload = function () {
    document
        .getElementById("fileInput")
        .addEventListener("change", function (event) {
            var file = fileInput.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                var data = new Uint8Array(reader.result);
                var workbook = XLSX.read(data, {
                    type: "array"
                });
                var sheet = workbook.Sheets[workbook.SheetNames[0]];
                dataJSON = XLSX.utils.sheet_to_json(sheet);
                // let people = [dataJSON];
                const inputElement = document.getElementById("fileInput");
                const fileName = inputElement.files[0].name;
                // console.log(fileName);

                for (let ii = 0; ii < dataJSON.length; ii++) {
                    let person = dataJSON[ii];
                    if ("GENRE" in person) {
                        is_cor = true;

                    }
                }
                if (is_cor) {
                    for (var i = 0; i < dataJSON.length; i++) {
                        if (dataJSON[i].GENRE == null) {
                            null_count++;
                            dataJSON[i].GENRE = "NR";
                        } else if (
                            dataJSON[i].GENRE == "F" ||
                            dataJSON[i].GENRE == "M"
                        ) {
                            cor_count++;
                        } else {
                            err_count++;
                            dataJSON[i].GENRE = "MR";
                        }
                    }
                    console.log(dataJSON)
                    const etab = dataJSON[0].etablissement_de_provenance

                    //  console.log(window.jsonData)
                    // let t=null_count+err_count+cor_count;
                    // cars=[null_count,err_count,cor_count,t]
                    displayTable(null_count, err_count, cor_count);
                    f(dataJSON);
                    av(null_count, err_count, cor_count);
                    archive(fileName, etab, cor_count, err_count, null_count);
                } else {
                    error();
                }
            };
            reader.readAsArrayBuffer(file);
        });
};

function displayinfo(null_count, err_count, cor_count) {
    $("#warning-alert-modal").modal("show");
}

function displayTable(null_count, err_count, cor_count) {
    const button = (err_count === 0 && null_count === 0) ? "" : "Quand même";

    if (id_rtablisment === 0) {
        $("#warning-alert-modal").modal("show");
        $("#etblsmn_chose").click(() => {
            window.location.href = "/tables";
        });
    }

    window.dataJSON = dataJSON;

    const sub = `
        <textarea name="file" id="" cols="30" rows="10" style="display:none">${JSON.stringify(dataJSON)}</textarea>
        <input type="hidden" name="establishment" value="${id_rtablisment}">
        <input type="hidden" name="nr" value="${null_count}">
        <input type="hidden" name="mr" value="${err_count}">
        <input type="hidden" name="cr" value="${cor_count}">
        <input type="hidden" name="year" value="${year_d}">
        <button type="submit" class="btn btn-primary">${button}</button>
    `;
    document.getElementById("sub").innerHTML = sub;
}


function error() {
    var alert = `
    <div class="alert alert-danger" id="aler" role="alert">
        <i class="dripicons-wrong me-2"></i> Ce fichier ne correspond pas <strong>aux format valide</strong> - verifier le !
    </div>
`;
    //   document.getElementById("aler").innerHTML = alert;

    $("#danger-alert-modal").modal("show");
    $("#jj").click(function () {
        window.location.href = "/tables";
    });
}

function f(dataJSON) {
    let exist_id = false;

    const array = window.jsonData;
    const number = Number(window.id_chk);
    const ab = [];
    const date_ins = [];

    // Collect all année_scolaire values for the given id_chk
    for (let i = 0; i < dataJSON.length; i++) {
        const element = dataJSON[i];
        if (element.id_etablissement === id_chk) {
            date_ins.push(element.année_scolaire);
        }
    }

    // Collect all unique id_etablissement values from the array
    for (let i = 0; i < array.length; i++) {
        const element = array[i];
        if (!ab.includes(element.id_etablissement)) {
            ab.push(element.id_etablissement);
        }
    }

    if (ab.includes(number)) {
        exist_id = true;
    }

    const yearExists = date_ins.includes(year_d);

    if (exist_id && !yearExists) {
        $("#info-header-modal").modal("show");
        setTimeout(function () {
            window.location.href = "/tables";
        }, 3000);
    }

    const list_nni = chek_list.map(item => String(item.NNI));
    const list_date_nni = chek_list.map(item => String(item.année_scolaire));
    const data_nni = window.dataJSON.map(item => String(item.NNI));

    function compareLists(list1, list2) {
        let count = 0;

        if (list1.length > list2.length) {
            for (let i = 0; i < list1.length; i++) {
                if (list2.includes(list1[i])) {
                    count++;
                }
            }
        } else {
            for (let i = 0; i < list2.length; i++) {
                if (list1.includes(list2[i])) {
                    count++;
                }
            }
        }

        return count;
    }

    document.getElementById("ahmedou").innerHTML = compareLists(data_nni, list_nni);
    document.getElementById("anne").innerHTML = year_d;

    if (compareLists(data_nni, list_nni) !== 0 && list_date_nni.includes(year_d)) {
        $("#fill-warning-modal").modal("show");
        setTimeout(function () {
            window.location.href = "/tables";
        }, 5000);
        $("#exist_student").click(function () {
            window.location.href = "/tables";
        });
    }
}


function av(null_count, err_count, cor_count) {
    document.getElementById("nor").innerHTML = null_count;
    document.getElementById("mar").innerHTML = err_count;
    document.getElementById("cor").innerHTML = cor_count;
    document.getElementById("tot").innerHTML = null_count + err_count + cor_count;

    const cars = [err_count, cor_count, null_count];

    // Initialize ApexCharts
    var chart = new ApexCharts(document.querySelector("#average-sales1"), {
        chart: {
            height: 208,
            type: "donut",
        },
        series: cars,
        labels: ["Mal renseigné", "Correcte", "Non renseigné"],
        colors: ["#727cf5", "#0acf97", "#fa5c7c"],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: "bottom"
                },
            },
        },],
    });

    chart.render();

    $("#scrollable-modal").modal("show");
}



function archive(name, establishment_name, c_nbr, ml_nbr, nl_nbr) {
    const apiUrl = '/api/insertArchivedata';

    const data = {
        file_name: name,
        establishment_name: establishment_name,
        number_of_students: c_nbr + nl_nbr + ml_nbr,
        c_nbr: c_nbr,
        ml_nbr: ml_nbr,
        nl_nbr: nl_nbr,
        treatment: 'Example Treatment',
    };

    // Insert data using Axios
    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Success message from Laravel
        })
        .catch(error => {
            console.error('Error:', error);
        });
}



function fetchArchives() {
    const apiUrl = '/api/getArchives'; 

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            console.log("Retrieved data from Laravel API", data); 
            processArchives(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function processArchives(archives) {
    var tableBody = $('#table-body');

    archives.forEach(function (archive) {
        var treatmentHtml = generateTreatmentHtml(archive);

        var timeArray = archive.created_at.split("T");
        var time = timeArray[1].substr(0, 8);

        var row = `
            <tr>
                <td>${archive.file_name}</td>
                <td>${archive.establishment_name}</td>
                <td>${archive.number_of_students}</td>
                <td><span>${archive.treatment}</span></td>
                <td>
                    <p>${timeArray[0]}</p>
                    <p>${time}</p>
                </td>
                <td>
                    <div class="progress" style="height: 10px;">
                        ${treatmentHtml}
                    </div>
                </td>
                <td>
                    <a href="javascript:void(0);" class="icon-link"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                    <a href="javascript:void(0);" class="icon-link"><i class="mdi mdi-book-edit-outline"></i></a>
                </td>
            </tr>
        `;

        tableBody.append(row);
    });
}

function generateTreatmentHtml(archive) {
    var treatmentHtml = '';
    var percentageC = calculatePercentage(archive.c_nbr, archive.number_of_students);
    var percentageML = calculatePercentage(archive.ml_nbr, archive.number_of_students);
    var percentageNL = calculatePercentage(archive.nl_nbr, archive.number_of_students);

    if (percentageNL === '0.0%') {
        percentageNL = '0%';
    }

    treatmentHtml += `
        <div class="progress-bar bg-success" role="progressbar" style="width: ${percentageC}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">${percentageC}</div>
        <div class="progress-bar" role="progressbar" style="width: ${percentageML}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">${percentageML}</div>
        <div class="progress-bar bg-danger" role="progressbar" style="width: ${percentageNL}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">${percentageNL}</div>
    `;

    return treatmentHtml;
}

function calculatePercentage(value, total) {
    var percentage = (value / total) * 100;
    return percentage.toFixed(1) + '%';
}

window.addEventListener('load', fetchArchives);





//============================================================================

// import axios from 'axios';

// let establishmentId = 0;

// // TODO: Replace the code that works with "#myCheckboxes" with a more descriptive comment.

// const checkboxes = document.getElementsByName("myCheckboxes");
// const dangerHeaderModal = "#danger-header-modal";

// for (let i = 0; i < checkboxes.length; i++) {
//   checkboxes[i].addEventListener("click", handleCheckboxClick);
// }

// // Option JS
// // This JavaScript code retrieves the value of the selected establishment.
// const select = document.querySelector("#mySelect");
// select.onchange = function () {
//   const selectedOption = select.options[select.selectedIndex];
//   const value = selectedOption.value;
//   establishmentId = Number(value);
//   window.id_chk = establishmentId;
// };
// // End

// // Current year
// let year_d = `${new Date().getFullYear() - 1}-${new Date().getFullYear()}`;

// $("input#year").on("click", function () {
//   const selectedYear = $(this).val();
//   year_d = selectedYear;
//   $("#selected").text(selectedYear);
// });
// // End

// // Function to calculate average

// // Commented out code

// // Work with Excel file

// // Variables
// const fileInput = document.getElementById("fileInput");
// let dataJSON;
// let nullCount = 0;
// let errCount = 0;
// let corCount = 0;
// let isCorrect = false;

// window.onload = function () {
//   document.getElementById("fileInput").addEventListener("change", handleFileInputChange);
// };

// function handleFileInputChange(event) {
//   const file = fileInput.files[0];
//   const reader = new FileReader();
//   reader.onload = handleFileLoad;
//   reader.readAsArrayBuffer(file);
// }

// function handleFileLoad(e) {
//   const data = new Uint8Array(reader.result);
//   const workbook = XLSX.read(data, { type: "array" });
//   const sheet = workbook.Sheets[workbook.SheetNames[0]];
//   dataJSON = XLSX.utils.sheet_to_json(sheet);
//   const inputElement = document.getElementById("fileInput");
//   const fileName = inputElement.files[0].name;

//   for (let ii = 0; ii < dataJSON.length; ii++) {
//     let person = dataJSON[ii];
//     if ("GENRE" in person) {
//       isCorrect = true;
//     }
//   }

//   if (isCorrect) {
//     for (let i = 0; i < dataJSON.length; i++) {
//       if (dataJSON[i].GENRE == null) {
//         nullCount++;
//         dataJSON[i].GENRE = "NR";
//       } else if (dataJSON[i].GENRE == "F" || dataJSON[i].GENRE == "M") {
//         corCount++;
//       } else {
//         errCount++;
//         dataJSON[i].GENRE = "MR";
//       }
//     }
//     displayTable(nullCount, errCount, corCount);
//     f(dataJSON);
//     av(nullCount, errCount, corCount);
//     archive(fileName);
//   } else {
//     error();
//   }
// }

// function displayInfo(nullCount, errCount, corCount) {
//   $("#warning-alert-modal").modal("show");
// }

// function displayTable(nullCount, errCount, corCount) {
//   const button = errCount == 0 && nullCount == 0 ? "" : "Quand même";

//   if (establishmentId == 0) {
//     $("#warning-alert-modal").modal("show");
//     $("#etblsmn_chose").click(function () {
//       window.location.href = "/tables";
//     });
//   }
//   window.dataJSON = dataJSON;

//   const sub = `
//     <textarea name="file" id="" cols="30" rows="10" style="display:none">${JSON.stringify(
//       dataJSON
//     )}</textarea>
//     <input type="hidden" name="establishment" value="${establishmentId}">
//     <input type="hidden" name="nr" value="${nullCount}">
//     <input type="hidden" name="mr" value="${errCount}">
//     <input type="hidden" name="cr" value="${corCount}">
//     <input type="hidden" name="year" value="${year_d}">
//     <button type="submit" class="btn btn-primary" >Importer ${button}</button>
// `;
//   document.getElementById("sub").innerHTML = sub;
// }

// function error() {
//   const alert = `
//     <div class="alert alert-danger" id="aler" role="alert">
//         <i class="dripicons-wrong me-2"></i> Ce fichier ne correspond pas <strong>aux formats valides</strong> - veuillez vérifier !
//     </div>
// `;
//   $("#danger-alert-modal").modal("show");
//   $("#jj").click(function () {
//     window.location.href = "/tables";
//   });
// }

// function f(dataJSON) {
//   let existId = false;
//   const array = window.jsonData;
//   const number = Number(window.id_chk);
//   const ab = [];
//   const dateIns = [];

//   for (let index5 = 0; index5 < dataJSON.length; index5++) {
//     const element = dataJSON[index5];

//     if (element.id_etablissement == establishmentId) {
//       dateIns.push(element.année_scolaire);
//     }
//   }

//   for (let index = 0; index < array.length; index++) {
//     const element = array[index];
//     if (ab.indexOf(element.id_etablissement) === -1) {
//       ab.push(element.id_etablissement);
//     }
//   }

//   if (ab.indexOf(number) !== -1) {
//     existId = true;
//   }

//   if (existId && dateIns.indexOf(year_d) == -1) {
//     $("#info-header-modal").modal("show");
//     setTimeout(function () {
//       window.location.href = "/tables";
//     }, 3000);
//   }

//   let listNNI = [];
//   let dataNNI = [];
//   let listDateNNI = [];

//   for (let j = 0; j < chek_list.length; j++) {
//     listNNI.push(String(chek_list[j].NNI));
//     listDateNNI.push(String(chek_list[j].année_scolaire));
//   }

//   for (let index12 = 0; index12 < window.dataJSON.length; index12++) {
//     dataNNI.push(String(window.dataJSON[index12].NNI));
//   }

//   function compareLists(list1, list2) {
//     let count = 0;

//     if (list1 > list2) {
//       for (let i = 0; i < list1.length; i++) {
//         if (list2.includes(list1[i])) {
//           count++;
//         }
//       }
//     } else {
//       for (let i = 0; i < list2.length; i++) {
//         if (list1.includes(list2[i])) {
//           count++;
//         }
//       }
//     }

//     return count;
//   }

//   document.getElementById("ahmedou").innerHTML = compareLists(dataNNI, listNNI);
//   document.getElementById("anne").innerHTML = year_d;

//   if (compareLists(dataNNI, listNNI) != 0 && listDateNNI.indexOf(year_d) != -1) {
//     $("#fill-warning-modal").modal("show");
//     setTimeout(function () {
//       window.location.href = "/tables";
//     }, 3000);
//   }
// }

// function av(nullCount, errCount, corCount) {
//   const totalCount = nullCount + errCount + corCount;
//   const avg = (corCount / totalCount) * 100;

//   document.getElementById("av").innerHTML = avg.toFixed(2);
// }

// function archive(fileName) {
//   const formData = new FormData();
//   formData.append("file", fileInput.files[0]);
//   formData.append("name", fileName);
//   formData.append("establishmentId", establishmentId);
//   formData.append("year", year_d);

//   axios
//     .post("/archives", formData)
//     .then(function (response) {
//       console.log(response);
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }

// function handleCheckboxClick(checkbox) {
//   // Handle checkbox click event
// }
