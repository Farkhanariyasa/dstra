const bar2 = document.getElementById('chart-3');
new Chart(bar2, {
    type: 'bar',
    data: {
        labels: ['Batu', 'Junrejo', 'Bumiaji'],
datasets: [{
    label: 'IKUPTIK',
        data: [
            (ikuptikKec.batu).toFixed(2),
            (ikuptikKec.junrejo).toFixed(2),
            (ikuptikKec.bumiaji).toFixed(2),
        ],
        borderWidth: 1,
        backgroundColor: [
            "#50639690",
            "#50639690",
            "#506396",
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
                        size: 12
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
                text : ['Nilai IKUPTIK tiap Kecamatan di Kota Batu'],
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
