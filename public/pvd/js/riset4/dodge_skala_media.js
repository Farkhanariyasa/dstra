const dodge15 = document.getElementById('chart-15');
const dodge_15 = new Chart(dodge15, {
    type:'bar',
    data: {
        labels: [ ['Mikro'],
            ['Kecil'],
        ],
        datasets: [{
            label: 'Media Sosial',
            data:[
                278, 21,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Marketplace',
            data:[
                79, 2,
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Keduanya',
            data:[
                142, 24,
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },
        ]
    },options:{
        responsive: true,
        maintainAspectRatio: true,
        scales:{
            x:{
                ticks:{
                    display:true
                }
            },
        },
        plugins: {
            title:{
                display: false,
                text:['Jumlah Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu'],
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
            subtitle: {
                display: false,
                text : ['Berdasarkan Jenis Kelamin dan Pendidikan'],
                font: {
                    size: 14,
                    weight: 'bold',
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
                labels: {
                    // usePointStyle: true,  //<-- set this
                    // maxWidth: 10,
                 }
            },
            tooltip:{
                enabled:true,
                // callbacks: {
                //     label: function(context){
                //         var label = context.label,
                //             currentValue = context.raw,
                //             total = context.chart._metasets[context.datasetIndex].total;
              
                //         var percentage = parseFloat((currentValue/total*100).toFixed(1));
              
                //         return label + ": " +currentValue + ' (' + percentage + '%)';
                //     }
                // }
            },
            datalabels:{
                display:true,
                color:'black',
                anchor: 'end',
                align: 'end',
                // formatter: function(value, context) {
                //     total = context.chart._metasets[context.datasetIndex].total;
                //     percentage = parseFloat((value/total*100).toFixed(1));
                //     return percentage + '%';
                // }
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
                // ticks: {
                //     format: {
                //         style: 'percent'
                //     }
                // }
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
