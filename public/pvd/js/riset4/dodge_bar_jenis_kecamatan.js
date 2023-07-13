const bar5 = document.getElementById('viz-5');

const bar_5 = new Chart(bar5, {
    type: 'bar',
    data: {
        labels: [['Batu'],
                ['Bumiaji'],
                ['Junrejo'],
            ],
        datasets: [{
            label: 'Nilai',
            data: [
                47.62, 62.45, 55.18,
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
            x:{
                grid:{
                    display:false
                },
            },
            y:{            
                beginAtZero: true,
                grid:{
                    display:false
                },
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Nilai IKUPTIK tiap Kecamatan untuk Unit Usaha Jasa Transportasi Wisata di Kota Batu'],
                font: {
                    size: 18,
                    weight: 600,
                },
                color: '#4b395f',
            },
            subtitle: {
                display: false,
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

const barJenis1 = document.getElementById('bar-kecamatan-1');

barJenis1.addEventListener('change', tampilData);

function tampilData(){
    if (barJenis1.value =='jasa1') {
        console.log(barJenis1.value);
        bar_5.data.datasets[0].data = 
            [
                47.62, 62.45, 55.18,
            ];
            bar_5.data.labels =   [['Batu'],
                ['Bumiaji'],
                ['Junrejo']
            ];
            bar_5.options.plugins.title.text='Nilai IKUPTIK tiap Kecamatan untuk Unit Usaha Jasa Transportasi Wisata di Kota Batu';
            bar_5.update();
        document.getElementById("interpretasi-2").innerHTML = "Unit-unit usaha pariwisata berjenis Jasa Transportasi Wisata di ketiga kecamatan Kota Batu tergolong cukup siap dalam memanfaatkan TIK. Namun, Kecamatan Bumiaji memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai IKUPTIK sebesar 62,45.";
    } if (barJenis1.value =='jasa2') {
        console.log(barJenis1.value);
        bar_5.data.datasets[0].data = 
            [
                45.79, 45.25, 44.82, 
            ];
            bar_5.data.labels =   [['Batu'],
                ['Bumiaji'],
                ['Junrejo']
            ];
            bar_5.options.plugins.title.text='Nilai IKUPTIK tiap Kecamatan untuk Unit Usaha Jasa Penyedia Makanan dan Minuman di Kota Batu';
            bar_5.update();
        document.getElementById("interpretasi-2").innerHTML = "Unit-unit usaha pariwisata berjenis Jasa Penyediaan Makanan dan Minuman di ketiga kecamatan Kota Batu tergolong cukup siap dalam memanfaatkan TIK. Namun, Kecamatan Batu memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai IKUPTIK sebesar 45,79.";
    } if (barJenis1.value =='jasa3') {
            console.log(barJenis1.value);
            bar_5.data.datasets[0].data = 
            [   
                51.92, 49.72, 63.62,
            ];
            bar_5.data.labels =   [['Batu'],
                ['Bumiaji'],
                ['Junrejo']
            ];
            bar_5.options.plugins.title.text='Nilai IKUPTIK tiap Kecamatan untuk Unit Usaha Penyedia Akomodasi di Kota Batu';
            bar_5.update();
            document.getElementById("interpretasi-2").innerHTML = "Unit-unit usaha pariwisata  berjenis Jasa Penyediaan Akomodasi untuk ketiga kecamatan di Kota Batu tergolong cukup siap dalam memanfaatkan TIK. Namun, Kecamatan Junrejo memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai IKUPTIK sebesar 63,62.";
    }
}