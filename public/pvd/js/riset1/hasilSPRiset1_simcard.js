const riset1_hasil3 = document.getElementById('riset1_hasil3');
const bar_sim = new Chart(riset1_hasil3, {
    type:'bar',
    data: {
        labels: ['Indosat',
                'XL Axiata',
                '3 / Tri',
                'Smartfren',
                'Lainnya'
        ],
        datasets: [{
            label: 'Jumlah Anggota Rumah Tangga',
            data:[
                indosat.ya,
                xl.ya,
                tri.ya,
                smartfren.ya,
                lainnya.ya
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        }]
    },options:{
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title:{
                display:true,
                text:'Jenis Kartu Provider yang digunakan oleh Responden',
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
            },
        },
    },plugins:[ChartDataLabels]
});


const barChartAxis_sim = document.getElementById('forBarChartAxis_sim');
barChartAxis_sim.addEventListener('click', update_value_sim(check_axis));

function update_value_sim(check_axis) {
    if (check_axis.checked) {
        console.log('check');
        bar_sim.options.scales.x.display = true;
        bar_sim.options.scales.y.display = true;
        bar_sim.update();
    } else {
        console.log('uncheck');
        bar_sim.options.scales.x.display = false;
        bar_sim.options.scales.y.display = false;
        bar_sim.update();
    }
}
