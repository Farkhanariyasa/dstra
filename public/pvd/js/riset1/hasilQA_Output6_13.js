const qa_output6_13 = document.getElementById("qa_output6_13");

const data_qa_output6_13 = {
    labels: ['1',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    '11',
    '12',
    '13',
    '14',
    '15',
    '16',
    '17',
    '18',
    '19',
    '20',
    '21',
    '22',
    '23',
    '24',
    '25',
    '26',
    '27',
    '28',
    '29',
    '30',
    '31',
    ],
    datasets: [{
      label: 'Jumlah Subscriber',
      data: [0.0303030303,
        0,
        0,
        0.0303030303,
        0,
        0,
        0,
        0,
        0,
        0.0303030303,
        0,
        0.0303030303,
        0,
        0,
        0,
        0.0303030303,
        0.06060606061,
        0,
        0,
        0,
        0.06060606061,
        0,
        0,
        0.1212121212,
        0.0303030303,
        0,
        0.0303030303,
        0.0303030303,
        0.1515151515,
        0.3939393939,
        1,
        
        
        
        
        
        
             
        
        ], 
      fill: false,
      borderColor: "#C27D90",
      pointStyle: 'circle',
      pointRadius: 1,
      pointHoverRadius: 10,
    },

]
  };

const line_output6_13 = new Chart(qa_output6_13, {
    type: 'line',
    data: data_qa_output6_13,
    options: {
        animations: {
            
        },
        scales: {
            y: { // defining min and max so hiding the dataset does not change scale range
                min: 0,
                max: 1,
                ticks: {
                    stepSize: 0.25,
                    callback: function(value, index, values) {
                        return value.toFixed(2);
                    }
                },
                grid: {
                    display: true
                } 
            },
            x: {
                grid: {
                    display: false
                }
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        interaction: {
            intersect: false,
            mode: 'index',
        },
        plugins: {
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    boxWidth: 10,
                    boxHeight: 10,
                    padding: 20,
                    font: {
                        size: 14,
                        weight: 'bold',
                    }
                }
            },
            title: {
                display: true,
                text: ['Jumlah Subscriber yang Hadir Per Bulan', 'Desember 2021 Provider Indosat'],
                font: {
                    size: 16,
                },
                color:'#493a5a',
                padding: {
                    top: 10,
                    bottom: 35
                }
            },
            datalabels: {
                display: false,
                color: 'black',
                align: 'top',
                font: {
                    size: 10,
                },
            },

        },
        layout: {
            padding: 20,
        }
    },
    plugins: [ChartDataLabels],
});

const lineChartAxis_output6_13 = document.getElementById("forLineChartAxis_qa_output6_13");
lineChartAxis_output6_13.addEventListener("click", update_value_qa_output6_13(chk_bx));

function update_value_qa_output6_13(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line_output6_13.options.scales.x.display = true;
        line_output6_13.options.scales.y.display = true;
        line_output6_13.options.plugins.datalabels.display = false;
        line_output6_13.update();
    } else {
        console.log("uncheck");
        line_output6_13.options.scales.x.display = false;
        line_output6_13.options.scales.y.display = false;
        line_output6_13.options.plugins.datalabels.display = true;
        line_output6_13.update();
    }
};