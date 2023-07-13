const barPemanfaatan16 = document.getElementById('chart-16');
const barPemanfaatan_16 = new Chart(barPemanfaatan16, {
    type: 'bar',
    data: {
    labels: [
        ['Media Sosial'], 
        ['Marketplace'],
        ['Keduanya'],
    ],
    datasets: [{
        label: 'Persentase',
        data: [48.66, 20.30, 31.04
        ],
        borderWidth: 1,
        backgroundColor: [
            "#4b395f", "#4b395f90",
            "#4b395f90", "#4b395f90",
            "#4b395f90", "#4b395f90",
            "#4b395f90", "#4b395f90",
            "#4b395f90", "#4b395f90",
        ],
    }]
    },
    options: {
        scales: {
            x:{
                max: 70,
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
                },
            },
            datalabels: {
                display: true,
                color: 'black',
                anchor: 'end',
                align: 'end',
                formatter: function(value, context) {
                    return value + '%';
                },
            }
        },
    },
    plugins: [ChartDataLabels]
});

