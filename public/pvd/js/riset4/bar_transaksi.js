const barPemanfaatan19 = document.getElementById('chart-19');
const barPemanfaatan_19 = new Chart(barPemanfaatan19, {
    type: 'bar',
    data: {
    labels: [
        ['Transaksi Bank'], 
        ['E-wallet'],
        ['QRIS'],
        ['Pembayaran', 'dengan Kartu'],
        ['Lainnya']
    ],
    datasets: [{
        label: 'Jumlah',
        data: [319, 275, 85, 27, 5
        ],
        borderWidth: 1,
        backgroundColor: [
            "#506396", "#50639690",
            "#50639690", "#50639690",
            "#50639690", "#50639690",
            "#50639690", "#50639690",
            "#50639690", "#50639690",
        ],
    }]
    },
    options: {
        scales: {
            x:{
                max: 400,
                grid:{
                    display:false
                },
            },
            y:{           
                beginAtZero: true,
                grid:{
                    display:false
                },
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        indexAxis: 'y',
        elements: {
        bar: {
            borderWidth: 3,
        }
        },
        plugins: {
            title: {
                display: false,
                text : ['Pemanfaatan TIK pada Unit Usaha Pariwisata Berdasarkan Kegiatan Pemanfaatannya'],
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
                },
            },
            datalabels: {
                display: true,
                color: 'black',
                anchor: 'end',
                align: 'end',
            }
        },
    },
    plugins: [ChartDataLabels]
});

