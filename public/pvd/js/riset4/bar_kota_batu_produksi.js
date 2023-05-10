const bar5 = document.getElementById('bar-kota-batu-produksi');
new Chart(bar5, {
    type: 'bar',
    data: {
    labels: [['Jasa Transportasi'],
        ['Jasa Penyedia', 'Makanan dan Minuman'],
        ['Jasa Akomodasi']
    ],
    datasets: [{
        label: 'Rata-rata Nilai Produksi Unit Usaha Pariwisata',
        data: [
            uupKotaBatuProduksi.transportasi,
            uupKotaBatuProduksi.makan,
            uupKotaBatuProduksi.akomodasi,
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
                text : ['Rata-rata Nilai Produksi Unit Usaha Pariwisata di Kota Batu Berdasarkan Jenis Usahanya'],
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
