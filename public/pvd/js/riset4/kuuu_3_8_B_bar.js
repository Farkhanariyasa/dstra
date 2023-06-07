const H2 = document.getElementById('viz-2-3-8-B');

new Chart(H2, {
    type: 'bar',
    data: {
        labels: [
            ["Transfer Bank"],
            ["E-wallet"],
            ["QRIS"],
            ["Pembayaran dengan kartu"],
            ["Lainnya"]
        ],

        datasets: [{
            label: 'Jumlah Responden',
            data: [
                319,
                275,
                85,
                27,
                5
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
            ],
        }]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                display: false,
                min: 0,
                max: 500,
            },
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