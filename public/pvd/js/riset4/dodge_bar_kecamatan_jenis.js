const bar5 = document.getElementById('chart-5');

const bar_5 = new Chart(bar5, {
    type: 'bar',
    data: {
        labels: [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ],
        datasets: [{
            label: 'Nilai',
            data: [
                kecamatan1_jenis.transportasi,
                kecamatan1_jenis.makanminum,
                kecamatan1_jenis.akomodasi
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
                text : ['Nilai IKUPTIK tiap Jenis Usaha di Kecamatan Batu'],
                font: {
                    size: 20,
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
    if (barJenis1.value =='batu') {
        console.log(barJenis1.value);
        bar_5.data.datasets[0].data = 
            [
                kecamatan1_jenis.transportasi,
                kecamatan1_jenis.makanminum,
                kecamatan1_jenis.akomodasi
            ];
            bar_5.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_5.options.plugins.title.text='Nilai IKUPTIK tiap Jenis Usaha di Kecamatan Batu';
            bar_5.update();
        document.getElementById("interpretasi-2").innerHTML = "Ketiga jenis usaha pariwisata di Kecamatan Batu tergolong cukup siap dalam memanfaatkan TIK. Namun, jenis usaha Penyediaan Akomodasi memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai IKUPTIK sebesar 51,92.";
    } if (barJenis1.value =='junrejo') {
        console.log(barJenis1.value);
        bar_5.data.datasets[0].data = 
            [
                kecamatan2_jenis.transportasi,
                kecamatan2_jenis.makanminum,
                kecamatan2_jenis.akomodasi
            ];
            bar_5.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_5.options.plugins.title.text='Nilai IKUPTIK tiap Jenis Usaha di Kecamatan Junrejo';
            bar_5.update();
        document.getElementById("interpretasi-2").innerHTML = "Ketiga jenis usaha pariwisata di Kecamatan Junrejo tergolong cukup siap dalam memanfaatkan TIK. Namun, jenis usaha Penyediaan Akomodasi memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai IKUPTIK sebesar 63,62.";
    } if (barJenis1.value =='bumiaji') {
            console.log(barJenis1.value);
            bar_5.data.datasets[0].data = 
            [   
                kecamatan3_jenis.transportasi,
                kecamatan3_jenis.makanminum,
                kecamatan3_jenis.akomodasi
            ];
            bar_5.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar_5.options.plugins.title.text='Nilai IKUPTIK tiap Jenis Usaha di Kecamatan Bumiaji';
            bar_5.update();
            document.getElementById("interpretasi-2").innerHTML = "Ketiga jenis usaha pariwisata di Kecamatan Bumiaji tergolong cukup siap dalam memanfaatkan TIK. Namun, jenis usaha Jasa Transportasi Wisata memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai IKUPTIK sebesar 62,45.";
    }
}