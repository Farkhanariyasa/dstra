const qa_output7_1 = document.getElementById("qa_output7_1");

const data_qa_output7_1 = {
    labels: [
    '0',
    '1',
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
    ],
    datasets: [{
      label: 'Distribusi Jumlah Records',
      data: [0.5825326626,
        0.4534490893,
        0.429477167,
        0.4632290708,
        0.5159032452,
        0.6177306609,
        0.8354780049,
        0.8681694608,
        0.7938364099,
        0.8605770541,
        0.8869290273,
        0.8966816503,
        0.9135486465,
        0.8950790002,
        0.8436203069,
        0.85347263,
        0.9393022747,
        0.9672271875,
        0.9311125921,
        0.9306564711,
        0.883295896,
        0.8176415165,
        0.6647873225,
        0.6234903408,
        
        ], 
      fill: false,
      borderColor: " #C27D90",
      pointStyle: 'circle',
      pointRadius: 1,
      pointHoverRadius: 10,
    },

]
  };

const line_output7_1 = new Chart(qa_output7_1, {
    type: 'line',
    data: data_qa_output7_1,
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
                text: ['Normalized Rata-Rata Jumlah Records per Jam', 'Selama Satu Tahun Provider Telkomsel'],
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

const lineChartAxis_output7_1 = document.getElementById("forLineChartAxis_qa_output7_1");
lineChartAxis_output7_1.addEventListener("click", update_value_qa_output7_1(chk_bx));

function update_value_qa_output7_1(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line_output7_1.options.scales.x.display = true;
        line_output7_1.options.scales.y.display = true;
        line_output7_1.update();
    } else {
        console.log("uncheck");
        line_output7_1.options.scales.x.display = false;
        line_output7_1.options.scales.y.display = false;
        line_output7_1.update();
    }
};