const stacked1 = document.getElementById('chart-1');
const stacked_1 = new Chart(stacked1, {
    type:'bar',
    data: {
        labels: [ ['Jasa', 'Transportasi Wisata'],
            ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
            ['Penyedia', 'Akomodasi']
        ],
        datasets: [{
            label: 'Tidak Siap',
            data:[
                (jenisKelaminTingkat.lakiTidak/475*100).toFixed(2),
                (jenisKelaminTingkat.perempuanTidak/450*100).toFixed(2),
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Tidak berada di bangunan fisik rumah tangga',
            data:[
                (jenisKelaminTingkat.lakiCukup/475*100).toFixed(2),
                (jenisKelaminTingkat.perempuanCukup/450*100).toFixed(2),
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Siap',
            data:[
                (jenisKelaminTingkat.lakiSiap/475*100).toFixed(2),
                (jenisKelaminTingkat.perempuanSiap/450*100).toFixed(2),
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },
        ]
    },options:{
        indexAxis: 'y',
        elements: {
            bar: {
              borderWidth: 3,
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
                color:'black'
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
    stacked_1.options.scales.x.display = true;
    stacked_1.options.scales.y.display = true;
    stacked_1.update();
  } else {
    console.log("uncheck");
    stacked_1.options.scales.x.display = false;
    stacked_1.options.scales.y.display = false;
    stacked_1.update();
  }
};

const dodgeBar5Legend = document.getElementById("dodge-bar-5-legend");
dodgeBar5Legend.addEventListener("click", update_value_legend_dodge_bar_5(chk_bx));

function update_value_legend_dodge_bar_5(chk_bx) {
    if (chk_bx.checked) {
      console.log("check");
      stacked_1.options.plugins.legend.display=true;
      stacked_1.update();
    } else {
      console.log("uncheck");
      stacked_1.options.plugins.legend.display=false;
      stacked_1.update();
    }
};
