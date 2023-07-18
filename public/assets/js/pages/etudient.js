const per = () => {
    // console.log('archiveStudent called');

    const apiUrl = '/api/per'; // Replace with your Laravel API endpoint for fetching archives

    const c1=document.getElementById('criteria1').value
    const c2=document.getElementById('criteria2').value
    const c3=document.getElementById('filter').value
    const selectedRadio = document.querySelector('input[name="filter"]:checked');
    console.log("c1",c1)
    console.log("c2",c2)
    console.log("c3",c3)
    
    let selectedValue=''
    if (selectedRadio) {
    selectedValue = selectedRadio.value;
    } 
    console.log("selectedValue",selectedValue)
    data={
        criteria1:c1,
        criteria2:c2,
        filter:c3
    }


console.log("data avant ",data)

    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => response.json())
        .then(data => {
            console.log("hgfjkasdhvchmjkahgj data",data);
            console.log("data.chartData.datasets.data",data.chartData.datasets[0].data)
            // const counter=data.chartData.datasets[0].data

            // var dashboardData = {
            //       data:data.chartData.datasets[0].data,
            //       labels:data.chartData.labels,
            //   };

            generateTable(data);
            graph(data.chartData.labels,data.chartData.datasets[0].data)
            // renderDashboard(dashboardData); // Success message from Laravel
        })
        .catch(error => {
            console.error('Error:', error);
        });



        function createArrayOfZeros(length) {
            if (length <= 0) {
              throw new Error("Length must be a positive integer.");
            }
          
            return Array.from({ length }, () => 0);
          }

//         <div class="table-responsive-sm" id="table-container">
// </div>

{/* <script> */}
  // Sample data
//   const data = {
//     results: [
//       { count: 107, etudiants_GENRE: "F", inscrire_Redoublant: "non" },
//       { count: 109, etudiants_GENRE: "M", inscrire_Redoublant: "non" },
//       { count: 231, etudiants_GENRE: "MR", inscrire_Redoublant: "non" },
//       { count: 114, etudiants_GENRE: "F", inscrire_Redoublant: "oui" },
//       { count: 98, etudiants_GENRE: "M", inscrire_Redoublant: "oui" },
//       { count: 200, etudiants_GENRE: "MR", inscrire_Redoublant: "oui" },
//     ],
//     criteria1: "GENRE",
//     criteria2: "Redoublant",
//     chartData: {
//       datasets: [
//         {
//           backgroundColor: "rgba(0, 123, 255, 0.5)",
//           data: [107, 109, 231, 114, 98, 200],
//           label: "Count",
//         },
//       ],
//       labels: ["F - non", "M - non", "MR - non", "F - oui", "M - oui", "MR - oui"],
//     },
//   };

  // Function to generate the table HTML
  function generateTable(data) {
    const tableContainer = document.getElementById("table-container");
    tableContainer.innerHTML=''
    const table = document.createElement("table");
    table.classList.add("table", "table-centered", "mb-0");
    const thead = document.createElement("thead");
    thead.classList.add("table-dark");

    const tbody = document.createElement("tbody");

    const headers = [data.criteria1, data.criteria2, "Count"];
    const headerRow = document.createElement("tr");

    headers.forEach((headerText) => {
      const th = document.createElement("th");
      th.textContent = headerText;
      headerRow.appendChild(th);
    });

    thead.appendChild(headerRow);

    data.results.forEach((result) => {
      const row = document.createElement("tr");
      const criteria1Cell = document.createElement("td");
      const criteria2Cell = document.createElement("td");
      const countCell = document.createElement("td");

      criteria1Cell.textContent = result["inscrire_" + data.criteria1] ? result["inscrire_" + data.criteria1] : result["etudiants_" + data.criteria1];
      criteria2Cell.textContent = result["inscrire_" + data.criteria2] ? result["inscrire_" + data.criteria2] : result["etudiants_" + data.criteria2];
      countCell.textContent = result.count;

      row.appendChild(criteria1Cell);
      row.appendChild(criteria2Cell);
      row.appendChild(countCell);

      tbody.appendChild(row);
    });

    table.appendChild(thead);
    table.appendChild(tbody);
    tableContainer.appendChild(table);

    
    // var ctx= document.getElementById(chart).innerHTML=''
    // var ctx = document.getElementById('chart').getContext('2d');

    // var chart = new Chart(ctx, {
    //     type: 'bar', 
    //     data: data.chartData,
    //     options: {
    //     }
    // });
  }


//   function renderHighPerformingProductChart(data) {
//     var e = data.colors ? data.colors.split(",") : ["#727cf5", "#e3eaef"];
//     var r = {
//       chart: { height: 257, type: "bar", stacked: !0 },
//       plotOptions: { bar: { horizontal: !1, columnWidth: "20%" } },
//       dataLabels: { enabled: !1 },
//       stroke: { show: !0, width: 2, colors: ["transparent"] },
//       series: [
//         {
//           name: "Actual",
//           data: data.actualData,
//         },
//       ],
//       zoom: { enabled: !1 },
//       legend: { show: !1 },
//       colors: e,
//       xaxis: {
//         categories: data.categories,
//         axisBorder: { show: !1 },
//       },
//       yaxis: {
//         labels: {
//           formatter: function (e) {
//             return e + "k";
//           },
//           offsetX: -15,
//         },
//       },
//       fill: { opacity: 1 },
//       tooltip: {
//         y: {
//           formatter: function (e) {
//             return "$" + e + "k";
//           },
//         },
//       },
//     };
  
//     new ApexCharts(
//       document.querySelector("#chart"),
//       r
//     ).render();
//   }
  
//   function renderDashboard(data) {
//     var e = data.highPerformingProduct;
//     if (e) {
//       renderHighPerformingProductChart(e);
//     }
   
//   }

function graph(labels,data) {
  
    const zero=createArrayOfZeros(data.length)
    !(function (o) {
        "use strict";
        function e() {
          (this.$body = o("body")), (this.charts = []);
        }
      
        e.prototype.initCharts = function () {
          // ... Other chart configurations ...
      
          var e = ["#727cf5", "#e3eaef"];
          var t = o("#high-performing-product").data("colors");
          if (t) {
            e = t.split(",");
          }
          var r = {
            chart: { height: 257, type: "bar", stacked: !0 },
            plotOptions: { bar: { horizontal: !1, columnWidth: "20%" } },
            dataLabels: { enabled: !1 },
            stroke: { show: !0, width: 2, colors: ["transparent"] },
            series: [
              {
                name: "Actual",
                data: data,
              },
              {
                name: "Projection",
                data: zero,
              },
            ],
            zoom: { enabled: !1 },
            legend: { show: !1 },
            colors: e,
            xaxis: {
              categories: labels,
              axisBorder: { show: !1 },
            },
            yaxis: {
              labels: {
                formatter: function (e) {
                  return e;
                },
                offsetX: -15,
              },
            },
            fill: { opacity: 1 },
            tooltip: {
              y: {
                formatter: function (e) {
                  return   e ;
                },
              },
            },
          };
      
          new ApexCharts(
            document.querySelector("#high-performing-product"),
            r
          ).render();
        };
      
        // ... Other init functions ...
      
        e.prototype.init = function () {
          // ... Other initializations ...
          this.initCharts();
          // ... Other initializations ...
        };
      
        o.Dashboard = new e();
        o.Dashboard.Constructor = e;
      })(window.jQuery);
      
      (function (t) {
        "use strict";
        t(document).ready(function (e) {
          t.Dashboard.init();
        });
      })(window.jQuery);
      
}


  
};


document.getElementById('submitfultrage').addEventListener('click', per);














const archiveStudent = () => {
    console.log('archiveStudent called');

    const apiUrl = '/api/archiveStudent'; // Replace with your Laravel API endpoint for fetching archives

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            console.log("Retrieved data from Laravel API", data);
            
        })
        .catch(error => {
            console.error('Error:', error);
        });

};


document.getElementById('archivage').addEventListener('click', archiveStudent);