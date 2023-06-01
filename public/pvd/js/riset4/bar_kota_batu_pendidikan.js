const barPendidikan1 = document.getElementById('chart-2');
const barPendidikan_1 = new Chart(barPendidikan1, {
    type: 'bar',
    data: {
    labels: [
        ['SMA/SMK Sederajat'],
        ['SD/MI/Sederajat'],
        ['SMP/MTS/Sederajat'],  
        ['D4/S1'],
        ['Tidak tamat SD'],
        ['D1/D2/D3'],
        ['S2/S3'],
    ],
    datasets: [{
        label: 'Jumlah',
        data: [
            tingkatPendidikan.tingkatPendidikan4,
            tingkatPendidikan.tingkatPendidikan2,
            tingkatPendidikan.tingkatPendidikan3,
            tingkatPendidikan.tingkatPendidikan6,
            tingkatPendidikan.tingkatPendidikan1,
            tingkatPendidikan.tingkatPendidikan5,
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
            x:{
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
                text : ['Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu Berdasarkan Tingkat Pendidikan'],
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
            },
        },
    },
    plugins: [ChartDataLabels]
});

