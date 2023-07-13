const bar12 = document.getElementById('chart-12');

const bar_12 = new Chart(bar12, {
    type: 'bar',
    data: {
        labels: [['Manajemen Tenaga', 'Kerja'], ['Pengadaan Kebutuhan', 'Logistik'],
        ['Perencanaan', 'Keuangan'], 'Pencatatan Keuangan', 'Faktur/Tagihan', 'Transaksi', 
    'Penjualan', 'Promosi'
 ],
        datasets: [{
            label: 'Jumlah',
            data: [
                101, 291, 93, 155, 236, 402, 550, 499
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

const barKecamatan2 = document.getElementById('bar-kecamatan-2');
barKecamatan2.addEventListener('change', tampilData);

function tampilData(){
    if (barKecamatan2.value =='dimensi1') {
        console.log(barKecamatan2.value);
        bar_12.data.datasets[0].data = 
            [
                101, 291, 93, 155, 236, 402, 550, 499
            ];
            bar_12.data.labels = [['Manajemen Tenaga', 'Kerja'], ['Pengadaan Kebutuhan', 'Logistik'],
        ['Perencanaan', 'Keuangan'], 'Pencatatan Keuangan', 'Faktur/Tagihan', 'Transaksi', 
    'Penjualan', 'Promosi'
 ];
            document.getElementById("sub-12").innerHTML = "Berdasarkan Jenis Kegiatan Pemanfaatan TIK pada Skala Usaha Mikro";
            bar_12.update();
            document.getElementById("interpretasi-12").innerHTML = "Berdasarkan grafik hasil visualisasi, pemanfaatan TIK pada unit usaha pariwisata di kota Batu berdasarkan skala usaha yaitu skala usaha mikro mayoritas melakukan kegiatan penjualan dengan memanfaatkan TIK yaitu sebesar 550 unit, kemudian disusul oleh kegiatan promosi sebesar 499 unit usaha, dan pada urutan ketiga kegiatan transaksi sebesar 402 unit usaha. Sedangkan kegiatan yang paling jarang memanfaatkan TIK adalah kegiatan perencanaan keuangan hanya sebesar 93 unit usaha mikro.";
    } if (barKecamatan2.value =='dimensi2') {
            console.log(barKecamatan2.value);
            bar_12.data.datasets[0].data = 
            [   
                23, 36, 18, 19, 30, 44, 46, 47
            ];
            bar_12.data.labels = [['Manajemen Tenaga', 'Kerja'], ['Pengadaan Kebutuhan', 'Logistik'],
        ['Perencanaan', 'Keuangan'], 'Pencatatan Keuangan', 'Faktur/Tagihan', 'Transaksi', 
    'Penjualan', 'Promosi'
 ];
            document.getElementById("sub-12").innerHTML = "Berdasarkan Jenis Kegiatan Pemanfaatan TIK pada Skala Usaha Kecil";
            bar_12.update();
            document.getElementById("interpretasi-12").innerHTML = "Sementara itu, pada unit usaha pariwisata menurut skala usaha kecil, kegiatan yang paling banyak memanfaatkan TIK adalah kegiatan promosi yaitu sebesar 47 unit usaha, kemudian disusul oleh penjualan sebesar 46 unit usaha dan pada urutan ketiga besar kegiatan yang memanfaatkan TIK adalah kegiatan transaksi sebesar 44 unit usaha kecil. Untuk kegiatan yang paling sedikit dalam memanfaatkan TIK adalah kegiatan perencanaan keuangan hanya sebesar 18 unit  usaha kecil.";
    }
}