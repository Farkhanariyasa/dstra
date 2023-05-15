const barIkuptik2 = document.getElementById('bar-kota-batu-ikuptik-jenis');
new Chart(barIkuptik2, {
    type: 'bar',
    data: {
    labels: [['Jasa Transportasi'], ['Jasa Penyedia', 'Makanan dan Minuman'], ['Jasa Akomodasi'],
    ],
    datasets: [{
        label: 'IKUPTIK',
        data: [51.11, 45.52, 51.11],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00", "#506396",
            "#4b395f", "#b35c74",
            "#ffbc33", "#7382ab",
            "#6f617f", "#c27d90"
        ],
    }]
    },
    options: {
        scales: {
            y: {
            beginAtZero: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['IKUPTIK di Kota Batu Berdasarkan Jenis Usahanya'],
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
            }
        },
    },
    plugins: [ChartDataLabels]
});
