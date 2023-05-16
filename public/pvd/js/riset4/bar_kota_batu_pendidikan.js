const barPendidikan1 = document.getElementById('bar-kota-batu-pendidikan');
const barPendidikan_1 = new Chart(barPendidikan1, {
    type: 'bar',
    data: {
    labels: [
        ['Tidak tamat SD'], 
        ['SD/MI/Sederajat'],
        ['SMP/MTS/Sederajat'], 
        ['SMA/SMK Sederajat'],
        ['D1/D2/D3'], 
        ['D4/S1'],
        ['S2/S3'],
    ],
    datasets: [{
        label: 'Jumlah',
        data: [
            tingkatPendidikan.tingkatPendidikan1,
            tingkatPendidikan.tingkatPendidikan2,
            tingkatPendidikan.tingkatPendidikan3,
            tingkatPendidikan.tingkatPendidikan4,
            tingkatPendidikan.tingkatPendidikan5,
            tingkatPendidikan.tingkatPendidikan6,
            tingkatPendidikan.tingkatPendidikan7,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00", "#506396",
            "#4b395f", "#b35c74",
            "#ffbc33", "#7382ab",
            "#6f617f", "#c27d90"
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
                text : ['Pemilik atau Pengelola Unit Usaha Pariwisata Berdasarkan Tingkat Pendidikan'],
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

