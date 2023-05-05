let delayed3;
// Chart
const t1_twowaybar = document.getElementById("t1_twowaybar");
const batang_duaarah = new Chart(t1_twowaybar, {
    type: "bar",
    data: {
        labels: ["Blimbing", "Kedungkandang", "Klojen", "Lowokwaru", "Sukun"],
        datasets: [
            {
                label: "Ke Objek Wisata",
                data: [2377, 3359, 4290, 2296, 1822],
                borderWidth: 1,
                backgroundColor: "#ffab00",
            },
            {
                label: "Menginap di Akomodasi Komersial",
                data: [43, 47, 127, 80, 34],
                borderWidth: 1,
                backgroundColor: "#B35C74",
            },
            {
                label: "Menuju ke Kecamatan Lain",
                data: [2114, 1797, 2518, 3449, 1451],
                borderWidth: 1,
                backgroundColor: "#4B395F",
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
                    size: 16,
                    style: "normal",
                    lineHeight: 2,
                },
                },
                grid: {
                display: false,
                },
            },
            y: {
                beginAtZero: true,
                title: {
                display: true,
                text: "Jumlah Perjalanan",
                font: {
                    size: 16,
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
                display: false,
            },
            title: {
                display: true,
                text: ["Estimasi Jumlah Perjalanan menurut Kecamatan Asal Wisatawan dan", "Tujuan Utama Perjalanan di Kota Malang Oktober-Desember 2022"],
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
