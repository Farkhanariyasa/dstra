const barPemanfaatan1 = document.getElementById('bar-kota-batu-pemanfaatan');
const barPemanfaatan_1 = new Chart(barPemanfaatan1, {
    type: 'bar',
    data: {
    labels: [
        ['Penjualan'], 
        ['Promosi'],
        ['Transaksi'], 
        ['Pengadaan Kebutuhan Logistik'], 
        ['Pembuatan dan Pengiriman Faktur atau Tagihan'],
        ['Pencatatan Keuangan'],
        ['Manajemen Tenaga Kerja'],
        ['Perencanaan Keuangan'],
    ],
    datasets: [{
        label: 'Jumlah',
        data: [
            pemanfaatanTikKegiatan.penjualan,
            pemanfaatanTikKegiatan.promosi,
            pemanfaatanTikKegiatan.transaksi,
            pemanfaatanTikKegiatan.logistik,
            pemanfaatanTikKegiatan.faktur,
            pemanfaatanTikKegiatan.pencatatanKeuangan,
            pemanfaatanTikKegiatan.tenagaKerja,
            pemanfaatanTikKegiatan.perencanaankeuangan,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00", "#506396",
            "#4b395f", "#b35c74",
            "#ffbc33", "#7382ab",
            "#6f617f", "#c27d90",
            "#ffdd99", "96a1c0",
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
        indexAxis: 'y',
        elements: {
        bar: {
            borderWidth: 3,
        }
        },
        plugins: {
            title: {
                display: true,
                text : ['Pemilik atau Pengelola Unit Usaha Pariwisata Berdasarkan Tingkat Pendidikan'],
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

