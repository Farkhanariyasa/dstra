const pyramid1 = document.getElementById('chart-1');

const laki = [(uupJkUsia.laki10/925*100).toFixed(2),
                (uupJkUsia.laki9/925*100).toFixed(2),
                (uupJkUsia.laki8/925*100).toFixed(2),
                (uupJkUsia.laki7/925*100).toFixed(2),
                (uupJkUsia.laki6/925*100).toFixed(2),
                (uupJkUsia.laki5/925*100).toFixed(2),
                (uupJkUsia.laki4/925*100).toFixed(2),
                (uupJkUsia.laki3/925*100).toFixed(2),
                (uupJkUsia.laki2/925*100).toFixed(2),
                (uupJkUsia.laki1/925*100).toFixed(2),
            ];

const lakiData = [];
laki.forEach(element => lakiData.push(element * -1));

const tooltip = {
    yAllign: 'bottom',
    titleAllign: 'center',
    callbacks: {
        label: function(context) {
            return `${context.dataset.label} ${Math.abs(context.raw)}`;
        }
    }
}

new Chart(pyramid1, {
    type: 'bar',
    data : {
        labels: ['60+', '55-59', '50-54', '45-49', '40-44', '35-39', '30-34', '25-29', '20-24', '15-19'],
        datasets: [{
            label: 'Laki-laki',
            data: lakiData,
            backgroundColor: "#ffab00",
            borderColor: "#ffab00",
            borderWidth: 1,
            borderRadius: 5,
            barPercentage: 1,
        },
        {
            label: 'Perempuan',
            data: [(uupJkUsia.perempuan10/925*100).toFixed(2),
                (uupJkUsia.perempuan9/925*100).toFixed(2),
                (uupJkUsia.perempuan8/925*100).toFixed(2),
                (uupJkUsia.perempuan7/925*100).toFixed(2),
                (uupJkUsia.perempuan6/925*100).toFixed(2),
                (uupJkUsia.perempuan5/925*100).toFixed(2),
                (uupJkUsia.perempuan4/925*100).toFixed(2),
                (uupJkUsia.perempuan3/925*100).toFixed(2),
                (uupJkUsia.perempuan2/925*100).toFixed(2),
                (uupJkUsia.perempuan1/925*100).toFixed(2),
            ],
            backgroundColor: "#506396",
            borderColor: "#506396",
            borderWidth: 0,
            borderRadius: 5,
            barPercentage: 1,
          }]
      },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                stacked: true,
                ticks: {
                    callback: function(value, index, values) {
                        return Math.abs(value);
                    }
                },
                title: {
                    display: false,
                    text: "Persentase (%)",
                    font: {
                      size: 12,
                    },
                },
                grid: {
                    display: false,
                },
            },
            y: {
                beginAtZero: true,
                stacked: true,
                grid: {
                    display: false,
                },
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        plugins: {
            title: {
                display: false,
                text : ['Persentase Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu'],
                font: {
                    size: 16
                }
            },
            subtitle: {
                display: false,
                text : ['Berdasarkan Jenis Kelamin dan Kelompok Usia'],
                font: {
                    size: 14,
                    weight: 'bold'
                }
            },
            legend:{
                display: true,
                title: {
                    display: false,
                    text : 'Kategori',
                },
                position: 'bottom',
                align: 'center',
            },
            tooltip,
        },
    },
});
