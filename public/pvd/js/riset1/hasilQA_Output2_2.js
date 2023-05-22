const qa_output2_2 = document.getElementById("qa_output2_2");

const data_qa_output2_2 = {
    labels: ['Dec-21', 'Jan-22', 'Feb-22', 'Mar-22', 'Apr-22', 'May-22', 'Jun-22', 'Jul-22', 'Aug-22', 'Sep-22', 'Oct-22', 'Nov-22'],
    datasets: [{
      label: 'Jumlah Records',
      data: [12210
        ,8453
        ,1157
        ,13258
        ,13495
        ,10135
        ,3199
        ,303
        ,35357
        ,27289
        ,34812
        ,50873], 
      fill: false,
      borderColor: "#506396",
      pointStyle: 'rect',
      pointRadius: 1,
      pointHoverRadius: 10,
    },

]
  };


// animation
// const totalDuration = 10000;
// const delayBetweenPoints = totalDuration / data_qa_output2_2.length;
// const previousY = (ctx) => ctx.index === 0 ? ctx.chart.scales.y.getPixelForValue(100) : ctx.chart.getDatasetMeta(ctx.datasetIndex).data[ctx.index - 1].getProps(['y'], true).y;
// const animation = {
//   x: {
//     type: 'number',
//     easing: 'linear',
//     duration: delayBetweenPoints,
//     from: NaN, // the point is initially skipped
//     delay(ctx) {
//       if (ctx.type !== 'data' || ctx.xStarted) {
//         return 0;
//       }
//       ctx.xStarted = true;
//       return ctx.index * delayBetweenPoints;
//     }
//   },
//   y: {
//     type: 'number',
//     easing: 'linear',
//     duration: delayBetweenPoints,
//     from: previousY,
//     delay(ctx) {
//       if (ctx.type !== 'data' || ctx.yStarted) {
//         return 0;
//       }
//       ctx.yStarted = true;
//       return ctx.index * delayBetweenPoints;
//     }
//   }
// };

const line_output2_2 = new Chart(qa_output2_2, {
    type: 'line',
    data: data_qa_output2_2,
    options: {
        // animation: animation,
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
                max: 60000,
                ticks: {
                    stepSize: 20000,
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
                text: 'Jumlah Records Duplicate Provider Indosat',
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

const lineChartAxis_output2_2 = document.getElementById("forLineChartAxis_qa_output2_2");
lineChartAxis_output2_2.addEventListener("click", update_value_qa_output2_2(chk_bx));

function update_value_qa_output2_2(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line_output2_2.options.scales.x.display = true;
        line_output2_2.options.scales.y.display = true;
        line_output2_2.update();
    } else {
        console.log("uncheck");
        line_output2_2.options.scales.x.display = false;
        line_output2_2.options.scales.y.display = false;
        line_output2_2.update();
    }
};