const barPemanfaatan1 = document.getElementById('chart-4');
const barPemanfaatan_1 = new Chart(barPemanfaatan1, {
    type: 'bar',
    data: {
    labels: [
        ['Smartphone'], 
        ['Laptop'],
        ['PC'], 
        ['Tablet'],
    ],
    datasets: [{
        label: 'Jumlah',
        data: [781, 110, 32, 20
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00", "#ffab0090",
            "#ffab0090", "#ffab0090",
            "#ffab0090", "#ffab0090",
            "#ffab0090", "#ffab0090",
            "#ffab0090", "#ffab0090",
        ],
    }]
    },
    options: {
        scales: {
            x:{
                max: 1000,
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

