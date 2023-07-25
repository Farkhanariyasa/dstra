const dodge20 = document.getElementById('chart-20');
const dodge_20 = new Chart(dodge20, {
    type:'bar',
    data: {
        labels: [['Jasa', 'Transportasi Wisata'],
        ['Jasa', 'Penyedia Makanan', 'dan Minuman'],
        ['Penyedia', 'Akomodasi']
        ],
        datasets: [{
            label: 'Transfer Bank',
            data:[
                40, 225, 54,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'E-wallet',
            data:[
                89, 178, 8,
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'QRIS',
            data:[
                6, 76, 3,
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },{
            label: 'Pembayaran dengan kartu',
            data:[
                1, 21, 5,
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: 'Lainnya',
            data:[
                2, 3, 0,
            ],
            backgroundColor:"#ffbc33",
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