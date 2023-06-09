let delayed3;
// Chart
const t1_twowaybar = document.getElementById("riset2_t1_hasil2");
const batang_duaarah = new Chart(t1_twowaybar, {
    type: "bar",
    data: {
        labels: ["Blimbing", "Kedungkandang", "Klojen", "Lowokwaru", "Sukun"],
        datasets: [
            {
                label: "Ke Objek Wisata",
                data: [52.59, 64.59, 63.32, 40.22, 54.72],
                borderWidth: 1,
                backgroundColor: "#ffab00",
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    offset: 1,
                    font: {
                        size: 10
                    }
                }
            },
            {
                label: "Menginap di Akomodasi Komersial",
                data: [0.91, 0.95, 1.93, 1.4, 1.03],
                borderWidth: 1,
                backgroundColor: "#B35C74",
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    offset: 1,
                    font: {
                        size: 10
                    }
                }
            },
            {
                label: "Menuju ke Kecamatan Lain",
                data: [46.5, 34.46, 34.76, 58.39, 44.25],
                borderWidth: 1,
                backgroundColor: "#4B395F",
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    offset: 1,
                    font: {
                        size: 10
                    }
                }
            },
        ],
    },
    options: {
        animation: {
            onComplete: () => {
                delayed3 = true;
            },
            delay: (context) => {
                let delay = 0;
                if (context.type === "data" && context.mode === "default" && !delayed3) {
                delay = context.dataIndex * 300 + context.datasetIndex * 100;
                }
                return delay;
            },
        },
        responsive: true,
        scales: {
            x: {
                title: {
                display: true,
                text: "Kecamatan Asal",
                font: {
                    size: 14,
                    style: "normal",
                    lineHeight: 2,
                },
                },
                grid: {
                display: false,
                },
                ticks: {
                    font: {
                        size: 9
                    }
                }
            },
            y: {
                beginAtZero: true,
                title: {
                display: true,
                text: "Jumlah Perjalanan (%)",
                font: {
                    size: 14,
                    style: "normal",
                    lineHeight: 2.5,
                },
                },
                grid: {
                display: false,
                },
            },
        },
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                // font: {
                //     size: 12
                // }
            },
            title: {
                display: true,
                text: ["Estimasi Jumlah Perjalanan menurut","Kecamatan Asal Wisatawan dan Kategori", "Utama Perjalanan di Kota Malang", "Oktober-Desember 2022"],
                font: {
                    // size: 20,
                    size: 16,
                    style: "normal",
                },
                align: "center",
                color: "black",
            },
            datalabels: {
                anchor: "center",
                align: "center",
                offset: 150,
                color: "black",
                font: {
                size: 14,
                },
            },
        },
    },
    plugins: [ChartDataLabels],
});

const barChartLegend = document.getElementById("forBarChartLegend");
barChartLegend.addEventListener("click", update_value2(chk_bx));

function update_value2(chk_bx) {
    if (chk_bx.checked) {
        console.log("check");
        batang_duaarah.options.plugins.legend.display = true;
        batang_duaarah.update();
    } else {
        console.log("uncheck");
        batang_duaarah.options.plugins.legend.display = false;
        batang_duaarah.update();
    }
}
