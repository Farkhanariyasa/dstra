const qa_output7_2 = document.getElementById("qa_output7_2");

const data_qa_output7_2 = {
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
      data: [0.628878501,
        0.6818473754,
        0.7319140697,
        0.7620206065,
        0.7247777353,
        0.7472722195,
        0.7250326288,
        0.7686590337,
        0.7812883666,
        0.8602726182,
        0.7918687961,
        0.8468815902,
        0.9143253325,
        0.8546178662,
        0.8332849802,
        0.8081866641,
        0.7857043639,
        0.7833276599,
        0.7357177234,
        0.6611292148,
        0.6319668053,
        0.5777221125,
        0.5439384794,
        0.4299385379,
        
        ], 
      fill: false,
      borderColor: "#C27D90",
      pointStyle: 'circle',
      pointRadius: 1,
      pointHoverRadius: 10,
    },

]
  };

const line_output7_2 = new Chart(qa_output7_2, {
    type: 'line',
    data: data_qa_output7_2,
    options: {
        animations: {
            // tension: {
            //     duration: 1000,
            //     easing: 'linear',
            //     from: 1,
            //     to: 0,
            //     loop: true
            // }
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
                text: ['Normalized Rata-Rata Jumlah Records per Jam', 'Selama Satu Tahun Provider Indosat'],
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

const lineChartAxis_output7_2 = document.getElementById("forLineChartAxis_qa_output7_2");
lineChartAxis_output7_2.addEventListener("click", update_value_qa_output7_2(chk_bx));

function update_value_qa_output7_2(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line_output7_2.options.scales.x.display = true;
        line_output7_2.options.scales.y.display = true;
        line_output7_2.update();
    } else {
        console.log("uncheck");
        line_output7_2.options.scales.x.display = false;
        line_output7_2.options.scales.y.display = false;
        line_output7_2.update();
    }
};