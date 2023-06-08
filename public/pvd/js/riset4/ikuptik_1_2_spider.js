const data = {
    labels: [
        ['Infrastruktur', 'dan Konektivitas'],
        ['Penggunaan TIK'],
        ['Sumber Daya', 'Manusia'],
        ['Manajemen Organisasi'],
        ['Ketersediaan', 'Prasarana TIK'],
        ['Motivasi', 'Penggunaan TIK'],
    ],
    datasets: [{
        label: 'IKUPTIK Kota Batu',
        data: [ikuptikPerDimensi.dimensi1,
            ikuptikPerDimensi.dimensi2,
            ikuptikPerDimensi.dimensi3,
            ikuptikPerDimensi.dimensi4,
            ikuptikPerDimensi.dimensi5,
            ikuptikPerDimensi.dimensi6,
        ],
        fill: true,
        backgroundColor: "#ffab0020",
        borderColor: "#ffab00",
        pointBackgroundColor: "#ffab00",
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: "#ffab00"
    },
    // {
    //     label: 'My Second Dataset',
    //     data: [28, 48, 40, 19, 96, 27, 100],
    //     fill: true,
    //     backgroundColor: 'rgba(54, 162, 235, 0.2)',
    //     borderColor: 'rgb(54, 162, 235)',
    //     pointBackgroundColor: 'rgb(54, 162, 235)',
    //     pointBorderColor: '#fff',
    //     pointHoverBackgroundColor: '#fff',
    //     pointHoverBorderColor: 'rgb(54, 162, 235)'
    // }, {
    //     label: 'My Third Dataset',
    //     data: [45, 25, 16, 36, 67, 18, 76],
    //     fill: true,
    //     backgroundColor: 'rgba(255, 205, 86, 0.2)',
    //     borderColor: 'rgb(255, 205, 86)',
    //     pointBackgroundColor: 'rgb(255, 205, 86)',
    //     pointBorderColor: '#fff',
    //     pointHoverBackgroundColor: '#fff',
    //     pointHoverBorderColor: 'rgb(255, 205, 86)'
    // }    
    ]
};

const radar = document.getElementById("chart-3");

new Chart(radar,{
    type: 'radar',
    data: data,
    options: {
        scales: {
            r:{
                beginAtZero: false,
                suggestedMin: 10,
                suggestedMax: 100,
                // pointLabels: {
                //     font: {
                //       size: 10
                //     }
                // }
                ticks: {
                    beginAtZero: true,
                    min: 10,
                    max: 100,
                    stepSize: 20
                },
                // pointLabels: {
                //     fontSize: 16,
                //   },
            },
        },
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : "Nilai IKUPTIK per Dimensi di Kota Batu",
                font: {
                    size: 20,
                    weight: 600,
                },
                color: '#4b395f',
            },
            elements: {
                line: {
                    borderWidth: 2
                }
            },
            legend:{
                display: false,
                position: 'top',
            },

        },
    },
    // plugins: [ChartDataLabels]
});