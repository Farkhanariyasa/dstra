const bar1 = document.getElementById('chart-2');

const bar_1 = new Chart(bar1, {
    type: 'bar',
    data: {
        labels: ["Batu", "Junrejo", "Bumiaji"],
        datasets: [{
            label: 'Nilai',
            data: [
                dimensi_kecamatan.batu,
                dimensi_kecamatan.junrejo,
                dimensi_kecamatan.bumiaji
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
                text : 'Nilai IKUPTIK Total',
                font: {
                    size: 20,
                    weight: 600,
                },
                color: '#4b395f',
            },
            subtitle: {
                display: true,
                text: 'Berdasarkan Kecamatan di Kota Batu',
                font: {
                    size: 16,
                },
                color: 'var(--bs-card-color)',
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
            },
            datalabels:{
                display:true,
                color:'black'
            },
        },
    },
    plugins: [ChartDataLabels]
});

const barKecamatan1 = document.getElementById('bar-kecamatan-1');
// const barKecamatan1Legend = document.getElementById('bar-kecamatan-1-legend');

barKecamatan1.addEventListener('change', tampilData);
// barKecamatan1Legend.addEventListener('click', update_value_legend_bar_kecamatan(chk_bx));

// function update_value_legend_bar_kecamatan(chk_bx){
  
//     if(chk_bx.checked)
//     {
//         console.log('check');
//         bar_1.options.plugins.legend.display=true;
//         bar_1.update();
//     }
        
//     else{
//       console.log('uncheck');
//       bar_1.options.plugins.legend.display=false;
//       bar_1.update();
  
//     }
//   }

function tampilData(){
    if (barKecamatan1.value =='total') {
        console.log(barKecamatan1.value);
        bar_1.data.datasets[0].data = 
            [
                dimensi_kecamatan.batu,
                dimensi_kecamatan.junrejo,
                dimensi_kecamatan.bumiaji
            ];
            bar_1.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            bar_1.options.plugins.title.text='Nilai IKUPTIK Total';
            bar_1.update();
            document.getElementById("interpretasi-1").innerHTML = "0. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barKecamatan1.value =='dimensi1') {
        console.log(barKecamatan1.value);
        bar_1.data.datasets[0].data = 
            [
                dimensi1_kecamatan.batu,
                dimensi1_kecamatan.junrejo,
                dimensi1_kecamatan.bumiaji
            ];
            bar_1.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            bar_1.options.plugins.title.text='Nilai IKUPTIK Dimensi Infrastruktur dan Konektivitas';
            bar_1.update();
            document.getElementById("interpretasi-1").innerHTML = "1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barKecamatan1.value =='dimensi2') {
            console.log(barKecamatan1.value);
            bar_1.data.datasets[0].data = 
            [   
                dimensi2_kecamatan.batu,
                dimensi2_kecamatan.junrejo,
                dimensi2_kecamatan.bumiaji
            ];
            bar_1.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            bar_1.options.plugins.title.text='Nilai IKUPTIK Dimensi Penggunaan TIK';
            bar_1.update();
            document.getElementById("interpretasi-1").innerHTML = "2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barKecamatan1.value =='dimensi3'){
        console.log(barKecamatan1.value);
        bar_1.data.datasets[0].data = 
            [   
                dimensi3_kecamatan.batu,
                dimensi3_kecamatan.junrejo,
                dimensi3_kecamatan.bumiaji
            ];
            bar_1.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            bar_1.options.plugins.title.text= 'Nilai IKUPTIK Dimensi Sumber Daya Manusia';
            bar_1.update();
            document.getElementById("interpretasi-1").innerHTML = "3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barKecamatan1.value =='dimensi4') {
        console.log(barKecamatan1.value);
        bar_1.data.datasets[0].data = 
            [
                dimensi4_kecamatan.batu,
                dimensi4_kecamatan.junrejo,
                dimensi4_kecamatan.bumiaji
            ];
            bar_1.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            bar_1.options.plugins.title.text='Nilai IKUPTIK Dimensi Manajemen Organisasi';
            bar_1.update();
            document.getElementById("interpretasi-1").innerHTML = "4. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barKecamatan1.value =='dimensi5') {
            console.log(barKecamatan1.value);
            bar_1.data.datasets[0].data = 
            [   
                dimensi5_kecamatan.batu,
                dimensi5_kecamatan.junrejo,
                dimensi5_kecamatan.bumiaji
            ];
            bar_1.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            bar_1.options.plugins.title.text='Nilai IKUPTIK Dimensi Ketersediaan Prasarana TIK';
            bar_1.update();
            document.getElementById("interpretasi-1").innerHTML = "5. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barKecamatan1.value =='dimensi6'){
        console.log(barKecamatan1.value);
        bar_1.data.datasets[0].data = 
            [   
                dimensi6_kecamatan.batu,
                dimensi6_kecamatan.junrejo,
                dimensi6_kecamatan.bumiaji
            ];
            bar_1.data.labels = ["Batu", "Junrejo", "Bumiaji"];
            bar_1.options.plugins.title.text= 'Nilai IKUPTIK Dimensi Motivasi Penggunaan TIK';
            bar_1.update();
            document.getElementById("interpretasi-1").innerHTML = "6. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    }
}