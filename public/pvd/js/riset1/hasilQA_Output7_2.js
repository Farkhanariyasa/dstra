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
      data: [0.6979974714,
        0.7307762442,
        0.8113534436,
        0.8862523107,
        0.7718766386,
        0.9023865624,
        0.8596656152,
        0.8208842374,
        0.8193725972,
        0.8274116922,
        0.7675995514,
        0.8232348285,
        0.8538671742,
        0.7994465218,
        0.8138976106,
        0.8061893032,
        0.8247270369,
        0.8503732285,
        0.7979967346,
        0.7731736425,
        0.7679765349,
        0.6742284774,
        0.586395738,
        0.4919151517,
        
        
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