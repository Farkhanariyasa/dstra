const D2 = document.getElementById('viz-2-3-4-B');

new Chart(D2, {
    type: 'bar',
    data: {
        labels: [
            ["Twitter"],
            ["Line"],
            ["Telegram"],
            ["Email"],
            ["Lainnya"],
            ["Telepon"],
            ["Facebook"],
            ["Instagram"],
            ["WhatsApp"],
        ],

        datasets: [{
            label: 'Jumlah Pengguna',
            data: [
                3,3,15,43,70,91,117,131,722
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
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