const dodge2 = document.getElementById('chart-2');
const dodge_2 = new Chart(dodge2, {
    type:'bar',
    data: {
        labels: [ ['Maksimal', 'Pendidikan', 'Dasar'],
            ['Pendidikan', 'Menengah'],
            ['Pendidikan', 'Tinggi']
        ],
        datasets: [{
            label: 'Laki-laki',
            data:[
                uupJkPendidikan.lakiDasar,
                uupJkPendidikan.lakiMenengah,
                uupJkPendidikan.lakiTinggi,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Perempuan',
            data:[
                uupJkPendidikan.perempuanDasar,
                uupJkPendidikan.perempuanMenengah,
                uupJkPendidikan.perempuanTinggi,
            ],
            backgroundColor:"#506396",
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
            },
            tooltip:{
                enabled:true,
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
