console.log('admin.js loaded');
// BEGIN Line Graph ============================================
var chartLine = {
    type: 'line',
    data: {
        labels: ['May', 'June', 'July', 'August'],
        datasets: [{
            label: 'Q1',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgba(0, 0, 0, 0.2)',
            data: [1900, 1800, 1900, 1800],
            fill: true,
        }, {
            label: 'Q2',
            fill: true,
            backgroundColor: 'rgba(0, 123, 255, 0.7)',
            borderColor: 'rgba(0, 123, 255, 1)',
            data: [2000, 1700, 2000, 1500],
        }]
    },
    options: {
        responsive: true,
        title: {
            display: false,
            text: 'Line Chart'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Month'
                }
            }],
            yAxes: [{
                display: true,

                scaleLabel: {
                    display: true,
                    labelString: 'Views'
                }
            }]
        }
    }
};

// BEGIN Bar Graph ============================================
var chartBar = {
    type: 'bar',
    data: {
        labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        datasets: [{
            label: 'Last Week',
            data: [1, 2, 3, 4, 5, 6, 7],
            backgroundColor: [
                'rgba(0, 0, 0, .2)',
                'rgba(0, 0, 0, .2)',
                'rgba(0, 0, 0, .2)',
                'rgba(0, 0, 0, .2)',
                'rgba(0, 0, 0, .2)',
                'rgba(0, 0, 0, .2)',
                'rgba(0, 0, 0, .2)',
            ]
        },
            {
                label: 'This Week',
                data: [2, 4, 6, 8, 10, 12, 14],
                backgroundColor: [
                    'rgba(0, 123, 255, 1)',
                    'rgba(0, 123, 255, 1)',
                    'rgba(0, 123, 255, 1)',
                    'rgba(0, 123, 255, 1)',
                    'rgba(0, 123, 255, 1)',
                    'rgba(0, 123, 255, 1)',
                    'rgba(0, 123, 255, 1)'
                ]
            }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
};

// BEGIN Pie Graph ============================================
var chartPie = {
    type: 'pie',
    data: {
        labels: ['Drafts', 'Pages', 'Posts'],
        datasets: [{
            label: 'Q1',
            backgroundColor: [
                'rgba(0, 0, 0, 0.2)',
                'rgba(0, 123, 255, 0.7)',
                'rgba(0, 123, 255, 1)'
            ],
            data: [5, 15, 25],
            fill: true,
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        title: {
            display: false,
            text: 'Pie Chart'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: false
            }],
            yAxes: [{
                display: false
            }]
        }
    }
};
// Load Chart.js Graphs after the window is fully loaded
window.onload = function () {
    var ctxLine = document.getElementById('chartLine').getContext('2d');
    window.chartLine = new Chart(ctxLine, chartLine);

    var ctxBar = document.getElementById('chartBar').getContext('2d');
    window.chartBar = new Chart(ctxBar, chartBar);

    var ctxPie = document.getElementById('chartPie').getContext('2d');
    window.chartPie = new Chart(ctxPie, chartPie);
};