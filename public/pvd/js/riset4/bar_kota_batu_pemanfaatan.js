const barPemanfaatan1 = document.getElementById('chart-10');
const barPemanfaatan_1 = new Chart(barPemanfaatan1, {
    type: 'bar',
    data: {
    labels: [
        ['Penjualan'], 
        ['Promosi'],
        ['Transaksi'], 
        ['Pengadaan', 'Kebutuhan Logistik'], 
        ['Pembuatan dan Pengiriman', 'Faktur atau Tagihan'],
        ['Pencatatan Keuangan'],
        ['Manajemen', 'Tenaga Kerja'],
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
            "#b35c74", "#b35c7490",
            "#b35c7490", "#b35c7490",
            "#b35c7490", "#b35c7490",
            "#b35c7490", "#b35c7490",
            "#b35c7490", "#b35c7490",
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
        indexAxis: 'y',
        elements: {
        bar: {
            borderWidth: 3,
        }
        },
        plugins: {
            title: {
                display: false,
                text : ['Pemanfaatan TIK pada Unit Usaha Pariwisata Berdasarkan Kegiatan Pemanfaatannya'],
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
            datalabels: {
                display: true,
                color: 'black',
            }
        },
    },
    plugins: [ChartDataLabels]
});

