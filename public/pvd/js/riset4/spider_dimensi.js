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
    ]
};

const radar = document.getElementById("chart-1");

new Chart(radar,{
    type: 'radar',
    data: data,
    options: {
        scales: {
            r:{
                beginAtZero: false,
                suggestedMin: 10,
                suggestedMax: 100,
                ticks: {
                    beginAtZero: true,
                    min: 10,
                    max: 100,
                    stepSize: 20
                },
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
});