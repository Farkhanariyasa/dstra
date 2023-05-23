const dodge6 = document.getElementById('chart-6');
const dodge_6 = new Chart(dodge6, {
    type:'bar',
    data: {
        labels: [ ['Mikro'],
            ['Kecil'],
        ],
        datasets: [{
            label: 'Berada di bangunan fisik rumah tangga',
            data:[
                uupKotaBatuSkalaLokasi.mikroYa,
                uupKotaBatuSkalaLokasi.kecilYa,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Tidak berada di bangunan fisik rumah tangga',
            data:[
                uupKotaBatuSkalaLokasi.mikroTidak,
                uupKotaBatuSkalaLokasi.kecilTidak,
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

const dodgeBar6Axis = document.getElementById("dodge-bar-6-axis");
dodgeBar6Axis.addEventListener("click", update_value_axis_dodge_bar_6(chk_bx));

function update_value_axis_dodge_bar_6(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    dodge_6.options.scales.x.display = true;
    dodge_6.options.scales.y.display = true;
    dodge_6.update();
  } else {
    console.log("uncheck");
    dodge_6.options.scales.x.display = false;
    dodge_6.options.scales.y.display = false;
    dodge_6.update();
  }
};

const dodgeBar6Legend = document.getElementById("dodge-bar-6-legend");
dodgeBar6Legend.addEventListener("click", update_value_legend_dodge_bar_6(chk_bx));

function update_value_legend_dodge_bar_6(chk_bx) {
    if (chk_bx.checked) {
      console.log("check");
      dodge_6.options.plugins.legend.display=true;
      dodge_6.update();
    } else {
      console.log("uncheck");
      dodge_6.options.plugins.legend.display=false;
      dodge_6.update();
    }
};
