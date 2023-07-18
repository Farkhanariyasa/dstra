const dodge5 = document.getElementById('chart-5');
const dodge_5 = new Chart(dodge5, {
    type:'bar',
    data: {
        labels: [ ['Jasa', 'Transportasi Wisata'],
            ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
            ['Penyedia', 'Akomodasi']
        ],
        datasets: [{
            label: 'Tidak berada di bangunan fisik rumah tangga',
            data:[
                (uupKotaBatuJenisLokasi.transportasiTidak/164*100).toFixed(2),
                (uupKotaBatuJenisLokasi.makananTidak/685*100).toFixed(2),
                (uupKotaBatuJenisLokasi.akomodasiTidak/76*100).toFixed(2),
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Berada di bangunan fisik rumah tangga',
            data:[
                (uupKotaBatuJenisLokasi.transportasiYa/164*100).toFixed(2),
                (uupKotaBatuJenisLokasi.makananYa/685*100).toFixed(2),
                (uupKotaBatuJenisLokasi.akomodasiYa/76*100).toFixed(2),
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },
        ]
    },options:{
        indexAxis: 'y',
        elements: {
            bar: {
              borderWidth: 3,
            }
          },
        responsive: true,
        maintainAspectRatio: false,
        scales:{
            x:{
                ticks:{
                    display:true
                }
            }
        },
        plugins: {
            title:{
                display: false,
                text:['Persentase Unit Usaha Pariwisata di Kota Batu'],
                font: {
                    size:16,
                },
                color:'#493a5a',
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            subtitle:{
                display: false,
                text:['Berdasarkan Jenis Usaha Pariwisata Menurut Lokasi atau Tempat Usaha'],
                font: {
                    size:16,
                    weight: 'bold',
                },
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            legend:{
                display: true,
                title: {
                    display: false,
                    text : 'Kategori',
                },
                position: 'bottom',
                align: 'start',
            },
            tooltip:{
                enabled:true,
            },
            datalabels:{
                display:true,
                color:'black',
                formatter: function(value, context) {
                    return value + '%';
                },
            }
        },maintainAspectRatio: false,
        scales:{
            x:{
                grid:{
                    display:false
                },
            },
            y:{
                grid:{
                    display:false
                },
            }
        }
    },plugins:[ChartDataLabels]
});

function responsivefonts(){
    if (window.outerWidth < 414) {
        console.log(window.outerWidth);
        Chart.defaults.font.size=5;
        

    }if (window.outerWidth<380){
        Chart.defaults.font.size=1;
    }
};
