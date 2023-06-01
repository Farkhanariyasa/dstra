const bar2 = document.getElementById('chart-3');

const bar_2 = new Chart(bar2, {
    type: 'bar',
    data: {
        labels: [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ],
        datasets: [{
            label: 'Nilai',
            data: [
                dimensi_jenis.transportasi,
                dimensi_jenis.makanminum,
                dimensi_jenis.akomodasi
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
                text : ['Nilai IKUPTIK Total'],
                font: {
                    size: 20,
                    weight: 600,
                },
                color: '#4b395f',
            },
            subtitle: {
                display: true,
                text: 'Berdasarkan Jenis Usaha Pariwisata di Kota Batu',
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

const barJenis1 = document.getElementById('bar-jenis-1');
// const barJenis1Legend = document.getElementById('bar-jenis-1-legend');

barJenis1.addEventListener('change', tampilData);
// barJenis1Legend.addEventListener('click', update_value_legend_bar_jenis(chk_bx));

// function update_value_legend_bar_jenis(chk_bx){
  
//     if(chk_bx.checked)
//     {
//         console.log('check');
//         bar_2.options.plugins.legend.display=true;
//         bar_2.update();
//     }
        
//     else{
//       console.log('uncheck');
//       bar_2.options.plugins.legend.display=false;
//       bar_2.update();
  
//     }
//   }

function tampilData(){
    if (barJenis1.value =='total') {
        console.log(barJenis1.value);
        bar_2.data.datasets[0].data = 
            [
                dimensi_jenis.transportasi,
                dimensi_jenis.makanminum,
                dimensi_jenis.akomodasi
            ];
            bar_2.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_2.options.plugins.title.text='Nilai IKUPTIK Total';
            bar_2.update();
        document.getElementById("interpretasi-2").innerHTML = "0. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barJenis1.value =='dimensi1') {
        console.log(barJenis1.value);
        bar_2.data.datasets[0].data = 
            [
                dimensi1_jenis.transportasi,
                dimensi1_jenis.makanminum,
                dimensi1_jenis.akomodasi
            ];
            bar_2.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_2.options.plugins.title.text='Nilai IKUPTIK Dimensi Infrastruktur dan Konektivitas';
            bar_2.update();
        document.getElementById("interpretasi-2").innerHTML = "1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barJenis1.value =='dimensi2') {
            console.log(barJenis1.value);
            bar_2.data.datasets[0].data = 
            [   
                dimensi2_jenis.transportasi,
                dimensi2_jenis.makanminum,
                dimensi2_jenis.akomodasi
            ];
            bar_2.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_2.options.plugins.title.text='Nilai IKUPTIK Dimensi Penggunaan TIK';
            bar_2.update();
            document.getElementById("interpretasi-2").innerHTML = "2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barJenis1.value =='dimensi3'){
        console.log(barJenis1.value);
        bar_2.data.datasets[0].data = 
            [   
                dimensi3_jenis.transportasi,
                dimensi3_jenis.makanminum,
                dimensi3_jenis.akomodasi
            ];
            bar_2.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_2.options.plugins.title.text= 'Nilai IKUPTIK Dimensi Sumber Daya Manusia';
            bar_2.update();
            document.getElementById("interpretasi-2").innerHTML = "3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barJenis1.value =='dimensi4') {
        console.log(barJenis1.value);
        bar_2.data.datasets[0].data = 
            [
                dimensi4_jenis.transportasi,
                dimensi4_jenis.makanminum,
                dimensi4_jenis.akomodasi
            ];
            bar_2.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_2.options.plugins.title.text='Nilai IKUPTIK Dimensi Manajemen Organisasi';
            bar_2.update();
            document.getElementById("interpretasi-2").innerHTML = "4. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barJenis1.value =='dimensi5') {
            console.log(barJenis1.value);
            bar_2.data.datasets[0].data = 
            [   
                dimensi5_jenis.transportasi,
                dimensi5_jenis.makanminum,
                dimensi5_jenis.akomodasi
            ];
            bar_2.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_2.options.plugins.title.text='Nilai IKUPTIK Dimensi Ketersediaan Prasarana TIK';
            bar_2.update();
            document.getElementById("interpretasi-2").innerHTML = "5. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    } if (barJenis1.value =='dimensi6'){
        console.log(barJenis1.value);
        bar_2.data.datasets[0].data = 
            [   
                dimensi6_jenis.transportasi,
                dimensi6_jenis.makanminum,
                dimensi6_jenis.akomodasi
            ];
            bar_2.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_2.options.plugins.title.text= 'Nilai IKUPTIK Dimensi Motivasi Penggunaan TIK';
            bar_2.update();
            document.getElementById("interpretasi-2").innerHTML = "6. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    }
}