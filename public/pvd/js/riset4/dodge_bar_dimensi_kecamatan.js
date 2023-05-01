const hasil1 = document.getElementById('hasil1');

const pie = new Chart(hasil1, {
    type: 'bar',
    data: {
        labels: ["Batu", "Junrejo", "Bumiaji"],
        datasets: [{
            label: 'dimensi1_kecamatan',
            data: [
                dimensi1_kecamatan.batu,
                dimensi1_kecamatan.junrejo,
                dimensi1_kecamatan.bumiaji
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffdd99",
                "#96a1c0",
                "#93889f"
            ],
        }]
    },
    options: {
        scales: {
            y: {
            beginAtZero: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['dimensi1_kecamatan'],
                font: {
                    size: 20
                }
            },
            legend:{
                display: false,
                position: 'right',
            },
            tooltip: {
                callbacks: {
                    title: (context) => {
                        console.log(context[0].label);
                        return context[0].label.replaceAll(',',' ');
                    }
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const pieChart = document.getElementById('pieChart');
// const pieChartLegend = document.getElementById('pieChartLegend');

pieChart.addEventListener('change', tampilData);
// pieChartLegend.addEventListener('click', update_value_legend_bar_kecamatan(chk_bx));

// function update_value_legend_bar_kecamatan(chk_bx){
  
//     if(chk_bx.checked)
//     {
//         console.log('check');
//         pie.options.plugins.legend.display=true;
//         pie.update();
//     }
        
//     else{
//       console.log('uncheck');
//       pie.options.plugins.legend.display=false;
//       pie.update();
  
//     }
//   }

function tampilData(){
    if (pieChart.value =='dimensi1') {
        console.log(pieChart.value);
        pie.data.datasets[0].data = 
            [
                dimensi1_kecamatan.batu,
                dimensi1_kecamatan.junrejo,
                dimensi1_kecamatan.bumiaji
            ];
            pie.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            pie.options.plugins.title.text='dimensi1_kecamatan';
            pie.update();

    } if (pieChart.value =='dimensi2') {
            console.log(pieChart.value);
            pie.data.datasets[0].data = 
            [   
                dimensi2_kecamatan.batu,
                dimensi2_kecamatan.junrejo,
                dimensi2_kecamatan.bumiaji
            ];
            pie.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            pie.options.plugins.title.text='dimensi2_kecamatan';
            pie.update();
    } if (pieChart.value =='dimensi3'){
        console.log(pieChart.value);
        pie.data.datasets[0].data = 
            [   
                dimensi3_kecamatan.batu,
                dimensi3_kecamatan.junrejo,
                dimensi3_kecamatan.bumiaji
            ];
            pie.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            pie.options.plugins.title.text= 'dimensi3_kecamatan';
            pie.update();
    } if (pieChart.value =='dimensi4') {
        console.log(pieChart.value);
        pie.data.datasets[0].data = 
            [
                dimensi4_kecamatan.batu,
                dimensi4_kecamatan.junrejo,
                dimensi4_kecamatan.bumiaji
            ];
            pie.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            pie.options.plugins.title.text='dimensi4_kecamatan';
            pie.update();

    } if (pieChart.value =='dimensi5') {
            console.log(pieChart.value);
            pie.data.datasets[0].data = 
            [   
                dimensi5_kecamatan.batu,
                dimensi5_kecamatan.junrejo,
                dimensi5_kecamatan.bumiaji
            ];
            pie.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            pie.options.plugins.title.text='dimensi5_kecamatan';
            pie.update();
    } if (pieChart.value =='dimensi6'){
        console.log(pieChart.value);
        pie.data.datasets[0].data = 
            [   
                dimensi6_kecamatan.batu,
                dimensi6_kecamatan.junrejo,
                dimensi6_kecamatan.bumiaji
            ];
            pie.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            pie.options.plugins.title.text= 'dimensi6_kecamatan';
            pie.update();
    }
}