function fill() {
    document.getElementById("buttons-table-preview 1").appendChild(createtbody(etats,data,2));
    document.getElementById("buttons-table-preview 2").appendChild(createtbody(etats,data,3));
}

function chrt(table) {
   
    var data = {
      labels: [],
      datasets: [{
        label: "My Data",
        data: []
      }]
    };
    
    for (var i = 1; i < table.rows.length; i++) {
      data.labels.push(table.rows[i].cells[0].innerHTML);
      data.datasets[0].data.push(table.rows[i].cells[1].innerHTML);
    }
    
    var ctx = document.createElement("canvas");
     
    new Chart(ctx, {
      type: "bar",
      data: data,
      options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
      }
    });
    return ctx;
    }
    

function createtbody(etablissements, data,j) {


switch (j) {
    case 2:
        
        document.getElementById("buttons-table-preview 2").innerHTML="";
        var instituts = etablissements.filter(
            (e) => e.identifiant === null && e.type === "Institut" && e.privee == 0
          );
        var subEtablissments = etablissements.filter(
            (e) => e.identifiant !== null && e.privee == 0
          );
          subEtablissments = subEtablissments.concat(instituts);
          
        var allCombinations = getAllCombinations({
            
            GENRE: ['EFFECTIFS','F']
        });
        thead = createhead(allCombinations);
        thead.style.textAlign = "center";
        var table = document.createElement("table");
        table.id="datatable-buttons "+j
        table.className="table table-striped dt-responsive nowrap w-100"
        table.appendChild(thead);
        var tbody = document.createElement("tbody");
        tbody.style.textAlign = "center";
        var Totale = document.createElement("tr");
        t_cell = document.createElement("td");
        t_cell.innerHTML="TOTAL";
        t_cell.setAttribute("colspan", 2);
        t_cell.style = "background-color : lightblue";
        Totale.appendChild(t_cell)
        var t={};
        var bigEtablissmentsCounts = {};
for (var i = 0; i < subEtablissments.length; i++) {
    students = data.filter(
        (e) => e.id_etablissement == subEtablissments[i].id
    );

    count = countByCombination(allCombinations, students);
   if (getAbrev(subEtablissments[i].identifiant, etablissements)) {
    var bigEtablissmentAbrev = getAbrev(subEtablissments[i].identifiant, etablissements);
    if (!bigEtablissmentsCounts[bigEtablissmentAbrev]) {
        bigEtablissmentsCounts[bigEtablissmentAbrev] = {
            abrev: bigEtablissmentAbrev,
            counts: count
        }
    } else {
        Object.keys(count).forEach((key) => {
            bigEtablissmentsCounts[bigEtablissmentAbrev].counts[key] += count[key];
        });
    }
   }
}
console.log(bigEtablissmentsCounts);
Object.values(bigEtablissmentsCounts).forEach((bigEtablissment) => {
    var row = document.createElement("tr");
    cell = document.createElement("td");
    cell.innerHTML = bigEtablissment.abrev;
    cell.setAttribute("colspan", 2);
    row.appendChild(cell);

    Object.keys(bigEtablissment.counts).forEach((key) => {
        cell = document.createElement("td");
        cell.innerHTML = bigEtablissment.counts[key];
        if (t[key]) {
            t[key]+=count[key]
        }else{
            t[key]=count[key]
        }
        row.appendChild(cell);
    });
console.log(row);
    tbody.appendChild(row);
});

for (var i = 0; i < instituts.length; i++) {
    students=data.filter(e => e.id_etablissement==instituts[i].id)
    
    count = countByCombination(allCombinations, students)
    var row = document.createElement("tr");
    cell = document.createElement("td");
            cell.innerHTML = instituts[i].abrev;
            if (getAbrev( instituts[i].identifiant,etablissements)) {
            cell1 = document.createElement("td");
            cell1.innerHTML = getAbrev( instituts[i].identifiant,etablissements);
            row.appendChild(cell1); 
            row.appendChild(cell); 
            } else {
                cell.setAttribute("colspan", 2);
                row.appendChild(cell);
            }
            
           
            
    Object.keys(count).forEach(key => {
        cell = document.createElement("td");
            cell.innerHTML = count[key];
            
            if (t[key]) {
                t[key]+=count[key]
            }else{
                t[key]=count[key]
            }
            row.appendChild(cell);
    });
        
         
        
    
    tbody.appendChild(row);
}
        Object.keys(t).forEach((key) => {
            cell = document.createElement("td");
            cell.innerHTML=t[key];
            cell.style = "background-color : lightblue";
            Totale.appendChild(cell)
        })
        sortTbody(tbody);
        mergetbody(tbody);
        tbody.appendChild(Totale)
        table.appendChild(tbody);
        console.log(chrt(table));
        document.getElementById("myChart 1").appendChild(chrt(table));
        return table;


    case 3:
        document.getElementById("buttons-table-preview 2").innerHTML="";
        var instituts = etablissements.filter(
            (e) => e.identifiant === null && e.type === "Institut" 
          );
        var subEtablissments = etablissements.filter(
            (e) => e.identifiant !== null 
          );
          subEtablissments = subEtablissments.concat(instituts);
          
        var allCombinations = getAllCombinations({
            NATIONALITE: [ 'MAURITANIE', 'etranges'],
            GENRE: ['T', 'F']
        });
        thead = createhead(allCombinations,2);
        thead.style.textAlign = "center";
        var table = document.createElement("table");
        table.id="datatable-buttons "+j
        table.className="table table-striped dt-responsive nowrap w-100"
        table.appendChild(thead);
        var tbody = document.createElement("tbody");
        tbody.style.textAlign = "center";
        var Totale = document.createElement("tr");
        t_cell = document.createElement("td");
        t_cell.innerHTML="TOTAL";
        t_cell.setAttribute("colspan", 2);
        t_cell.style = "background-color : lightblue";
        Totale.appendChild(t_cell)
        var t={};
        var m=0,f=0;
       
        for (let i = 0; i < subEtablissments.length; i++) {
            students=data.filter(e => e.id_etablissement==subEtablissments[i].id)
         
            count = countByCombination(allCombinations, students)
            let row = document.createElement("tr");
            cell = document.createElement("td");
                    cell.innerHTML = subEtablissments[i].abrev;
                    if (getAbrev( subEtablissments[i].identifiant,etablissements)) {
                    cell1 = document.createElement("td");
                    cell1.innerHTML = getAbrev( subEtablissments[i].identifiant,etablissements);
                    row.appendChild(cell1); 
                    row.appendChild(cell); 
                    } else {
                        cell.setAttribute("colspan", 2);
                        row.appendChild(cell);
                    }
                    
                   
                    var first=true
            Object.keys(count).forEach(key => {
                
                cell = document.createElement("td");
                    cell.innerHTML = count[key];
                    if (t[key]) {
                        t[key]+=count[key]
                    }else{
                        t[key]=count[key]
                    }
                    if (first) {
                        m+=count[key]
                    }
                    else{
                        f+=count[key]
                    }
                    first=!first
                    row.appendChild(cell);
            });
                
            cell = document.createElement("td");
                    cell.innerHTML = m; 
                    row.appendChild(cell)
                    cell = document.createElement("td");
                    cell.innerHTML = f;
                    row.appendChild(cell)
 if(t['m']) {                  
t['m']+=m;
t['f']+=f;
 }else{
    t['m']=m;
t['f']=f;
 }
            
            tbody.appendChild(row);
        }

            
           
   
        Object.keys(t).forEach((key) => {
            cell = document.createElement("td");
            cell.innerHTML=t[key];
            cell.style = "background-color : lightblue";
            Totale.appendChild(cell)
        })
        sortTbody(tbody);
        mergetbody(tbody);
        tbody.appendChild(Totale)
        table.appendChild(tbody);
       
        return table;




    case 3:
        document.getElementById("buttons-table-preview 1").innerHTML="";
        var instituts = etablissements.filter(
            (e) => e.identifiant === null && e.type === "Institut" && e.privee == 0
          );
        var subEtablissments = etablissements.filter(
            (e) => e.identifiant !== null && e.privee == 0
          );
          subEtablissments = subEtablissments.concat(instituts);
          
        var allCombinations = getAllCombinations({
            
            GENRE: ['EFFECTIFS']
        });
        thead = createhead(allCombinations);
        thead.style.textAlign = "center";
        var table = document.createElement("table");
        table.id="datatable-buttons "+j
        table.className="table table-striped dt-responsive nowrap w-100"
        table.appendChild(thead);
        var tbody = document.createElement("tbody");
        tbody.style.textAlign = "center";
        var Totale = document.createElement("tr");
        t_cell = document.createElement("td");
        t_cell.innerHTML="TOTAL";
        t_cell.setAttribute("colspan", 2);
        t_cell.style = "background-color : lightblue";
        Totale.appendChild(t_cell)
        var t={};
        var bigEtablissmentsCounts = {};
for (var i = 0; i < subEtablissments.length; i++) {
    students = data.filter(
        (e) => e.id_etablissement == subEtablissments[i].id
    );

    count = countByCombination(allCombinations, students);
   if (getAbrev(subEtablissments[i].identifiant, etablissements)) {
    var bigEtablissmentAbrev = getAbrev(subEtablissments[i].identifiant, etablissements);
    if (!bigEtablissmentsCounts[bigEtablissmentAbrev]) {
        bigEtablissmentsCounts[bigEtablissmentAbrev] = {
            abrev: bigEtablissmentAbrev,
            counts: count
        }
    } else {
        Object.keys(count).forEach((key) => {
            bigEtablissmentsCounts[bigEtablissmentAbrev].counts[key] += count[key];
        });
    }
   }
}
console.log(bigEtablissmentsCounts);
Object.values(bigEtablissmentsCounts).forEach((bigEtablissment) => {
    var row = document.createElement("tr");
    cell = document.createElement("td");
    cell.innerHTML = bigEtablissment.abrev;
    cell.setAttribute("colspan", 2);
    row.appendChild(cell);

    Object.keys(bigEtablissment.counts).forEach((key) => {
        cell = document.createElement("td");
        cell.innerHTML = bigEtablissment.counts[key];
        if (t[key]) {
            t[key]+=count[key]
        }else{
            t[key]=count[key]
        }
        row.appendChild(cell);
    });
console.log(row);
    tbody.appendChild(row);
});

for (var i = 0; i < instituts.length; i++) {
    students=data.filter(e => e.id_etablissement==instituts[i].id)
    
    count = countByCombination(allCombinations, students)
    var row = document.createElement("tr");
    cell = document.createElement("td");
            cell.innerHTML = instituts[i].abrev;
            if (getAbrev( instituts[i].identifiant,etablissements)) {
            cell1 = document.createElement("td");
            cell1.innerHTML = getAbrev( instituts[i].identifiant,etablissements);
            row.appendChild(cell1); 
            row.appendChild(cell); 
            } else {
                cell.setAttribute("colspan", 2);
                row.appendChild(cell);
            }
            
           
            
    Object.keys(count).forEach(key => {
        cell = document.createElement("td");
            cell.innerHTML = count[key];
            
            if (t[key]) {
                t[key]+=count[key]
            }else{
                t[key]=count[key]
            }
            row.appendChild(cell);
    });
        
         
        
    
    tbody.appendChild(row);
}
        Object.keys(t).forEach((key) => {
            cell = document.createElement("td");
            cell.innerHTML=t[key];
            cell.style = "background-color : lightblue";
            Totale.appendChild(cell)
        })
        sortTbody(tbody);
        mergetbody(tbody);
        tbody.appendChild(Totale)
        table.appendChild(tbody);
        document.getElementById("myChart 1").appendChild(chrt(table));
        return table;

        

    default:
        break;
}




//     var subEtablissments = etablissements.filter(
//         (e) =>
//             e.identifiant !== null ||
//             (e.identifiant === null && e.type === "Institut")
//     );
//     let allCombinations = getAllCombinations({
//         NATIONALITE: ["etranges", "MAURITANIE"],
//         Niveau: ["L1", "L2", "L3"],
//         GENRE: ["T", "F"],
//     });
//     thead = createhead(allCombinations);

    
//     let table = document.createElement("table");
//     table.id="datatable-buttons"
//     table.className="table table-striped dt-responsive nowrap w-100"
//     table.appendChild(thead);
//     let tbody = document.createElement("tbody");
//     tbody.style.textAlign = "center";
//     for (let i = 0; i < subEtablissments.length; i++) {
//         students = data.filter(
//             (e) => e.id_etablissement == subEtablissments[i].id
//         );

//         count = countByCombination(allCombinations, students);
//         let row = document.createElement("tr");
//         cell = document.createElement("td");
//         cell.innerHTML = subEtablissments[i].abrev;
//         if (getAbrev(subEtablissments[i].identifiant, etablissements)) {
//             cell1 = document.createElement("td");
//             cell1.innerHTML = getAbrev(
//                 subEtablissments[i].identifiant,
//                 etablissements
//             );
//             row.appendChild(cell1);
//             row.appendChild(cell);
//         } else {
//             cell.setAttribute("colspan", 2);
//             row.appendChild(cell);
//         }

//         Object.keys(count).forEach((key) => {
//             cell = document.createElement("td");
//             cell.innerHTML = count[key];
//             if (count[key] > 0) {
//                 cell.style.background = "red";
//             }
//             row.appendChild(cell);
//         });

//         tbody.appendChild(row);
//     }
//     sortTbody(tbody);
//     mergetbody(tbody);

//     table.appendChild(tbody);
//  return table;
}

function groupEtablissmentRows(etablissments, tbody) {
    let currentEtablissmentId;
    let currentEtablissmentRowCount = 0;
    for (let i = 0; i < tbody.rows.length; i++) {
        let etablissmentId = etablissments[tbody.rows[i].cells[0].innerHTML];
        if (etablissmentId !== currentEtablissmentId) {
            if (currentEtablissmentRowCount > 0) {
                tbody.rows[
                    i - currentEtablissmentRowCount
                ].cells[0].setAttribute("rowspan", currentEtablissmentRowCount);
            }
            currentEtablissmentId = etablissmentId;
            currentEtablissmentRowCount = 1;
        } else {
            tbody.rows[i].deleteCell(0);
            currentEtablissmentRowCount++;
        }
    }
    if (currentEtablissmentRowCount > 0) {
        tbody.rows[
            tbody.rows.length - currentEtablissmentRowCount
        ].cells[0].setAttribute("rowspan", currentEtablissmentRowCount);
    }
}

function createhead(objArray ,t=0) {
    if(objArray.length==1 && Object.keys(objArray[0]).length==1){
        let keys = Object.keys(objArray[0]);
        td = document.createElement("th");
        tr = document.createElement("tr");
        td.innerHTML = "INSTITUTIONS";
        td.style = "background-color : yellow";
        td.setAttribute("colspan", 2);
        tr.appendChild(td);
        td = document.createElement("th");
        console.log(
            objArray
        );
        td.innerHTML = objArray[0][keys[0]];
        td.style = "background-color : lightblue";
        
        tr.appendChild(td);
        let thead = document.createElement("thead");
    thead.id = "thead";
    thead.appendChild(tr);
    return thead;
    }
    
    let keys = Object.keys(objArray[0]);
    let trs = [];
    for (let key of keys) {
        td = document.createElement('th');
        tr = document.createElement('tr');
        td.innerHTML = key;
        td.style = 'background-color : yellow';
        td.setAttribute("colspan", 2);

        tr.appendChild(td);
        trs.push(tr);
    }

    let objKeys = Object.keys(objArray[0])
    for (let i = 0; i < objKeys.length; i++) {

        for (let j = 0; j < objArray.length; j++) {
            td = document.createElement('th');
            td.innerHTML = objArray[j][objKeys[i]]
            td.style = 'background-color : lightblue'
            td.id = j
            console.log(td);
            trs[i].appendChild(td)
        }

    }
console.log(objArray);
    let thead = document.createElement('thead');
    thead.id = "thead";
    for (let i = 0; i < trs.length; i++) {
        thead.appendChild(trs[i]);
    }

    thead = mergeCells(thead,t);
    
    return thead;

}

function getAllCombinations(criteria) {
    let combinations = [];
    let keys = Object.keys(criteria);

    function generateCombinations(combination, remainingKeys) {
        if (remainingKeys.length === 0) {
            combinations.push(combination);
            return;
        }

        let currentKey = remainingKeys[0];
        let currentValues = criteria[currentKey];

        for (let i = 0; i < currentValues.length; i++) {
            let newCombination = {
                ...combination,
            };
            newCombination[currentKey] = currentValues[i];
            generateCombinations(newCombination, remainingKeys.slice(1));
        }
    }

    generateCombinations({}, keys);
    return combinations;
}

function countByCombination(combinations, data) {
    let count = {};
    for (let combination of combinations) {
        var l = "";

        Object.keys(combination).forEach((element) => {
            l += combination[element] + " ";
        });

        count[l] = 0;

        data.forEach((student) => {
            let match = true;
            i = 1;
            for (let criteria in combination) {
                if (student[criteria] != combination[criteria]) {
                    if (
                        combination[criteria] == "etranges" &&
                        student[criteria] != "MAURITANIE"
                    ) {
                        continue;
                    }
                    if (
                        (combination[criteria] === "T" || combination[criteria] === "EFFECTIFS" )&&
                        student[criteria] != "F"
                    ) {
                        continue;
                    } else {
                        match = false;
                        break;
                    }
                }
            }
            if (match) {
                count[l]++;
            }
        });
    }

    return count;
}

function mergeCells(thead,t=0) {
    let currentCell;
    let colspanCount = 1;
    for (let i = 0; i < thead.rows.length; i++) {
        currentCell = thead.rows[i].cells[1];
        for (let j = thead.rows[i].cells.length - 1; j > 0; j--) {
            if (currentCell.innerHTML == thead.rows[i].cells[j].innerHTML) {
                colspanCount++;
                thead.rows[i].removeChild(thead.rows[i].cells[j]);
            } else {
                if (colspanCount > 1) {
                    console.log(j,thead.rows[i]);
                    thead.rows[i].cells[j + 1].setAttribute(
                        "colspan",
                        colspanCount
                    );
                }
                colspanCount = 1;
                currentCell = thead.rows[i].cells[j];
            }
        }

        if (colspanCount > 1) {
            currentCell.setAttribute("colspan", colspanCount);
        }
        colspanCount = 1;
    }
    if(t){
        td = document.createElement("th");
        td.innerHTML = "TOTAL";
        td.style = "background-color : lightblue";
        td.setAttribute("colspan", t);
                td.setAttribute("rowspan", thead.rows.length);
                thead.rows[0].appendChild(td)}
            
    return thead;
}

function mergetbody(tbody) {
    let currentCell;
    let rowspanCount = 1;
    for (let i = 0; i < tbody.rows.length; i++) {
        currentCell = tbody.rows[i].cells[0];
        for (let j = i + 1; j < tbody.rows.length; j++) {
            if (currentCell.innerHTML === tbody.rows[j].cells[0].innerHTML) {
                rowspanCount++;
                tbody.rows[j].removeChild(tbody.rows[j].cells[0]);
            } else {
                if (rowspanCount > 1) {
                    currentCell.setAttribute("rowspan", rowspanCount);
                }
                rowspanCount = 1;
                currentCell = tbody.rows[j].cells[0];
            }
        }
        if (rowspanCount > 1) {
            currentCell.setAttribute("rowspan", rowspanCount);
        }
        rowspanCount = 1;
    }
    return tbody;
}

function getAbrev(id, etablissements) {
    for (let i = 0; i < etablissements.length; i++) {
        if (etablissements[i].id === id) {
            return etablissements[i].abrev;
        }
    }
    return null;
}

function sortTbody(tbody) {
    const rows = tbody.rows;
    const rowsArray = Array.from(rows);
    rowsArray.sort((a, b) => {
        const firstCellA = a.cells[0].textContent;
        const firstCellB = b.cells[0].textContent;
        if (firstCellA < firstCellB) {
            return 1;
        } else if (firstCellA > firstCellB) {
            return -1;
        } else {
            return 0;
        }
    });
    for (let i = 0; i < rowsArray.length; i++) {
        tbody.appendChild(rowsArray[i]);
    }
}
let letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

function generateRandomLetter() {
  let randomIndex = Math.floor(Math.random() * letters.length);
  let randomLetter = letters[randomIndex];
  letters.splice(randomIndex, 1);
  return randomLetter;
}
