// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
console.log(stat)
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["ISN", "ESP", "ISCAE" ,"TOTAL"],
    datasets: [
      {
        label: "FILLES",
        backgroundColor: "#ffc107",
        borderColor: "#ffc107",
        data: [stat[0]['Filles'], stat[1]['Filles'], stat[2]['Filles'], stat[3]['Filles']]
    
      }
      ,
      {
      label: "TOTAL",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [stat[0]['total'], stat[1]['total'], stat[2]['total'], stat[3]['total']]
    }
  ],
  },
  options: {
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: stat[3]['total'],
          maxTicksLimit: 7
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
