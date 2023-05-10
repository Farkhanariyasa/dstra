const bar3 = document.getElementById('bar-kec-junrejo');
new Chart(bar3, {
    type: 'bar',
    data: {
    labels: [['Jasa', 'Transportasi'],
        ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
        ['Jasa', 'Akomodasi']
    ],
    datasets: [{
        label: 'Jumlah Unit Usaha Pariwisata',
        data: [
            uupKecJunrejo.transportasi,
            uupKecJunrejo.makan,
            uupKecJunrejo.akomodasi,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#7382ab",
            "#ffbc33",
            "#6f617f",
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
                text : ['Unit Usaha Pariwisata di Kecamatan Junrejo Berdasarkan Jenis Usahanya'],
                font: {
                    size: 14
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
