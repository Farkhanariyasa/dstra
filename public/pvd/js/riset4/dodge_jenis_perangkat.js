const sdm_ekonomi1 = document.getElementById('chart-5');
const bar5 = new Chart(sdm_ekonomi1, {
    type:'bar',
    data: {
        labels: [ ['Penyedia', 'Akomodasi'],
        ['Jasa Penyedia', 'Makanan', 'dan', 'Minuman'],
        ['Jasa', 'Transportasi', 'Wisata']
        ],
        datasets: [{
            label: ['Tablet'],
            data:[
                1, 16, 3
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: ['Smartphone'],
            data:[
                74, 609, 153
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },{
            label: ['PC'],
            data:[
                1, 26, 5
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: ['Laptop'],
            data:[
                15, 78, 19
            ],
            backgroundColor:"#ffab00",
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
