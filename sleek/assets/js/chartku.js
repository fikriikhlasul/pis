/*======== 11. DOUGHNUT CHART ========*/
var doughnut = document.getElementById("donatChart");
if (doughnut !== null) {
  var myDoughnutChart = new Chart(doughnut, {
    type: "doughnut",
    data: {
      labels: ["Laki-laki", "Perempuan"],
      datasets: [
        {
          label: ["Laki-laki", "Perempuan"],
          data: data,
          backgroundColor: color,
          borderWidth: 1
          // borderColor: ['#4c84ff','#29cc97','#8061ef','#fec402']
          // hoverBorderColor: ['#4c84ff', '#29cc97', '#8061ef', '#fec402']
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      cutoutPercentage: 70,
      tooltips: {
        callbacks: {
          title: function(tooltipItem, data) {
            return "Jenis Kelamin : " + data["labels"][tooltipItem[0]["index"]];
          },
          label: function(tooltipItem, data) {
            return data["datasets"][0]["data"][tooltipItem["index"]];
          }
        },
        titleFontColor: "#888",
        bodyFontColor: "#555",
        titleFontSize: 12,
        bodyFontSize: 14,
        backgroundColor: "rgba(256,256,256,0.95)",
        displayColors: true,
        borderColor: "rgba(220, 220, 220, 0.9)",
        borderWidth: 2
      }
    }
  });
}
jQuery(document).ready(function() {
  jQuery('#responsive-data-table').DataTable({
   "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
   "pageLength": 20,
   "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
  });
 });