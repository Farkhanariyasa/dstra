const dodge2 = document.getElementById('chart-2');
const dodge_2 = new Chart(dodge2, {
    type:'bar',
    data: {
        labels: [ ['Jasa', 'Transportasi', 'Wisata'],
            ['Jasa Penyedia', 'Makanan', 'dan', 'Minuman'],
            ['Penyedia', 'Akomodasi']
        ],
        datasets: [{
            label: 'Memanfaatkan TIK',
            data:[
                147,
                580,
                72,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Tidak Memanfaatkan TIK',
            data:[
                17,
                105,
                4,
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },
        ]
    },options:{
        responsive: true,
        maintainAspectRatio: true,
        scales:{
            x:{
                ticks:{
                    display:true
                }
            },
        },
        plugins: {
            title:{
                display: false,
                text:['Jumlah Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu'],
                font: {
                    size:16,
                },
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            subtitle: {
                display: false,
                text : ['Berdasarkan Jenis Kelamin dan Pendidikan'],
                font: {
                    size: 14,
                    weight: 'bold',
                }
            },
            legend:{
                display: true,
                title: {
                    display: false,
                    text : 'Kategori',
                },
                position: 'bottom',
                align: 'start',
                labels: {
                    // usePointStyle: true,  //<-- set this
                    // maxWidth: 10,
                 }
            },
            tooltip:{
                enabled:true,
            },
            datalabels:{
                display:true,
                color:'black',
                anchor: 'end',
                align: 'end',
            }
        },maintainAspectRatio: false,
        scales:{
            x:{
                grid:{
                    display:false
                },
            },
            y:{
                max: 700,
                grid:{
                    display:false
                },
            }
        }
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