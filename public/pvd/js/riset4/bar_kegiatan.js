const barPemanfaatan10 = document.getElementById('chart-10');
const barPemanfaatan_10 = new Chart(barPemanfaatan10, {
    type: 'bar',
    data: {
    labels: [
        ['Penjualan'], 
        ['Promosi'],
        ['Transaksi'], 
        ['Logistik'],
        ['Faktur/Tagihan'],
        ['Pencatatan Keuangan'],
        ['Manajemen Tenaga Kerja'],
        ['Perencanaan Keuangan'],
    ],
    datasets: [{
        label: 'Jumlah',
        data: [596, 546, 446, 327, 266, 174, 124, 111
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
                max: 800,
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
                }
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

