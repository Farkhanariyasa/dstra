const VIZ_3 = document.getElementById('viz-3');
new Chart(VIZ_3, {
    type: 'bar',
    data: {
    labels: [
        ['Infrastruktur', 'dan', 'Konektivitas'],
        ['Penggunaan', 'TIK'],
        ['Sumber', 'Daya', 'Manusia'],
        ['Manajemen', 'Organisasi'],
        ['Ketersediaan', 'Prasarana', 'TIK'],
        ['Motivasi', 'Penggunaan', 'TIK']
    ],
    datasets: [{
        label: 'Nilai IKUPTIK',
        data: [
            makan.dimensi1,
            makan.dimensi2,
            makan.dimensi3,
            makan.dimensi4,
            makan.dimensi5,
            makan.dimensi6,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#7382ab",
            "#b35c74",
            "#7382ab",
            "#7382ab",
            "#ffab00",
            "#7382ab"
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
            beginAtZero: true,
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
                text : [['Pada Usaha Jasa Penyediaan Makanan dan Minuman di Kota Batu'],[''],['']],
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
