const sdm_ekonomi9 = document.getElementById('chart-9');
const bar9 = new Chart(sdm_ekonomi9, {
    type:'bar',
    data: {
        labels: [['Mikro'],
        ['Kecil']
        ],
        datasets: [{
            label: ['WhatsApp'],
            data:[
                671, 51
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: ['Twitter'],
            data:[
                3, 0
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: ['Telepon'],
            data:[
                88, 3
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },{
            label: ['Telegram'],
            data:[
                14, 1
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: ['Line'],
            data:[
                3, 0
            ],
            backgroundColor:"#ffbc33",
            borderWidth:1
        },{
            label: ['Lainnya'],
            data:[
                67, 4
            ],
            backgroundColor:"#7382ab",
            borderWidth:1
        },{
            label: ['Instagram'],
            data:[
                115, 16
            ],
            backgroundColor:"#6f617f",
            borderWidth:1
        },{
            label: ['Facebook'],
            data:[
                110, 6
            ],
            backgroundColor:"#c27d90",
            borderWidth:1
        },{
            label: ['Email'],
            data:[
                35, 8
            ],
            backgroundColor:"#ffdd99",
            borderWidth:1
        },
        ]
    },options:{
        indexAxis: 'y',
        elements: {
            bar: {
              borderWidth: 5,
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
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            subtitle:{
                display: false,
                text:['Berdasarkan Skala Usaha Menurut Jenis Usaha Pariwisata'],
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
                anchor: 'end',
                align: 'end',
                formatter: function(value, context) {
                    return value;
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