const dodge6 = document.getElementById('chart-6');
const dodge_6 = new Chart(dodge6, {
    type:'bar',
    data: {
        labels: [ ['Mikro'],
            ['Kecil'],
        ],
        datasets: [{
            label: 'Berada di bangunan fisik rumah tangga',
            data:[
                (uupKotaBatuSkalaLokasi.mikroYa/870*100).toFixed(2),
                (uupKotaBatuSkalaLokasi.kecilYa/55*100).toFixed(2),
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Tidak berada di bangunan fisik rumah tangga',
            data:[
                (uupKotaBatuSkalaLokasi.mikroTidak/870*100).toFixed(2),
                (uupKotaBatuSkalaLokasi.kecilTidak/55*100).toFixed(2),
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
                    size: 16,
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
                text:['Berdasarkan Lokasi atau Tempat Usaha Menurut Skala Usaha'],
                font: {
                    size: 16,
                    weight: 'bold',
                },
                color:'#493a5a',
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