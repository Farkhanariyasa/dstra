const ctx = document.getElementById('jk_batang');
const hasil2 = new Chart(ctx, {
    type:'bar',
    data: {
        labels: ['Ke Objek Wisata dalam Kota Sama',
                'Menginap di Akomodasi Komersil di Kota Sama',
                'Menuju Kecamatan lain dalam Kota Sama',
                'Ke Objek Wisata di Luar Kota',
                'Menginap di Akomodasi Komersil di Luar Kota',
                'Menuju Kota Lain'
        ],
        datasets: [{
            label: 'Ya',
            data:[
                mpw1.ya,
                mpw2.ya,
                mpw3.ya,
                mpw4.ya,
                mpw5.ya,
                mpw6.ya,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Tidak',
            data:[
                mpw1.tidak,
                mpw2.tidak,
                mpw3.tidak,
                mpw4.tidak,
                mpw5.tidak,
                mpw6.tidak,
            ],
            backgroundColor:"#ffeecc",
            borderWidth:1
        }]
    },options:{
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title:{
                display:true,
                text:'Tindakan Perjalanan Tidak Lebih dari 1 Tahun dan Telah Kembali dalam Periode Oktober 2022 - Desember 2022',
                font: {
                    size:16
                },
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            legend:{
                display:true,
                position:'top',
            },
            tooltip:{
                enabled:true,
            },
            datalabels:{
                display:true,
                color:'black'
            }
        },maintainAspectRatio: false
    },plugins:[ChartDataLabels]
});

const barchart = document.getElementById('forhasil2Chart');
barchart.addEventListener('change',tampilData);

function tampilData(){
    if (barchart.value =='a') {
        hasil2.data.datasets[0].data = 
            [   
                mpw1.ya,
                mpw2.ya,
                mpw3.ya,
                mpw4.ya,
                mpw5.ya,
                mpw6.ya,
            ];
            hasil2.data.datasets[1].data = 
            [   
                mpw1.tidak,
                mpw2.tidak,
                mpw3.tidak,
                mpw4.tidak,
                mpw5.tidak,
                mpw6.tidak,
            ];
        hasil2.data.labels = [
                'Ke Objek Wisata dalam Kota Sama',
                'Menginap di Akomodasi Komersil di Kota Sama',
                'Menuju Kecamatan lain dalam Kota Sama',
                'Ke Objek Wisata di Luar Kota',
                'Menginap di Akomodasi Komersil di Luar Kota',
                'Menuju Kota Lain'
            ];
            hasil2.data.datasets[0].label='Ya';
            hasil2.data.datasets[1].label='Tidak';
            hasil2.options.plugins.title.text = 'Tindakan Perjalanan Tidak Lebih dari 1 Tahun dan Telah Kembali dalam Periode Oktober 2022 - Desember 2022';
            // console.log(batang.data.datasets[0].data)
            hasil2.update();
    } else {
            
            hasil2.data.datasets.data = 
            [   
                indosat.ya,
                xl.ya,
                tri.ya,
                smartfren.ya,
                lainnya.ya
            ];
            hasil2.data.labels = [
                'Indosat',
                'XL Axiata',
                '3 / Tri',
                'Smartfren',
                'Lainnya'
            ];

            hasil2.options.plugins.title.text = 'Jenis Simcard yang digunakanf0';
            // console.log(batang.data.datasets[0].data)
            hasil2.update();
    }
}


