const hasil5 = document.getElementById("riset1_hasil5");

const data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'Value1',
      data: [65, 59, 80, 81, 26, 55, 40], 
      fill: false,
      borderColor: "#506396",
      pointStyle: 'circle',
      pointRadius: 10,
      pointHoverRadius: 15,
    },
    {
        label: 'Value2',
        data: [80, 10, 30, 55, 26, 21, 33],
        fill: false,
        borderColor: "#c27d90",
        pointStyle: 'cross',
        pointRadius: 10,
        pointHoverRadius: 15,
    },
    {
        label: 'Value3',
        data: [10, 20, 30, 40, 50, 60, 70],
        fill: false,
        borderColor: "#ffbc33",
        pointStyle: 'triangle',
        pointRadius: 10,
        pointHoverRadius: 15,
    }


]
  };

const line = new Chart(hasil5, {
    type: 'line',
    data: data,
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
                max: 100,
                ticks: {
                    stepSize: 10,
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
                display: true,
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
            }
        }
    }
});

const lineChartAxis_line = document.getElementById("forLineChartAxis_line");
lineChartAxis_line.addEventListener("click", update_value_line(chk_bx));

function update_value_line(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        line.options.scales.x.display = true;
        line.options.scales.y.display = true;
        line.update();
    } else {
        console.log("uncheck");
        line.options.scales.x.display = false;
        line.options.scales.y.display = false;
        line.update();
    }
};