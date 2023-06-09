const stacked2 = document.getElementById('chart-2');
const stacked_2 = new Chart(stacked2, {
    type:'bar',
    data: {
        labels: [ ['15-19'],
            ['20-24'],
            ['25-29'],
            ['30-34'],
            ['35-39'],
            ['40-44'],
            ['45-49'],
            ['50-54'],
            ['55-59'],
            ['60 ke atas'],
        ],
        datasets: [{
            label: 'Siap',
            data:[
                (usiaTingkat.k1Siap/3*100).toFixed(2),
                (usiaTingkat.k2Siap/31*100).toFixed(2),
                (usiaTingkat.k3Siap/75*100).toFixed(2),
                (usiaTingkat.k4Siap/97*100).toFixed(2),
                (usiaTingkat.k5Siap/98*100).toFixed(2),
                (usiaTingkat.k6Siap/148*100).toFixed(2),
                (usiaTingkat.k7Siap/108*100).toFixed(2),
                (usiaTingkat.k8Siap/136*100).toFixed(2),
                (usiaTingkat.k9Siap/100*100).toFixed(2),
                (usiaTingkat.k10Siap/129*100).toFixed(2),        
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: 'Cukup Siap',
            data:[
                (usiaTingkat.k1Cukup/3*100).toFixed(2),
                (usiaTingkat.k2Cukup/31*100).toFixed(2),
                (usiaTingkat.k3Cukup/75*100).toFixed(2),
                (usiaTingkat.k4Cukup/97*100).toFixed(2),
                (usiaTingkat.k5Cukup/98*100).toFixed(2),
                (usiaTingkat.k6Cukup/148*100).toFixed(2),
                (usiaTingkat.k7Cukup/108*100).toFixed(2),
                (usiaTingkat.k8Cukup/136*100).toFixed(2),
                (usiaTingkat.k9Cukup/100*100).toFixed(2), 
                (usiaTingkat.k10Cukup/129*100).toFixed(2),        
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Kurang Siap',
            data:[
                (usiaTingkat.k1Tidak/3*100).toFixed(2),
                (usiaTingkat.k2Tidak/31*100).toFixed(2),
                (usiaTingkat.k3Tidak/75*100).toFixed(2),
                (usiaTingkat.k4Tidak/97*100).toFixed(2),
                (usiaTingkat.k5Tidak/98*100).toFixed(2),
                (usiaTingkat.k6Tidak/148*100).toFixed(2),
                (usiaTingkat.k7Tidak/108*100).toFixed(2),
                (usiaTingkat.k8Tidak/136*100).toFixed(2),
                (usiaTingkat.k9Tidak/100*100).toFixed(2),  
                (usiaTingkat.k10Tidak/129*100).toFixed(2),        
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
                text:['IKUPTIK Berdasarkan Interval Usia'],
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

// const dodgeBar5Axis = document.getElementById("dodge-bar-5-axis");
// dodgeBar5Axis.addEventListener("click", update_value_axis_dodge_bar_5(chk_bx));

// function update_value_axis_dodge_bar_5(chk_bx) {
//   if (chk_bx.checked) {
//     console.log("check");
//     stacked_2.options.scales.x.display = true;
//     stacked_2.options.scales.y.display = true;
//     stacked_2.update();
//   } else {
//     console.log("uncheck");
//     stacked_2.options.scales.x.display = false;
//     stacked_2.options.scales.y.display = false;
//     stacked_2.update();
//   }
// };

// const dodgeBar5Legend = document.getElementById("dodge-bar-5-legend");
// dodgeBar5Legend.addEventListener("click", update_value_legend_dodge_bar_5(chk_bx));

// function update_value_legend_dodge_bar_5(chk_bx) {
//     if (chk_bx.checked) {
//       console.log("check");
//       stacked_2.options.plugins.legend.display=true;
//       stacked_2.update();
//     } else {
//       console.log("uncheck");
//       stacked_2.options.plugins.legend.display=false;
//       stacked_2.update();
//     }
// };
