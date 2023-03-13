
const test = document.getElementById('riset1_hasil4');
const hasil4 = new Chart(test, {
    type:'bar',
    data: {
        labels: ['Desember','November','Oktober'],
        datasets: [{
            label: 'MPD',
            data:[
                546466,
                123132,
                564568
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Survei Konvensional',
            data:[
                734972,
                450220,
                427924
            ],
            backgroundColor:"#ffeecc",
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
                text:['Jumlah Perjalanan Wisata Bulanan Asal Kota Malang Berdasarkan Sumber Data Triwulan IV 2022'],
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

const forBarChartAxis_data = document.getElementById("forBarChartAxis_data");
forBarChartAxis_data.addEventListener("click", update_value_data(chk_bx));

function update_value_data(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    hasil4.options.scales.x.display = true;
    hasil4.options.scales.y.display = true;
    hasil4.update();
  } else {
    console.log("uncheck");
    hasil4.options.scales.x.display = false;
    hasil4.options.scales.y.display = false;
    hasil4.update();
  }
};

