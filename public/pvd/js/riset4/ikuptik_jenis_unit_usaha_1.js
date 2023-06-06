const VIZ_1 = document.getElementById('viz-1');
new Chart(VIZ_1, {
    type: 'bar',
    data: {
    labels: [
        ['Jasa Transportasi Wisata'],
        ['Jasa Penyediaan Makanan dan Minuman'],
        ['Penyediaan Akomodasi'],
        ],
    datasets: [{
        label: 'Nilai IKUPTIK',
        data: [
            total.transportasi,
            total.makan,
            total.akomodasi,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00",
            "#b35c74",
            "#4b395f"
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
                text : ['Nilai IKUPTIK'],
                font: {
                    size: 20
                }
            },
            subtitle: {
                display: true,
                text : ['Berdasarkan Jenis Usaha Pariwisata di Kota Batu'],
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
