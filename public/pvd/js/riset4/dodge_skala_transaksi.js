const dodge21 = document.getElementById('chart-21');
const dodge_21 = new Chart(dodge21, {
    type:'bar',
    data: {
        labels: [['Mikro'],
        ['Kecil'],
        ],
        datasets: [{
            label: 'Transfer Bank',
            data:[
                278, 41,
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'E-wallet',
            data:[
                253, 22,
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'QRIS',
            data:[
                69, 16,
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },{
            label: 'Pembayaran dengan kartu',
            data:[
                16, 11,
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        },{
            label: 'Lainnya',
            data:[
                5, 0,
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