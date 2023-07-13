const bar3 = document.getElementById('chart-4');
new Chart(bar3, {
    type: 'bar',
    data: {
        labels: [['Jasa Transportasi'], ['Jasa Penyedia', 'Makanan dan Minuman'], ['Penyedia Akomodasi']],
datasets: [{
    label: 'IKUPTIK',
        data: [
            (ikuptikJenis.transportasi).toFixed(2),
            (ikuptikJenis.makanan).toFixed(2),
            (ikuptikJenis.akomodasi).toFixed(2),
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
                text : ['Nilai IKUPTIK tiap Jenis Usaha Pariwisata di Kota Batu'],
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
