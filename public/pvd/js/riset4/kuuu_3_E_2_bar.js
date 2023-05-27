const E2 = document.getElementById('viz-2-3-E-2');

new Chart(E2, {
    type: 'bar',
    data: {
        labels: [
            ["Transaksi"],
            ["Promosi"],
            ["Perencanaan Keuangan"],
            ["Penjualan"],
            ["Pengadaan Kebutuhan Logistik"],
            ["Pencatatan Keuangan"],
            ["Pembuatan dan Pengiriman Faktur atau Tagihan"],
            ["Manajemen Tenaga Kerja"],
        ],

        datasets: [{
            label: 'Jumlah Responden',
            data: [
                446,546,111,596,327,174,266,124
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffbc33",
                "#7382ab",
                "#ffbc33",
                "#7382ab",
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
                "#7382ab",
            ],
        }]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                display: false,
                min: 0,
                max: 800,
            },
        },
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: false,
                text : ['Pemanfaatan TIK Pada Unit Usaha Pariwisata'],
                font: {
                    size: 16,
                    weight: 'bold',
                }
            },
            subtitle: {
                display: false,
                text : ['Berdasarkan Jenis Usaha Pariwisata'],
                font: {
                    size: 14,
                }
            },
            legend:{
                display: false,
                position: 'bottom',
                align: 'start',
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