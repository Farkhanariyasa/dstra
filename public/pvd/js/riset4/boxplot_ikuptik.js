const stacked6 = document.getElementById('chart-6');
const stacked_6 = new Chart(stacked6, {
    type:'boxplot',
    data: {
        labels: ['Kota Batu'],
      datasets: [{
        label: 'IKUPTIK',
        outlierColor: '#000000',
        padding: 0,
        itemRadius: 0,
        data: [
            ikuptik.ikuptik
        ],
        backgroundColor: ['#ffab00', '#506396'],
        borderColor: ['#000000', '#000000'],
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
                text:['Sebaran IKUPTIK di Kota Batu'],
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
                displayColors: false,
                callbacks: {
                    label: (context) => {
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
const chartVersion6 = document.getElementById('chartVersion');

function randomValues(count, min, max){
    const delta = max-min;
    return Array.from({length: count}).map(() => Math.random() * delta + min);
}