const pyramid1 = document.getElementById('chart-1');

// const laki = [3, 5, 6, 9, 15, 23, 29, 35, 40, 50];
const laki = [uupJkUsia.laki10,
                uupJkUsia.laki9,
                uupJkUsia.laki8,
                uupJkUsia.laki7,
                uupJkUsia.laki6,
                uupJkUsia.laki5,
                uupJkUsia.laki4,
                uupJkUsia.laki3,
                uupJkUsia.laki2,
                uupJkUsia.laki1,
            ];
const lakiData = [];
laki.forEach(element => lakiData.push(element * -1));
// console.log(lakiData);

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
            // data: [3, 5, 6, 9, 15, 23, 29, 35, 40, 50],
            data: [uupJkUsia.perempuan10,
                uupJkUsia.perempuan9,
                uupJkUsia.perempuan8,
                uupJkUsia.perempuan7,
                uupJkUsia.perempuan6,
                uupJkUsia.perempuan5,
                uupJkUsia.perempuan4,
                uupJkUsia.perempuan3,
                uupJkUsia.perempuan2,
                uupJkUsia.perempuan1,
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
                }
            },
            y: {
                beginAtZero: true,
                stacked: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Jumlah Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu'],
                font: {
                    size: 18
                }
            },
            subtitle: {
                display: true,
                text : ['Berdasarkan Jenis Kelamin dan Kelompok Usia'],
                font: {
                    size: 16,
                    weight: 'bold'
                }
            },
            legend:{
                display: true,
                position: 'bottom',
            },
            tooltip,
        },
    },
    // plugins: [ChartDataLabels]
});
