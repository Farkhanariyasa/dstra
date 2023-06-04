const qa_output1_2 = document.getElementById("qa_output1_2");

const data_qa_output1_2 = {
    labels: ['Dec-21', 'Jan-22', 'Feb-22', 'Mar-22', 'Apr-22', 'May-22', 'Jun-22', 'Jul-22', 'Aug-22', 'Sep-22', 'Oct-22', 'Nov-22'],
    datasets: [{
      label: 'Distribusi Jumlah Records',
      data: [334211,
        292733,
        173486,
        422308,
        411807,
        299908,
        272050,
        208295,
        916472,
        823878,
        755080,
        462465,
        ], 
      fill: false,
      borderColor: "#C27D90",
      pointStyle: 'circle',
      pointRadius: 1,
      pointHoverRadius: 10,
    },

]
  };

const line_output1_2 = new Chart(qa_output1_2, {
    type: 'line',
    data: data_qa_output1_2,
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
                max: 1000000,
                ticks: {
                    stepSize: 250000,
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
                text: 'Distribusi Jumlah Records Provider Indosat',
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

const lineChartAxis_output1_2 = document.getElementById("forLineChartAxis_qa_output1_2");
lineChartAxis_output1_2.addEventListener("click", update_value_qa_output1_2(chk_bx));

function update_value_qa_output1_2(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line_output1_2.options.scales.x.display = true;
        line_output1_2.options.scales.y.display = true;
        line_output1_2.update();
    } else {
        console.log("uncheck");
        line_output1_2.options.scales.x.display = false;
        line_output1_2.options.scales.y.display = false;
        line_output1_2.update();
    }
};