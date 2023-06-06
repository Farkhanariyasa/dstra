const bar3 = document.getElementById('chart-4');
new Chart(bar3, {
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
            (ikuptikPerDimensiBumiaji.dimensi1).toFixed(2),
            (ikuptikPerDimensiBumiaji.dimensi2).toFixed(2),
            (ikuptikPerDimensiBumiaji.dimensi3).toFixed(2),
            (ikuptikPerDimensiBumiaji.dimensi4).toFixed(2),
            (ikuptikPerDimensiBumiaji.dimensi5).toFixed(2),
            (ikuptikPerDimensiBumiaji.dimensi6).toFixed(2),
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00",
            "#506396",
            "#4b395f",
            "#b35c74",
            "#ffbc33",
            "#7382ab",
            "#6f617f",
            "#c27d90"
        ],
    }]
    },
    options: {
        scales: {
            x:{
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
        plugins: {
            title: {
                display: true,
                text : ['Nilai IKUPTIK Masing-masing Dimensi di Kecamatan Bumiaji'],
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
