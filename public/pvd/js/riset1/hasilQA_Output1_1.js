const qa_output1_1 = document.getElementById("qa_output1_1");

const data_qa_output1_1 = {
    labels: ['Dec-21', 'Jan-22', 'Feb-22', 'Mar-22', 'Apr-22', 'May-22', 'Jun-22', 'Jul-22', 'Aug-22', 'Sep-22', 'Oct-22', 'Nov-22'],
    datasets: [{
      label: 'Distribusi Jumlah Records',
      data: [126482
        ,141985
        ,109704
        ,143148
        ,121738
        ,136853
        ,143489
        ,140867
        ,174298
        ,166746
        ,141159
        ,135295], 
      fill: false,
      borderColor: "#506396",
      pointStyle: 'circle',
      pointRadius: 1,
      pointHoverRadius: 10,
    },

]
  };

const line_output1_1 = new Chart(qa_output1_1, {
    type: 'line',
    data: data_qa_output1_1,
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
                max: 200000,
                ticks: {
                    stepSize: 50000,
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
                text: 'Distribusi Jumlah Records Provider Telkomsel',
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

const lineChartAxis_output1_1 = document.getElementById("forLineChartAxis_qa_output1_1");
lineChartAxis_output1_1.addEventListener("click", update_value_qa_output1_1(chk_bx));

function update_value_qa_output1_1(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line_output1_1.options.scales.x.display = true;
        line_output1_1.options.scales.y.display = true;
        line_output1_1.options.plugins.datalabels.display = false;
        line_output1_1.update();
    } else {
        console.log("uncheck");
        line_output1_1.options.scales.x.display = false;
        line_output1_1.options.scales.y.display = false;
        line_output1_1.options.plugins.datalabels.display = true;
        line_output1_1.update();
    }
};