const VIZ_2 = document.getElementById('viz-2');
new Chart(VIZ_2, {
    type: 'bar',
    data: {
    labels: [['Jasa Transportasi'],
            ['Jasa Penyedia Makanan dan Minuman'],
            ['Jasa Akomodasi']
        ],
    datasets: [{
        label: 'Rata-rata IKUPTIK',
        data: [
            IKUPTIK_JASA_PENYEDIA_MAKANAN_DAN_MINUMAN.b1091,
            IKUPTIK_JASA_PENYEDIA_MAKANAN_DAN_MINUMAN.b1092,
            IKUPTIK_JASA_PENYEDIA_MAKANAN_DAN_MINUMAN.b1093
        ],
        borderWidth: 1,
        backgroundColor: [
            "#7382ab",
            "#ffbc33",
            "#6f617f"
        ],
    }]
    },
    options: {
        scales: {
            y: {
            beginAtZero: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Rata-rata IKUPTIK Berdasarkan Jenis Usaha Pariwisata'],
                font: {
                    size: 20
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
