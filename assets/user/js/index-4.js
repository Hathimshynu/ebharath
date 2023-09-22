function totalRevenue() {
  var options = {
    series: [{
      name: 'Last Year',
      data: [30, 25, 46, 28, 21, 45, 35, 64, 52, 59, 36, 39]
    }, {
      name: 'Present Year',
      data: [23, 11, 22, 35, 17, 28, 22, 37, 21, 44, 22, 30]
    }],
    chart: {
      height: 320,
      type: 'area'
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    dataLabels: {
      enabled: false
    },
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
    legend: {
      position: 'top'
    },
    colors: ["#eaebeb", `rgb(${myVarVal})`],
    stroke: {
      width: [0, 0],
      curve: 'smooth',
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  };

  document.getElementById('totalRevenue').innerHTML = '';
  var chart = new ApexCharts(document.querySelector("#totalRevenue"), options);
  chart.render();
}

function visitorsGrowth() {
    var options = {
      series: [{
        name: 'New Visitors',
        data: [76, 85, 101, 98, 87, 105, 91]
      }, {
        name: 'Repeated Visitors',
        data: [44, 55, 57, 56, 61, 58, 63]
      },],
      chart: {
        toolbar: {
          show: false
        },
        type: 'bar',
        height: 320
      },
      grid: {
        borderColor: '#f2f6f7',
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '55%',
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      xaxis: {
        categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      },
      yaxis: {
        title: {
          text: undefined
        }
      },
      xaxis: {
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
        }
      },
      fill: {
        opacity: 1
      },
      colors: [`rgb(${myVarVal})`, "#ededed"],
      legend: {
        show: false,
        position: 'top'
      },
      plotOptions: {
        bar: {
          columnWidth: "30%",
          borderRadius: 3
        }
      },
    };
    document.getElementById('visitorsGrowth').innerHTML = '';
    var chart = new ApexCharts(document.querySelector("#visitorsGrowth"), options);
    chart.render();
}

$(function () {

  // Data Table
  $('#recentInvoices').DataTable({
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