const barPemanfaatan13 = document.getElementById('chart-13');
const barPemanfaatan_13 = new Chart(barPemanfaatan13, {
    type: 'bar',
    data: {
    labels: [
        ['Media Sosial'], 
        ['Marketplace'],
        ['Keduanya'],
    ],
    datasets: [{
        label: 'Persentase',
        data: [54.76, 14.84, 30.40
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

