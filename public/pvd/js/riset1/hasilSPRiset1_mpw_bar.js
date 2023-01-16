const ctx = document.getElementById('jk_batang');
new Chart(ctx, {
    type:'bar',
    data: {
        labels: ['Ke Objek Wisata dalam Kota Sama',
                'Menginap di Akomodasi Komersil di Kota Sama',
                'Menuju Kecamatan lain dalam Kota Sama',
                'Ke Objek Wisata di Luar Kota',
                'Menginap di Akomodasi Komersil di Luar Kota',
                'Menuju Kota Lain'
            ],
        datasets: [{
            label: 'Ya',
            data:[
                mpw1.ya,
                mpw2.ya,
                mpw3.ya,
                mpw4.ya,
                mpw5.ya,
                mpw6.ya,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Tidak',
            data:[
                mpw1.tidak,
                mpw2.tidak,
                mpw3.tidak,
                mpw4.tidak,
                mpw5.tidak,
                mpw6.tidak,
            ],
            backgroundColor:"#ffeecc",
            borderWidth:1
        }]
    },options:{
        responsive: true,
        plugins: {
            title:{
                display:true,
                text:'Tindakan Perjalanan Tidak Lebih dari 1 Tahun dan Telah Kembali dalam Periode Oktober 2022 - Desember 2022',
                font: {
                    size:20
                }
            },
            legend:{
                display:true,
            },
            tooltip:{
                enabled:true,
            },
            datalabels:{
                display:true,
                color:'black'
            }
        },maintainAspectRatio: false
    },plugins:[ChartDataLabels]
});

const batang1 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:['Laki-laki',
                'Perempuan'],
        datasets:[{
            label: 'Responden',
            data: [jeniskelamin.laki,
                jeniskelamin.perempuan],
            borderWidth:1,
            backgroundColor:[
                "#ffab00"
            ]
        }]
    },
    options: {
        scales:{
            y: {
                beginAtZero: true
            }
        },
        responsive: true,
        plugins:{
            title:{
                display:true,
                text: 'Jenis Kelamin ART',
                font:{
                    size:20
                }
            },
            legend:{
                display:true
            },
            tooltip:{
                enabled:true,
                // callbacks:{
                //     label: function(context){
                //         var label = context.label,
                //             currentvalue = context.raw;

                //             return label
                //     }
                // }
            },
            datalabels:{
                display:true,
                color:'black'
            }
        },
        maintainAspectRatio: false
    },plugins:[ChartDataLabels]
});


// const barchart = document.getElementById('forBarChart');
// barchart.addEventListener('change',tampilData);

// function tampilData(){
//     if (barchart.value =='a') {
//         console.log(barchart.value);
//         // batang.data.datasets[0].data = 
//         //     [   jeniskelamin.laki,
//         //         jeniskelamin.perempuan
//         //     ];
//         //     batang.data.labels = [
//         //         'Laki-laki',
//         //         'Perempuan'
//         //     ];
//             // console.log(batang.data.datasets[0].data)
//             batang1.update();
//     } else {
//             console.log(barchart.value);
//             batang.data.datasets[0].data = 
//             [   
//                 mpw1.ya,
//                 mpw2.ya,
//                 mpw3.ya,
//                 mpw4.ya,
//                 mpw5.ya,
//                 mpw6.ya,
//             ];
//             batang.data.datasets[0].label = 'Ya';
        
//             // console.log(batang.data.datasets[0].data)
//             batang.update();
//     }
// }