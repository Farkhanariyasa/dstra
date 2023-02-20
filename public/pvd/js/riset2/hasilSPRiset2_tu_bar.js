const tu_bar = document.getElementById("tu_bar");

const batang_tu = new Chart(tu_bar, {
    type: "bar",
    data: {
        labels: [
        "Berlibur/Rekreasi",
        "Mengunjungi Teman/Keluarga",
        "Pendidikan/Pelatihan",
        "Belanja",
        "Profesi/Bisnis",
        "Olahraga/Kesenian",
        ],
        datasets: [
        {
            label: "Jumlah Wisatawan",
            data: [
            datatujuanutama.tu1,
            datatujuanutama.tu7,
            datatujuanutama.tu4,
            datatujuanutama.tu10,
            datatujuanutama.tu2,
            datatujuanutama.tu9,
            ],
            borderWidth: 1,
            backgroundColor: ["#ffab00"],
        },
        ],
    },
    options: {
        indexAxis: "y",
        responsive: true,
        scales: {
        x: {
            beginAtZero: true,
            // max: 25,
            title: {
            display: true,
            text: "Jumlah Wisatawan",
            font: {
                size: 12,
                style: "normal",
                lineHeight: 2,
            },
            },
            grid: {
            display: false,
            },
        },
        y: {
            title: {
            display: true,
            text: "Tujuan Utama",
            font: {
                size: 12,
                style: "normal",
                lineHeight: 2,
            },
            },
            grid: {
            display: false,
            },
        },
        },
        maintainAspectRatio: false,
        plugins: {
        title: {
            display: true,
            text: "Sebaran Penduduk yang melakukan Perjalanan Wisata berdasarkan Tujuan Utama",
            font: {
            size: 14,
            },
        },
        datalabels: {
            anchor: "center",
            align: "center",
            offset: -20,
            color: "black",
        },
        },
    },
    plugins: [ChartDataLabels],
});