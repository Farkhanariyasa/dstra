const sdm_ekonomi2 = document.getElementById('chart-6');
const bar6 = new Chart(sdm_ekonomi2, {
    type:'bar',
    data: {
        labels: [ ['Kecil'],
        ['Mikro'],
        ],
        datasets: [{
            label: ['Tablet'],
            data:[
                10, 10
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: ['Smartphone'],
            data:[
                49, 783
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },{
            label: ['PC'],
            data:[
                8, 24
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: ['Laptop'],
            data:[
                19, 93
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

const dodgebar6SdmEkonomiAxis = document.getElementById("forDodgeBarSdmEkonomiAxis");
dodgebar6SdmEkonomiAxis.addEventListener("click", update_value_axis_dodge_bar6_sdm_ekonomi2(chk_bx));

function update_value_axis_dodge_bar6_sdm_ekonomi2(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar6.options.scales.x.display = true;
    bar6.options.scales.y.display = true;
    bar6.update();
  } else {
    console.log("uncheck");
    bar6.options.scales.x.display = false;
    bar6.options.scales.y.display = false;
    bar6.update();
  }
};

const dodgebar6SdmEkonomiLegend = document.getElementById("forDodgebar6SdmEkonomiLegend");
dodgebar6SdmEkonomiLegend.addEventListener("click", update_value_legend_dodge_bar6_sdm_ekonomi2(chk_bx));

function update_value_legend_dodge_bar6_sdm_ekonomi2(chk_bx) {
    if (chk_bx.checked) {
      console.log("check");
      bar6.options.plugins.legend.display=true;
      bar6.update();
    } else {
      console.log("uncheck");
      bar6.options.plugins.legend.display=false;
      bar6.update();
    }
};
