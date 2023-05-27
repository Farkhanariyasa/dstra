const VIZ_2 = document.getElementById('viz-2');
new Chart(VIZ_2, {
    type: 'bar',
    data: {
    labels: [
        ['Infrastruktur dan Konektivitas'],
        ['Penggunaan TIK'],
        ['Sumber Daya Manusia'],
        ['Manajemen Organisasi'],
        ['Eksternal'],
        ['Kendala'],
    ],
    datasets: [{
        label: 'Nilai IKUPTIK',
        data: [
            69.63,
            56.31,
            41.61,
            65.67,
            69.78,
            28.15
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00",
            "#506396",
            "#4b395f",
            "#b35c74",
            "#ffdd99",
            "#6f617f"
        ],
        datalabels: {
            anchor: 'end',
            align: 'top',
            color: 'black' // Set the color of the labels
        },
    }]
    },
    options: {
        scales: {
            y: {
            beginAtZero: false,
            display: false
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Nilai IKUPTIK Tiap-Tiap Dimensi'],
                font: {
                    size: 20
                }
            },
            subtitle: {
                display: true,
                text : ['Pada Usaha Jasa Akomodasi di Kota Batu'],
                font: {
                    size: 14
                }
            },
            legend:{
                display: false,
                position: 'right',
            },
            tooltip: {
                callbacks: {
                    title: (context) => {
                        console.log(context[0].label);
                        return context[0].label.replaceAll(',',' ');
                    }
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});
