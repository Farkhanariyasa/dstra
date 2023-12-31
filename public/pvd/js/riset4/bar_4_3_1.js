const bar1 = document.getElementById('chart-2');
new Chart(bar1, {
    type: 'bar',
    data: {
        labels: [['Infrastruktur', 'dan', 'Konektivitas'],
        ['Penggunaan', 'TIK'],
        ['Sumber', 'Daya', 'Manusia'],
        ['Manajemen', 'Organisasi'],
        ['Ketersediaan', 'Prasarana', 'TIK'],
        ['Motivasi', 'Penggunaan', 'TIK']
    ],
datasets: [{
    label: 'Nilai',
        data: [
            (ikuptikPerDimensiBatu.dimensi1).toFixed(2),
            (ikuptikPerDimensiBatu.dimensi2).toFixed(2),
            (ikuptikPerDimensiBatu.dimensi3).toFixed(2),
            (ikuptikPerDimensiBatu.dimensi4).toFixed(2),
            (ikuptikPerDimensiBatu.dimensi5).toFixed(2),
            (ikuptikPerDimensiBatu.dimensi6).toFixed(2),
        ],
        borderWidth: 1,
        backgroundColor: [
            "#50639690",
            "#50639690",
            "#50639690",
            "#50639690",
            "#506396",
            "#50639690",
        ],
    }]
    },
    options: {
        scales: {
            x:{
                grid:{
                    display:false
                },
                ticks: {
                    font: {
                        size: 10
                    }
                }
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
        plugins: {
            title: {
                display: true,
                text : ['Nilai IKUPTIK Masing-masing Dimensi di Kecamatan Batu'],
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
            datalabels:{
                display:true,
                color:'black'
            },
        },
    },
    plugins: [ChartDataLabels]
});
