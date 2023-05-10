const bar4 = document.getElementById('bar-kec-bumiaji');
new Chart(bar4, {
    type: 'bar',
    data: {
    labels: [['Jasa', 'Transportasi'],
        ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
        ['Jasa', 'Akomodasi']
    ],
    datasets: [{
        label: 'Jumlah Unit Usaha Pariwisata',
        data: [
            uupKecBumiaji.transportasi,
            uupKecBumiaji.makan,
            uupKecBumiaji.akomodasi,
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
                text : ['Unit Usaha Pariwisata di Kecamatan Bumiaji Berdasarkan Jenis Usahanya'],
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
