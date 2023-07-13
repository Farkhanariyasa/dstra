const stacked4 = document.getElementById('chart-4');
const stacked_4 = new Chart(stacked4, {
    type:'boxplot',
    data: {
        labels: [['Jasa', 'Transportasi', 'Wisata'],
                ['Jasa', 'Penyedia', 'Makanan', 'dan', 'Minuman'],
                ['Penyedia', 'Akomodasi']],
      datasets: [{
        label: 'IKUPTIK',
        outlierColor: '#000000',
        padding: 0,
        itemRadius: 0,
        data: [
            jenis.transportasi,
            jenis.makanan,
            jenis.akomodasi,
        ],
        backgroundColor: ['#ffab00', '#506396', '#4b395f'],
        borderColor: ['#000000', '#000000', '#000000'],
          borderWidth: 1,
        },
        ]
    },options:{
        responsive: true,
        maintainAspectRatio: false,
        scales:{
            x:{
                ticks:{
                    display:true
                }
            },
            y: {
                beginAtZero: true
              },
        },
        plugins: {
            title:{
                display: true,
                text:['IKUPTIK di Kota Batu Berdasarkan Jenis Usaha Pariwisata'],
                font: {
                    size:16,
                },
                color:'#493a5a',
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            subtitle:{
                display: false,
                text:['Berdasarkan Jenis Usaha Pariwisata Menurut Lokasi atau Tempat Usaha'],
                font: {
                    size:16,
                    weight: 'bold',
                },
                padding:{
                    top:5,
                    bottom:5,
                    right:10,
                    left:10
                }
            },
            legend:{
                display: false,
                title: {
                    display: false,
                    text : 'Kategori',
                },
                position: 'bottom',
                align: 'start',
            },
            tooltip:{
                // enabled:true,
                displayColors: false,
                callbacks: {
                    label: (context) => {
                        // console.log(context.parsed);
                        const boxplotValues =[
                            `Min: ${context.parsed.whiskerMin.toFixed(2)}`,
                            `Q1: ${context.parsed.q1.toFixed(2)}`,
                            `Median: ${context.parsed.median.toFixed(2)}`,
                            `Q3: ${context.parsed.q3.toFixed(2)}`,
                            `Max: ${context.parsed.whiskerMax.toFixed(2)}`,
                            `Mean: ${context.parsed.mean.toFixed(2)}`,
                        ];
                        return boxplotValues;
                    }
                }
            },
            datalabels:{
                display:false,
                color:'black',
                // formatter: function(value, context) {
                //     return  value + '%';
                // },
            }
        },maintainAspectRatio: false,
        scales: {
            x: {
              stacked: true,
              ticks: {
                display: true,
              },
              grid:{
                display:false
            },
            },
            y: {
              stacked: true,
              grid:{
                display:false
            },
            }
          },
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

// Instantly assign Chart.js version
const chartVersion4 = document.getElementById('chartVersion');
chartVersion4.innerText = Chart.version;

function randomValues(count, min, max){
    const delta = max-min;
    return Array.from({length: count}).map(() => Math.random() * delta + min);
}