const dodge2 = document.getElementById('chart-2');
const dodge_2 = new Chart(dodge2, {
    type:'bar',
    data: {
        labels: [ ['Laki-laki'],
            ['Perempuan'],
        ],
        datasets: [{
            label: 'Maksimal Pendidikan Dasar',
            data:[
                uupJkPendidikan.lakiDasar,
                uupJkPendidikan.perempuanDasar,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Pendidikan Menengah',
            data:[
                uupJkPendidikan.lakiMenengah,
                uupJkPendidikan.perempuanMenengah,
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Pendidikan Tinggi',
            data:[
                uupJkPendidikan.lakiTinggi,
                uupJkPendidikan.perempuanTinggi,
            ],
            backgroundColor:"#4b395f",
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
                display:true,
                text:['Unit Usaha Pariwisata yang Mengikuti Perkembangan Isu Ekonomi'],
                font: {
                    size:16,
                    family:'Poppins'

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
                display:true,
                position:'top',
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

const dodgeBar2Axis = document.getElementById("dodge-bar-2-axis");
dodgeBar2Axis.addEventListener("click", update_value_axis_dodge_bar_2(chk_bx));

function update_value_axis_dodge_bar_2(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    dodge_2.options.scales.x.display = true;
    dodge_2.options.scales.y.display = true;
    dodge_2.update();
  } else {
    console.log("uncheck");
    dodge_2.options.scales.x.display = false;
    dodge_2.options.scales.y.display = false;
    dodge_2.update();
  }
};

const dodgeBar2Legend = document.getElementById("dodge-bar-2-legend");
dodgeBar2Legend.addEventListener("click", update_value_legend_dodge_bar_2(chk_bx));

function update_value_legend_dodge_bar_2(chk_bx) {
    if (chk_bx.checked) {
      console.log("check");
      dodge_2.options.plugins.legend.display=true;
      dodge_2.update();
    } else {
      console.log("uncheck");
      dodge_2.options.plugins.legend.display=false;
      dodge_2.update();
    }
};