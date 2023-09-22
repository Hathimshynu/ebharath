// Revenue Report
function revenueReport() {
  var options = {
    series: [{
      name: 'progress',
      type: 'line',
      data: [-15, 32, -11, 63, 16, 82, 292, 107, -18, 56, 200, 80],
    }, {
      name: 'active',
      type: 'column',
      data: [104, 102, 117, 146, 118, 115, 220, 103, 83, 114, 265, 174],
    }, {
      name: 'inactive',
      type: 'column',
      data: [-34, -42, -97, -56, -71, -175, -60, -34, -56, -78, -119, -53]
    }],
    chart: {
      height: 395,
    },
    stroke: {
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      dashArray: [5, 0, 0],
      width: [2, 0, 0]
    },
    fill: {
      opacity: [1, 1, 1]
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    colors: ["#ffda82", `rgb(${myVarVal})` , "#edf1f7"],
    plotOptions: {
      bar: {
        colors: {
          ranges: [{
            from: -100,
            to: -46,
            color: '#edf1f7'
          }, {
            from: -45,
            to: 0,
            color: '#edf1f7'
          }]
        },
        columnWidth: '30%',
      }
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: true,
      position: 'bottom',
    },
    yaxis: {
      title: {
        style: {
          color: '	#adb5be',
          fontSize: '14px',
          fontFamily: 'poppins, sans-serif',
          fontWeight: 600,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      labels: {
        formatter: function (y) {
          return y.toFixed(0) + "";
        }
      }
    },
    xaxis: {
      type: 'month',
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'sep', 'oct', 'nov', 'dec'],
      axisBorder: {
        show: true,
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        show: true,
        borderType: 'solid',
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
      labels: {
        rotate: -90
      }
    }

  };
  document.getElementById('revenueReport').innerHTML = ''
  var chart = new ApexCharts(document.querySelector("#revenueReport"), options);
  chart.render();
}

$(function () {

  // Data Table
  $('#payrollReport').DataTable({
    language: {
      searchPlaceholder: 'Search here...',
      sSearch: '',
      lengthMenu: '_MENU_',
    }
  });

  //______Select2
  $('.select2').select2({
    minimumResultsForSearch: Infinity,
    width: "auto"
  });
});
