const C2 = document.getElementById('viz-2-3-C-2');

new Chart(C2, {
    type: 'bar',
    data: {
        labels: [
            ["Tablet"],
            ["PC"],
            ["Laptop"],
            ["Smartphone"],
        ],

        datasets: [{
            label: 'Jumlah Perangkat Digital',
            data: [
                20,
                32,
                110,
                781
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
                "#7382ab",
            ],
        }]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                display: false,
                min: 0,
                max: 900,
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: false,
                text : ['Pemanfaatan TIK Pada Unit Usaha Pariwisata'],
                font: {
                    size: 16,
                    weight: 'bold',
                }
            },
            subtitle: {
                display: false,
                text : ['Berdasarkan Jenis Usaha Pariwisata'],
                font: {
                    size: 14,
                }
            },
            legend:{
                display: false,
                position: 'bottom',
                align: 'start',
            },
            tooltip: {
                callbacks: {
                    title: (context) => {
                        console.log(context[0].label);
                        return context[0].label.replaceAll(',',' ');
                    }
                }
            },
            datalabels: {
                display: true,
                color: 'black',
                anchor: 'end',
                align: 'end',
            }
        },
    },
    plugins: [ChartDataLabels]
});