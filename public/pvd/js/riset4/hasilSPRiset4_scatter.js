const scatter = document.getElementById('hasil4');

var newArray = [];
for (var i = 0; i < umur.length; i++) {
    newArray.push([umur[i], pendapatanNoFilter[i]]);
}


new Chart(scatter, {
    type: 'scatter',
    data: {
        labels: "Scatter Plot",
        datasets: [{
            label: 'Dataset',
            backgroundColor: "#ffbc33",
            borderColor: "#7382ab",
            data : newArray,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : "Scatter Plot antara Umur (X) dan Pendapatan (Y)",
                font: {
                    size: 20
                }
            },
        },
        scales: {
            x: {
                type: 'linear',
                position: 'bottom',
                title: {
                    display: true,
                    text: 'Umur',
                    font: {
                        weight: 'bold',
                        size: 15
                    }
                },
            },
            y: {
                type: 'linear',
                position: 'left',
                title: {
                    display: true,
                    text: 'Pendapatan',
                    font: { 
                        weight: 'bold',
                        size: 15
                    } 
                },

            }
        }
    }
});