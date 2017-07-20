$(document).ready(function() {
  donutChart();
  barChart();

  $(window).resize(function() {
    window.donutChart.redraw();
    window.barChart.redraw();
  });
});

function donutChart() {
  window.donutChart = Morris.Donut({
    element: 'hero-donut',
    data: [
      {label: 'Wait', value: 20 },
      {label: 'Inprocess', value: 30 },
      {label: 'Success', value: 50 }
    ],
      colors: ['#c14640', '#24394e', '#0fa877'],
	  formatter: function (y) { return y + "%" },
      resize: true,
      redraw: true
});
}

function barChart() {
  window.barChart = Morris.Bar({
    element: 'hero-bar',
    data: [
          { y: 'Jan-Mar', a: 100, b: 90, c:10},
          { y: 'Apr - Jun', a: 75,  b: 65, c:10},
          { y: 'Jul - Sep', a: 50,  b: 40, c:10},
          { y: 'Oct - Dec', a: 75,  b: 65, c:10}
        ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Success', 'Inprocess', 'Wait'],
    barColors: ['#0fa877', '#24394e', '#c14640'],
    resize: true,
    redraw: true
  });
}


