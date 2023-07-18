const stacked3 = document.getElementById('chart-3');
const stacked_3 = new Chart(stacked3, {
    type:'bar',
    data: {
        labels: [ ['Maksimal', 'Pendidikan', 'Dasar'],
            ['Pendidikan', 'Menengah'],
            ['Pendidikan', 'Tinggi'],
        ],
        datasets: [{
            label: 'Siap',
            data:[
                (pendidikanTingkat.dasarSiap/228*100).toFixed(2),
                (pendidikanTingkat.menengahSiap/585*100).toFixed(2),
                (pendidikanTingkat.tinggiSiap/112*100).toFixed(2),
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: 'Cukup Siap',
            data:[
                (pendidikanTingkat.dasarCukup/228*100).toFixed(2),
                (pendidikanTingkat.menengahCukup/585*100).toFixed(2),
                (pendidikanTingkat.tinggiCukup/112*100).toFixed(2),

            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Kurang Siap',
            data:[
                (pendidikanTingkat.dasarTidak/228*100).toFixed(2),
                (pendidikanTingkat.menengahTidak/585*100).toFixed(2),
                (pendidikanTingkat.tinggiTidak/112*100).toFixed(2),
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },
        ]
    },options:{
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
                display: true,
                text:['IKUPTIK Berdasarkan Tingkat Pendidikan'],
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
                    return  value + '%';
                },
            }
        },maintainAspectRatio: false,
        scales: {
            x: {
              stacked: true,
              ticks: {
                display: true,
              },
              grid:{
                display:false
            },
            },
            y: {
              stacked: true,
              grid:{
                display:false
            },
            }
          },
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