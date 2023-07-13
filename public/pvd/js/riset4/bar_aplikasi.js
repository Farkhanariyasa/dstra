const barPemanfaatan2 = document.getElementById('chart-7');
const barPemanfaatan_2 = new Chart(barPemanfaatan2, {
    type: 'bar',
    data: {
    labels: [
        ['Whatsapp'], 
        ['Instagram'],
        ['Facebook'], 
        ['Telepon'],
        ['Lainnya'],
        ['Email'],
        ['Telegram'],
        ['Line'],
        ['Twitter'],
    ],
    datasets: [{
        label: 'Jumlah',
        data: [722, 131, 117, 91, 70, 43, 15, 3, 3
        ],
        borderWidth: 1,
        backgroundColor: [
            "#b35c74", "#b35c7490",
            "#b35c7490", "#b35c7490",
            "#b35c7490", "#b35c7490",
            "#b35c7490", "#b35c7490",
            "#b35c7490", "#b35c7490",
        ],
    }]
    },
    options: {
        scales: {
            x:{
                max: 800,
                grid:{
                    display:false
                },
            },
            y:{           
                beginAtZero: true,
                grid:{
                    display:false
                },
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        indexAxis: 'y',
        elements: {
        bar: {
            borderWidth: 3,
        }
        },
        plugins: {
            title: {
                display: false,
                text : ['Pemanfaatan TIK pada Unit Usaha Pariwisata Berdasarkan Kegiatan Pemanfaatannya'],
                font: {
                    size: 20
                }
            },
            legend:{
                display: false,
                position: 'right',
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

