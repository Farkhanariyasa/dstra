const scatter = document.getElementById('hasil4');

new Chart(scatter, {
    type: 'scatter',
    data: {
        labels: "Scatter Plot",
        datasets: [{
            label: 'Pendapatan',
            data: [{
                x: 1,
                y: 1
            }, {
                x: 2,
                y: 2
            }, {
                x: 3,
                y: 3
            }]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : "Scatter Plot",
                font: {
                    size: 20
                }
            },
        },
        scales: {
            x: {
                type: 'linear',
                position: 'bottom',
            }
        }
    }
});