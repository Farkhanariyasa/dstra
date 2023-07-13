const sdm_ekonomi8 = document.getElementById('chart-8');
const bar8 = new Chart(sdm_ekonomi8, {
    type:'bar',
    data: {
        labels: [['Penyedia', 'Akomodasi'],
        ['Jasa', 'Penyedia', 'Makanan', 'dan', 'Minuman'],
        ['Jasa', 'Transportasi', 'Wisata']
        ],
        datasets: [{
            label: ['WhatsApp'],
            data:[
                70, 120, 532
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: ['Twitter'],
            data:[
                0, 1, 2
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: ['Telepon'],
            data:[
                5, 28, 58
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },{
            label: ['Telegram'],
            data:[
                0, 5, 10
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: ['Line'],
            data:[
                0, 1, 2
            ],
            backgroundColor:"#ffbc33",
            borderWidth:1
        },{
            label: ['Lainnya'],
            data:[
                3, 41, 29
            ],
            backgroundColor:"#7382ab",
            borderWidth:1
        },{
            label: ['Instagram'],
            data:[
                10, 18, 103
            ],
            backgroundColor:"#6f617f",
            borderWidth:1
        },{
            label: ['Facebook'],
            data:[
                10, 13, 94
            ],
            backgroundColor:"#c27d90",
            borderWidth:1
        },{
            label: ['Email'],
            data:[
                9, 14, 20
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

const dodgebar8SdmEkonomiAxis = document.getElementById("forDodgeBarSdmEkonomiAxis");
dodgebar8SdmEkonomiAxis.addEventListener("click", update_value_axis_dodge_bar8_sdm_ekonomi8(chk_bx));

function update_value_axis_dodge_bar8_sdm_ekonomi8(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar8.options.scales.x.display = true;
    bar8.options.scales.y.display = true;
    bar8.update();
  } else {
    console.log("uncheck");
    bar8.options.scales.x.display = false;
    bar8.options.scales.y.display = false;
    bar8.update();
  }
};

const dodgebar8SdmEkonomiLegend = document.getElementById("forDodgebar8SdmEkonomiLegend");
dodgebar8SdmEkonomiLegend.addEventListener("click", update_value_legend_dodge_bar8_sdm_ekonomi8(chk_bx));

function update_value_legend_dodge_bar8_sdm_ekonomi8(chk_bx) {
    if (chk_bx.checked) {
      console.log("check");
      bar8.options.plugins.legend.display=true;
      bar8.update();
    } else {
      console.log("uncheck");
      bar8.options.plugins.legend.display=false;
      bar8.update();
    }
};
