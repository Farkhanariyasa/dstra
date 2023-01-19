const riset1_hasil1 = document.getElementById('riset1_hasil1');

const batang = new Chart(riset1_hasil1, {
    type: 'doughnut',
    data: {
        labels: [
            'Jumlah Anggota 0',
            'Jumlah Anggota 1',
            'Jumlah Anggota 2',
            'Jumlah Anggota 3',
            'Jumlah Anggota 4',
            'Jumlah Anggota 5',
        ],

        datasets: [{
            label: 'Jumlah Anggota',
            data: [
                jumlahanggota.ja0,
                jumlahanggota.ja1,
                jumlahanggota.ja2,
                jumlahanggota.ja3,
                jumlahanggota.ja4,
                jumlahanggota.ja5,
                
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffab00",
                "#ffbc33",
                "#ffdd99",
                "#ffeecc",
                "#506396",
                "#c27d90"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : 'Banyaknya Rumah Tangga berdasarkan Jumlah Anggota yang melakukan perjalanan',
                font: {
                    size: 20
                }
            },
            legend:{
                display: true,
                position: 'bottom',
            },
            tooltip:{
                enabled: true,
                callbacks: {
                    label: function(context){
                        var label = context.label,
                            currentValue = context.raw,
                            total = context.chart._metasets[context.datasetIndex].total;
              
                        var percentage = parseFloat((currentValue/total*100).toFixed(1));
              
                        return label + ": " +currentValue + ' (' + percentage + '%)';
                    }
                }
            },
            datalabels: {
                display: true,
                color: 'black',
                formatter: function(value, context) {
                    total = context.chart._metasets[context.datasetIndex].total;
                    percentage = parseFloat((value/total*100).toFixed(1));
                    return percentage + '%';
                }


            }
        },
    },
    plugins: [ChartDataLabels]
});

const barchart = document.getElementById('forBarChart');
barchart.addEventListener('change',tampilData);

function tampilData(){
    if (barchart.value =='b') {
        console.log(barchart.value);
        batang.data.datasets[0].data = 
            [   jeniskelamin.laki,
                jeniskelamin.perempuan
            ];
            batang.data.labels = [
                'Laki-laki',
                'Perempuan'
            ];
        
        batang.options.plugins.title.text = 'Jenis Kelamin Responden';
            // console.log(batang.data.datasets[0].data)
            batang.update();
    } else {
            console.log(barchart.value);
            batang.data.datasets[0].data = 
            [   
                jumlahanggota.ja0,
                jumlahanggota.ja1,
                jumlahanggota.ja2,
                jumlahanggota.ja3,
                jumlahanggota.ja4,
                jumlahanggota.ja5
            ];
            batang.data.labels = [
                'Jumlah Anggota 0',
                'Jumlah Anggota 1',
                'Jumlah Anggota 2',
                'Jumlah Anggota 3',
                'Jumlah Anggota 4',
                'Jumlah Anggota 5'
            ];

            batang.options.plugins.title.text = 'Banyaknya Rumah Tangga berdasarkan Jumlah Anggota yang melakukan perjalanan';
            // console.log(batang.data.datasets[0].data)
            batang.update();
    }
}

