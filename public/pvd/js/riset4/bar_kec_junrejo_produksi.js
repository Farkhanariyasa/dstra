const bar7 = document.getElementById('bar-kec-junrejo-produksi');
new Chart(bar7, {
    type: 'bar',
    data: {
    labels: [['Jasa', 'Transportasi'],
        ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
        ['Jasa', 'Akomodasi']
    ],
    datasets: [{
        label: 'Rata-rata Nilai Produksi Unit Usaha Pariwisata',
        data: [
            uupKecJunrejoProduksi.transportasi,
            uupKecJunrejoProduksi.makan,
            uupKecJunrejoProduksi.akomodasi,
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
                text : ['Rata-rata Nilai Produksi Unit Usaha Pariwisata di Kecamatan Junrejo Berdasarkan Jenis Usahanya'],
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
