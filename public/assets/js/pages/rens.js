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
                var workbook = XLSX.read(data, { type: "array" });
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
                    // console.log(dataJSON)
                    //  console.log(window.jsonData)
                    // let t=null_count+err_count+cor_count;
                    // cars=[null_count,err_count,cor_count,t]
                    displayTable(null_count, err_count, cor_count);
                    f(dataJSON);
                    av(null_count, err_count, cor_count);
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
    // var table = `<h5>Traitement du fichier avant l'import sur la colone genre</h5>
    // <table class=\"table table-hover table-centered mb-0\">
    //                 <thead>
    //                 <tr>
    //                     <th>Non renseigné</th>
    //                     <th>Mal renseigné</th>
    //                     <th>Correcte</th>
    //                     <th>Totale</th>
    //                 </tr>
    //                 </thead>
    //                 <tbody>
    //                     <tr>
    //                         <td>${null_count}</td>
    //                         <td>${err_count}</td>
    //                         <td>${cor_count}</td>
    //                         <td>${cor_count + err_count + null_count}</td>
    //                     </tr>
    //                 </tbody>
    //                 </table>`;

                    //! ymt7e matle ych9le
    // document.getElementById("tableContainer").innerHTML = table;
    // var x = `
    //         <p>
    //             <i class="mdi mdi-square text-success"></i>Correcte
    //             <span classj="float-end"></span>
    //         </p>

    //         <p>
    //             <i class="mdi mdi-square text-primary"></i> Mal renseigné
    //             <span class="float-end"></span>
    //         </p>

    //         <p>
    //             <i class="mdi mdi-square text-danger"></i>Non renseigné
    //             <span class="float-end"></span>
    //         </p>
            
            
    //         `;  
    // document.getElementById("labelse").innerHTML = x;


    var button = "Quand même";
    if (err_count == 0 && null_count == 0) {
        button = "";
    }

    // var tar = "";
    // if (id_rtablisment == 0) {
    //     tar = "modal";
    // }
    // when the user does not chose any etablissement

    if (id_rtablisment == 0) {
        $("#warning-alert-modal").modal("show");
        $("#etblsmn_chose").click(function () {
            window.location.href = "/tables";
        });
    }
    window.dataJSON = dataJSON;

    var sub = `
    <textarea name="file" id="" cols="30" rows="10" style="display:none">${JSON.stringify(
        dataJSON
    )}</textarea>
    <input type="hidden" name="establishment" value="${id_rtablisment}">
    <input type="hidden" name="nr" value="${null_count}">
    <input type="hidden" name="mr" value="${err_count}">
    <input type="hidden" name="cr" value="${cor_count}">
    <input type="hidden" name="year" value="${year_d}">
    <button type="submit" class="btn btn-primary" >Importer ${button}</button>  
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
    // console.log(dataJSON)
    // console.log(window.jsonData)

    var array = window.jsonData;
    var number = Number(window.id_chk);
    var ab = [];
    let date_ins = [];
// insert année_scolaire variable in date_ins array sene li vi excel file
// hun data_ins lehi ndir vihe les année_scolaire li kil etablisment vi ficher excel
// todo : hun vi 3elle
    for (let index5 = 0; index5 < dataJSON.length; index5++) {
        const elemen = dataJSON[index5];

        if (elemen.id_etablissement == id_chk) {
            date_ins.push(elemen.année_scolaire);
        }
    }
    // console.log(dataJSON[0].etablissement_de_provenance);
    // ndiro les id eteablissment li vi base de donnes li vat wssejl 4i sene vi ab[]
    
    for (let index = 0; index < array.length; index++) {
        const element = array[index];
        if (ab.indexOf(element.id_etablissement) === -1) {
            ab.push(element.id_etablissement);
        }
    }
    // console.log("Array li vihe les donnnes de la ab[]",ab)
    // console.log("Array li vihe les donnnes de la ab[]",date_ins)
    //  console.log(typeof ab[0])

    //  console.log(typeof number);
    if (ab.indexOf(number) !== -1) {
        exist_id = true;
    }

    
    if (exist_id && date_ins.indexOf(year_d) == -1) {
        $("#info-header-modal").modal("show");
        setTimeout(function () {
            window.location.href = "/tables";
        }, 3000);
    }
    // chek the list of student that exist in the year
    let list_nni = [];
    let data_nni = [];
    let list_date_nni = [];
    
    for (let j = 0; j < chek_list.length; j++) {
        list_nni.push(String(chek_list[j].NNI));
        list_date_nni.push(String(chek_list[j].année_scolaire));
    }

    for (let index12 = 0; index12 < window.dataJSON.length; index12++) {
        data_nni.push(String(window.dataJSON[index12].NNI));
    }
    // console.log(data_nni);
    // console.log(list_nni);

    function compareLists(list1, list2) {
        var count = 0;

        if (list1 > list2) {
            for (var i = 0; i < list1.length; i++) {
                if (list2.includes(list1[i])) {
                    count++;
                }
            }
        } else {
            for (var i = 0; i < list2.length; i++) {
                if (list1.includes(list2[i])) {
                    count++;
                }
            }
        }

        return count;
    }

    document.getElementById("ahmedou").innerHTML = compareLists(
        data_nni,
        list_nni
    );
    document.getElementById("anne").innerHTML = year_d;
    if (
        compareLists(data_nni, list_nni) != 0 &&
        list_date_nni.indexOf(year_d) != -1
    ) {
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
    document.getElementById("tot").innerHTML =
        null_count + err_count + cor_count;

    setTimeout(function () {
        $("#scrollable-modal").modal("show");
    }, 500);
    const cars = [err_count, cor_count, null_count];
    !(function (o) {
        "use strict";
        function e() {
            (this.$body = o("body")), (this.charts = []);
        }
        (e.prototype.initCharts = function () {
            window.Apex = {
                chart: { parentHeightOffset: 0, toolbar: { show: !1 } },
                grid: { padding: { left: 0, right: 0 } },
                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
            };
            var e = ["#727cf5", "#0acf97", "#fa5c7c"],
                t = o("#revenue-chart").data("colors");
            t && (e = t.split(","));
            var r = {
                chart: {
                    height: 364,
                    type: "line",
                    dropShadow: {
                        enabled: !0,
                        opacity: 0.2,
                        blur: 7,
                        left: -7,
                        top: 7,
                    },
                },
                dataLabels: { enabled: !1 },
                stroke: { curve: "smooth", width: 4 },
                series: [
                    {
                        name: "Current Week",
                        data: [10, 20, 15, 25, 20, 30, 20],
                    },
                    {
                        name: "Previous Week",
                        data: [0, 15, 10, 30, 15, 35, 25],
                    },
                ],
                colors: e,
                zoom: { enabled: !1 },
                legend: { show: !1 },
                xaxis: {
                    type: "string",
                    categories: [
                        "Mon",
                        "Tue",
                        "Wed",
                        "Thu",
                        "Fri",
                        "Sat",
                        "Sun",
                    ],
                    tooltip: { enabled: !1 },
                    axisBorder: { show: !1 },
                },
                yaxis: {
                    labels: {
                        formatter: function (e) {
                            return e + "k";
                        },
                        offsetX: -15,
                    },
                },
            };
            new ApexCharts(
                document.querySelector("#revenue-chart"),
                r
            ).render();
            e = ["#727cf5", "#e3eaef"];
            (t = o("#high-performing-product").data("colors")) &&
                (e = t.split(","));
            r = {
                chart: { height: 257, type: "bar", stacked: !0 },
                plotOptions: { bar: { horizontal: !1, columnWidth: "20%" } },
                dataLabels: { enabled: !1 },
                stroke: { show: !0, width: 2, colors: ["transparent"] },
                series: [
                    {
                        name: "Actual",
                        data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81],
                    },
                    {
                        name: "Projection",
                        data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59],
                    },
                ],
                zoom: { enabled: !1 },
                legend: { show: !1 },
                colors: e,
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    axisBorder: { show: !1 },
                },
                yaxis: {
                    labels: {
                        formatter: function (e) {
                            return e + "k";
                        },
                        offsetX: -15,
                    },
                },
                fill: { opacity: 1 },
                tooltip: {
                    y: {
                        formatter: function (e) {
                            return "$" + e + "k";
                        },
                    },
                },
            };
            new ApexCharts(
                document.querySelector("#high-performing-product"),
                r
            ).render();
            e = ["#727cf5", "#0acf97", "#fa5c7c"];
            //pie
            (t = o("#average-sales1").data("colors")) && (e = t.split(","));
            r = {
                chart: { height: 208, type: "donut" },
                legend: { show: !1 },
                stroke: { colors: ["transparent"] },

                series: cars,
                labels: ["Mal renseigné", "Correcte", "Non renseigné"],
                colors: e,
                responsive: [
                    {
                        breakpoint: 480,
                        options: {
                            chart: { width: 200 },
                            legend: { position: "bottom" },
                        },
                    },
                ],
            };
            new ApexCharts(
                document.querySelector("#average-sales1"),
                r
            ).render();
        }),
            // console.log(4568)
            //end pie
            // e.prototype.initMaps = function() { 0<o("#world-map-markers").length&&o("#world-map-markers").vectorMap({map: "mr_mill_en",normalizeFunction: "polynomial",hoverOpacity: .7,hoverColor: !1,regionStyle: {initial: {fill: "#e3eaef" }},markerStyle: {initial: {r: 9,fill: "#727cf5","fill-opacity": .9,stroke: "#fff","stroke-width": 7,"stroke-opacity": .4},hover: {stroke: "#fff","fill-opacity": 1, "stroke-width": 1.5}},backgroundColor: "transparent",markers: [{latLng:[18.0973,-15.9785], name: "Nouakchott"},{latLng:[20.9292,-17.0326], name: "Nouadhibou"},{latLng:[15.5951,-0.1462], name: "Ayoun el Atrous"} ],zoomOnScroll:!1})},
            (e.prototype.initMaps = function () {
                0 < o("#world-map-markers").length &&
                    o("#world-map-markers").vectorMap({
                        map: "mr_mill_en",
                        normalizeFunction: "polynomial",
                        hoverOpacity: 0.7,
                        hoverColor: !1,
                        regionStyle: { initial: { fill: "#e3eaef" } },
                        zoomOnScroll: !1,
                    });
            }),
            (e.prototype.init = function () {
                o("#dash-daterange").daterangepicker({ singleDatePicker: !0 }),
                    this.initCharts(),
                    this.initMaps();
            }),
            (o.Dashboard = new e()),
            (o.Dashboard.Constructor = e);
    })(window.jQuery),
        (function (t) {
            "use strict";
            t(document).ready(function (e) {
                t.Dashboard.init();
            });
        })(window.jQuery);
    
}
