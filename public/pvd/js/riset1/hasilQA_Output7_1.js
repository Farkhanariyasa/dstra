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
      data: [0.431345868,
        0.2834055262,
        0.2573378412,
        0.2693320459,
        0.2998534997,
        0.423709199,
        0.6810833359,
        0.8609716025,
        0.8223962549,
        0.9144287932,
        0.9465408992,
        0.9076848374,
        0.959733809,
        0.9620752807,
        0.873533445,
        0.8860576235,
        0.9046990122,
        0.8393094798,
        0.7552186849,
        0.7519918874,
        0.6951180321,
        0.6006417618,
        0.5265473711,
        0.4938435484,
        ], 
      fill: false,
      borderColor: " #C27D90",
      pointStyle: 'circle',
      pointRadius: 4,
      pointHoverRadius: 10,
    },

]
  };

const line_output7_1 = new Chart(qa_output7_1, {
    type: 'line',
    data: data_qa_output7_1,
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