const dodge5 = document.getElementById('chart-3');
const dodge_5 = new Chart(dodge5, {
    type:'bar',
    data: {
        labels: [ ['Kecil'],
            ['Mikro']
        ],
        datasets: [{
            label: 'Memanfaatkan',
            data:[
                94.55,
                85.86
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Tidak Memanfaatkan',
            data:[
                5.45,
                14.14
            ],
            backgroundColor:"#506396",
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
                anchor: 'end',
                align: 'end',
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

const dodgeBar5Axis = document.getElementById("dodge-bar-5-axis");
dodgeBar5Axis.addEventListener("click", update_value_axis_dodge_bar_5(chk_bx));

function update_value_axis_dodge_bar_5(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    dodge_5.options.scales.x.display = true;
    dodge_5.options.scales.y.display = true;
    dodge_5.update();
  } else {
    console.log("uncheck");
    dodge_5.options.scales.x.display = false;
    dodge_5.options.scales.y.display = false;
    dodge_5.update();
  }
};

const dodgeBar5Legend = document.getElementById("dodge-bar-5-legend");
dodgeBar5Legend.addEventListener("click", update_value_legend_dodge_bar_5(chk_bx));

function update_value_legend_dodge_bar_5(chk_bx) {
    if (chk_bx.checked) {
      console.log("check");
      dodge_5.options.plugins.legend.display=true;
      dodge_5.update();
    } else {
      console.log("uncheck");
      dodge_5.options.plugins.legend.display=false;
      dodge_5.update();
    }
};
