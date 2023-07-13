const bar11 = document.getElementById('chart-11');

const bar_11 = new Chart(bar11, {
    type: 'bar',
    data: {
        labels: ['Transaksi', 'Promosi', ['Perencanaan', 'Keuangan'],
    'Penjualan', ['Pengadaan Kebutuhan', 'Logistik'], 'Pencatatan Keuangan',
'Faktur/Tagihan', ['Manajemen Tenaga', 'Kerja']],
        datasets: [{
            label: 'Jumlah',
            data: [
                57, 74, 30, 72, 15, 54, 59, 13
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffab00",
                "#506396",
                "#4b395f",
                "#b35c74",
                "#ffbb33",
                "#7382ab",
                "#6f617f",
                "#c27d90"
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
            borderWidth: 0,
        }
        },
        plugins: {
            title: {
                display: false,
                text : 'Nilai IKUPTIK Total',
                font: {
                    size: 20,
                    weight: 600,
                },
                color: '#4b395f',
            },
            subtitle: {
                display: false,
                text: 'Berdasarkan Kecamatan di Kota Batu',
                font: {
                    size: 16,
                },
                color: 'var(--bs-card-color)',
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

const barKecamatan1 = document.getElementById('bar-kecamatan-1');
barKecamatan1.addEventListener('change', tampilData);

function tampilData(){
    if (barKecamatan1.value =='dimensi1') {
        console.log(barKecamatan1.value);
        bar_11.data.datasets[0].data = 
            [
                57, 74, 30, 72, 15, 54, 59, 13
            ];
            bar_11.data.labels = ['Transaksi', 'Promosi', ['Perencanaan', 'Keuangan'],
    'Penjualan', ['Pengadaan Kebutuhan', 'Logistik'], 'Pencatatan Keuangan',
'Faktur/Tagihan', ['Manajemen Tenaga', 'Kerja']];
            document.getElementById("sub-11").innerHTML = "Pada Usaha Jasa Transportasi Wisata di Kota Batu";
            bar_11.update();
            document.getElementById("interpretasi-11").innerHTML = "Dalam jenis usaha jasa transportasi wisata, kegiatan promosi adalah kegiatan yang paling banyak digunakan, dengan 74 unit usaha menggunakannya, diikuti oleh kegiatan penjualan yang digunakan oleh 72 unit usaha serta untuk kegiatan pembuatan dan pengiriman faktur atau tagihan dilakukan oleh 59 unit usaha. Sedangkan jenis kegiatan pada jenis usaha jasa transportasi wisata yang jarang memanfaatkan TIK adalah kegiatan manajemen tenaga kerja yaitu hanya sebesar 13 unit usaha yang melakukannya.";
    } if (barKecamatan1.value =='dimensi2') {
            console.log(barKecamatan1.value);
            bar_11.data.datasets[0].data = 
            [   
                407, 611, 143, 546, 91, 292, 417, 62
            ];
            bar_11.data.labels = ['Transaksi', 'Promosi', ['Perencanaan', 'Keuangan'],
    'Penjualan', ['Pengadaan Kebutuhan', 'Logistik'], 'Pencatatan Keuangan',
'Faktur/Tagihan', ['Manajemen Tenaga', 'Kerja']];
            document.getElementById("sub-11").innerHTML = "Pada Usaha Jasa Penyedia Makanan dan Minuman di Kota Batu";
            bar_11.update();
            document.getElementById("interpretasi-11").innerHTML = "Dalam jenis usaha jasa penyediaan makanan dan minuman 3 kegiatan yang paling banyak dalam memanfaatkan TIK adalah kegiatan promosi dengan 611 unit usaha menggunakannya, diikuti oleh kegiatan penjualan yang digunakan oleh 546 unit usaha serta untuk kegiatan pembuatan dan pengiriman faktur atau tagihan dilakukan oleh 417 unit usaha. Sedangkan jenis kegiatan pada jenis usaha jasa penyediaan makanan dan minuman yang jarang memanfaatkan TIK adalah kegiatan manajemen tenaga kerja yaitu hanya sebesar 62 unit usaha yang melakukannya.";
    } if (barKecamatan1.value =='dimensi3'){
        console.log(barKecamatan1.value);
        bar_11.data.datasets[0].data = 
            [   
                82, 154, 93, 146, 68, 100, 120, 36
            ];
            bar_11.data.labels = ['Transaksi', 'Promosi', ['Perencanaan', 'Keuangan'],
    'Penjualan', ['Pengadaan Kebutuhan', 'Logistik'], 'Pencatatan Keuangan',
'Faktur/Tagihan', ['Manajemen Tenaga', 'Kerja']];
            document.getElementById("sub-11").innerHTML = "Pada Usaha Penyedia Akomodasi di Kota Batu";
            bar_11.update();
            document.getElementById("interpretasi-11").innerHTML = "Pada jenis usaha penyediaan akomodasi 3 kegiatan yang paling banyak dalam memanfaatkan TIK  adalah kegiatan promosi dengan 154 unit usaha menggunakannya, diikuti oleh kegiatan penjualan yang digunakan oleh 146 unit usaha serta untuk kegiatan pembuatan dan pengiriman faktur atau tagihan dilakukan oleh 120 unit usaha. Sedangkan jenis kegiatan pada jenis usaha jasa penyediaan akomodasi yang jarang memanfaatkan TIK adalah kegiatan manajemen tenaga kerja yaitu hanya sebesar 36 unit usaha yang melakukannya.";
    }
}