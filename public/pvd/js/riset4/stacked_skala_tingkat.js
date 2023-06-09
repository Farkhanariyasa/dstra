const stacked5 = document.getElementById('chart-5');
const stacked_5 = new Chart(stacked5, {
    type:'bar',
    data: {
        labels: [ ['Mikro'],
            ['Kecil'],
        ],
        datasets: [{
            label: 'Siap',
            data:[
                (skalaTingkat.mikroSiap/870*100).toFixed(2),
                (skalaTingkat.kecilSiap/55*100).toFixed(2),
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: 'Cukup Siap',
            data:[
                (skalaTingkat.mikroCukup/870*100).toFixed(2),
                (skalaTingkat.kecilCukup/55*100).toFixed(2),
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Kurang Siap',
            data:[
                (skalaTingkat.mikroTidak/870*100).toFixed(2),
                (skalaTingkat.kecilTidak/55*100).toFixed(2),
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
                text:['IKUPTIK Berdasarkan Skala Usaha Pariwisata'],
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
//     stacked_5.options.scales.x.display = true;
//     stacked_5.options.scales.y.display = true;
//     stacked_5.update();
//   } else {
//     console.log("uncheck");
//     stacked_5.options.scales.x.display = false;
//     stacked_5.options.scales.y.display = false;
//     stacked_5.update();
//   }
// };

// const dodgeBar5Legend = document.getElementById("dodge-bar-5-legend");
// dodgeBar5Legend.addEventListener("click", update_value_legend_dodge_bar_5(chk_bx));

// function update_value_legend_dodge_bar_5(chk_bx) {
//     if (chk_bx.checked) {
//       console.log("check");
//       stacked_5.options.plugins.legend.display=true;
//       stacked_5.update();
//     } else {
//       console.log("uncheck");
//       stacked_5.options.plugins.legend.display=false;
//       stacked_5.update();
//     }
// };
