const VIZ_2 = document.getElementById('viz-4');
new Chart(VIZ_2, {
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
            akomodasi.dimensi1,
            akomodasi.dimensi2,
            akomodasi.dimensi3,
            akomodasi.dimensi4,
            akomodasi.dimensi5,
            akomodasi.dimensi6,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#7382ab",
            "#b35c74",
            "#7382ab",
            "#ffab00",
            "#7382ab",
            "#7382ab",
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
                text : [['Pada Usaha Jasa Penyediaan Akomodasi di Kota Batu'],[''],['']],
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
