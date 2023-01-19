const riset1_hasil3 = document.getElementById('riset1_hasil3');
new Chart(riset1_hasil3, {
    type:'bar',
    data: {
        labels: ['Indosat',
                'XL Axiata',
                '3 / Tri',
                'Smartfren',
                'Lainnya'
        ],
        datasets: [{
            label: 'Jumlah Anggota Rumah Tangga',
            data:[
                indosat.ya,
                xl.ya,
                tri.ya,
                smartfren.ya,
                lainnya.ya
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        }]
    },options:{
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title:{
                display:true,
                text:'Jenis Kartu Provider yang digunakan oleh Responden',
                font: {
                    size:16
                },
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            legend:{
                display:true,
                position:'top',
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

