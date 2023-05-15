const VIZ_3 = document.getElementById('viz-3');
new Chart(VIZ_3, {
    type: 'bar',
    data: {
    labels: [['Jasa Transportasi'],
            ['Jasa Penyedia Makanan dan Minuman'],
            ['Jasa Akomodasi']
        ],
    datasets: [{
        label: 'Rata-rata IKUPTIK',
        data: [
            IKUPTIK_JASA_AKOMODASI.jenis_usaha1,
            IKUPTIK_JASA_AKOMODASI.jenis_usaha2,
            IKUPTIK_JASA_AKOMODASI.jenis_usaha3
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
