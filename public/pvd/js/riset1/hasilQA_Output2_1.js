const qa_output2_1 = document.getElementById("qa_output2_1");

const data_qa_output2_1 = {
    labels: ['Dec-21', 'Jan-22', 'Feb-22', 'Mar-22', 'Apr-22', 'May-22', 'Jun-22', 'Jul-22', 'Aug-22', 'Sep-22', 'Oct-22', 'Nov-22'],
    datasets: [{
      label: 'Jumlah Records',
      data: [0,0,0,0,0,0,0,0,0,0,0,0], 
      fill: false,
      borderColor: "#C27D90",
      pointStyle: 'circle',
      pointRadius: 1,
      pointHoverRadius: 10,
    },

]
  };

const line_output2_1 = new Chart(qa_output2_1, {
    type: 'line',
    data: data_qa_output2_1,
    options: {
        animations: {
            
        },
        scales: {
            y: { // defining min and max so hiding the dataset does not change scale range
                min: -1,
                max: 1,
                ticks: {
                    stepSize: 0.5,
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
                text: 'Jumlah Records Duplicate Provider Telkomsel',
                font: {
                    size: 16,
                },
                color:'#493a5a',
                padding: {
                    top: 10,
                    bottom: 35
                }
            },

        }
    }
});

const lineChartAxis_output2_1 = document.getElementById("forLineChartAxis_qa_output2_1");
lineChartAxis_output2_1.addEventListener("click", update_value_qa_output2_1(chk_bx));

function update_value_qa_output2_1(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line_output2_1.options.scales.x.display = true;
        line_output2_1.options.scales.y.display = true;
        line_output2_1.update();
    } else {
        console.log("uncheck");
        line_output2_1.options.scales.x.display = false;
        line_output2_1.options.scales.y.display = false;
        line_output2_1.update();
    }
};