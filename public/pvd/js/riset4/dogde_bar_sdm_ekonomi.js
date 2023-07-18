const sdm_ekonomi = document.getElementById('sdm-ekonomi');
const bar = new Chart(sdm_ekonomi, {
    type:'bar',
    data: {
        labels: ['Batu',
                'Junrejo',
                'Bumiaji'
        ],
        datasets: [{
            label: 'Sangat tidak mengikuti',
            data:[
                kecamatanEkonomi.batu1,
                kecamatanEkonomi.junrejo1,
                kecamatanEkonomi.bumiaji1
            ],
            backgroundColor:"#ffab00",
            borderWidth:1
        },{
            label: 'Tidak mengikuti',
            data:[
                kecamatanEkonomi.batu2,
                kecamatanEkonomi.junrejo2,
                kecamatanEkonomi.bumiaji2
            ],
            backgroundColor:"#506396",
            borderWidth:1
        },{
            label: 'Mengikuti',
            data:[
                kecamatanEkonomi.batu3,
                kecamatanEkonomi.junrejo3,
                kecamatanEkonomi.bumiaji3
            ],
            backgroundColor:"#4b395f",
            borderWidth:1
        },{
            label: 'Sangat mengikuti',
            data:[
                kecamatanEkonomi.batu4,
                kecamatanEkonomi.junrejo4,
                kecamatanEkonomi.bumiaji4
            ],
            backgroundColor:"#b35c74",
            borderWidth:1
        }
        ]
    },options:{
        responsive: true,
        maintainAspectRatio: false,
        scales:{
            x:{
                ticks:{
                    display:true
                }
            }
        },
        plugins: {
            title:{
                display:true,
                text:['Unit Usaha Pariwisata yang Mengikuti Perkembangan Isu Ekonomi'],
                font: {
                    size:16,
                    family:'Poppins'

                },
                color:'#493a5a',
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