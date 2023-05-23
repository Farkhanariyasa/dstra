const sdm_ekonomi = document.getElementById('chart-4');
const bar = new Chart(sdm_ekonomi, {
    type:'bar',
    data: {
        labels: [ ['Jasa', 'Transportasi Wisata'],
            ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
            ['Penyedia', 'Akomodasi']
        ],
        datasets: [{
            label: 'Mikro',
            data:[
                uupKotaBatuJenisSkala.transportasiMikro,
                uupKotaBatuJenisSkala.makananMikro,
                uupKotaBatuJenisSkala.akomodasiMikro
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Kecil',
            data:[
                uupKotaBatuJenisSkala.transportasiKecil,
                uupKotaBatuJenisSkala.makananKecil,
                uupKotaBatuJenisSkala.akomodasiKecil
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

const dodgeBarSdmEkonomiAxis = document.getElementById("forDodgeBarSdmEkonomiAxis");
dodgeBarSdmEkonomiAxis.addEventListener("click", update_value_axis_dodge_bar_sdm_ekonomi(chk_bx));

function update_value_axis_dodge_bar_sdm_ekonomi(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar.options.scales.x.display = true;
    bar.options.scales.y.display = true;
    bar.update();
  } else {
    console.log("uncheck");
    bar.options.scales.x.display = false;
    bar.options.scales.y.display = false;
    bar.update();
  }
};

const dodgeBarSdmEkonomiLegend = document.getElementById("forDodgeBarSdmEkonomiLegend");
dodgeBarSdmEkonomiLegend.addEventListener("click", update_value_legend_dodge_bar_sdm_ekonomi(chk_bx));

function update_value_legend_dodge_bar_sdm_ekonomi(chk_bx) {
    if (chk_bx.checked) {
      console.log("check");
      bar.options.plugins.legend.display=true;
      bar.update();
    } else {
      console.log("uncheck");
      bar.options.plugins.legend.display=false;
      bar.update();
    }
};
