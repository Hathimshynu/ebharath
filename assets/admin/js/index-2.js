//Sales Chart
function projectReport() {
  var options = {
    series: [{
      name: 'Active Projects',
      type: 'column',
      data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
    }, {
      name: 'Tasks',
      type: 'line',
      data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
    }],
    chart: {
      height: 350,
      type: 'line',
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    title: {
      text: undefined,
    },
    legend: {
      position: 'top',
    },
    dataLabels: {
      enabled: false,
      enabledOnSeries: [1]
    },
    stroke: {
      width: [1, 1.5],
      curve: 'smooth',
      lineCap: 'butt',
      dashArray: [0, 2]
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    yaxis: [{
      show: false,
      color: '#4eb6d0',
      title: {
        text: undefined,
      },

    }, {
      opposite: true,
      title: {
        text: undefined,
      }
    }],
		xaxis: {
			axisBorder: {
				color: 'rgba(119, 119, 142, 0.05)',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				color: 'rgba(119, 119, 142, 0.05)',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
		},
    colors: [`rgb(${myVarVal})`, "#fd7e14"],
    plotOptions: {
      bar: {
        columnWidth: "20%",
        borderRadius: 3
      }
    },
  };
  document.getElementById('projectReport').innerHTML = '';
  var chart = new ApexCharts(document.querySelector("#projectReport"), options);
  chart.render();
}
$(function () {

  // Data Table
  $('#projectSummary').DataTable({
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
