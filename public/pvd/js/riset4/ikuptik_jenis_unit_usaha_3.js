const VIZ_3 = document.getElementById('viz-3');
new Chart(VIZ_3, {
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
            45.26,
            19.57,
            53.56,
            62.11,
            67.94,
            47.52
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffbc33",
            "#ffeecc",
            "#506396",
            "#6f617f",
            "#4b395f",
            "#ffab00"
        ],
        datalabels: {
            anchor: 'end', // Set the anchor to 'end' to position the labels at the top
            align: 'top', // Align the labels to the top
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
                text : ['Pada Usaha Jasa Makan-Minum di Kota Batu'],
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
