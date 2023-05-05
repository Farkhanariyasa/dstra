
const wisnus_output5 = document.getElementById('wisnus_output5');
const bar_output5 = new Chart(wisnus_output5, {
    type:'bar',
    data: {
        labels: [
            'Telkomsel-XL Axiata',
            'Telkomsel-Indosat',
            'Telkomsel-Telkomsel',
            'Telkomsel-3 (Three)',
            'Telkomsel-Smartfren',
            'Indosat-XL Axiata',
            'XL Axiata-3 (Three)',
            'Indosat-3 (Three)',
            'XL Axiata-XL Axiata',
            '3 (Three)-Smartfren',
            '3 (Three)-3 (Three)',
            'Kombinasi Kartu Lainnya',
            'Indosat-Indosat',
            'XL Axiata-Smartfren',
            'Indosat-Smartfren',
            'Smartfren-Smartfren'

        ],
        datasets: [{
            label: 'MPD',
            data:[
                9611,
                6841,
                6092,     
                4752,
                2247,
                2178,
                2000,
                1187,
                1146,
                902,
                890,
                717,
                616,
                553,           
                433,             
                104,
                
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        }]
    },options:{
        responsive: true,
        indexAxis: "y",
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
                text:['Jumlah Wisatawan Nusantara dengan Kepemilikan Ganda Kartu SIM Aktif dalam', 'Satu Ponsel Utama Berdasarkan Kombinasi Provider di Kota Malang Triwulan IV 2022'],
                font: {
                    size:16,
                    // family:'Poppins'
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
                display: true,
                color: "black",
                anchor: 'end',
                align: 'right',
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
        },
        animation:{
            duration: 2000,
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

const forBarChartAxis_output5 = document.getElementById("forBarChartAxis_output5");
forBarChartAxis_output5.addEventListener("click", update_value_output5(chk_bx));

function update_value_output5(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_output5.options.scales.x.display = true;
    bar_output5.options.scales.y.display = true;
    bar_output5.update();
  } else {
    console.log("uncheck");
    bar_output5.options.scales.x.display = false;
    bar_output5.options.scales.y.display = false;
    bar_output5.update();
  }
};

