const pt_barhorizontal = document.getElementById("pt_barhorizontal");

const pt_bar = new Chart(pt_barhorizontal, {
    type: "bar",
    data: {
        labels: [
        "S2/S3",
        "D4/S1",
        "D1/D2/D3",
        "SMA/MA/SMK/Setara",
        "SMP/MTs/Setara",
        "SD/MI/Setara",
        "Tidak/Belum Sekolah/Tidak Tamat SD/MI",
        ],
        datasets: [
        {
            label: "Jumlah Wisatawan",
            data: [
            datapendidikantertinggi_riset2.pt_21,
            datapendidikantertinggi_riset2.pt_22,
            datapendidikantertinggi_riset2.pt_23,
            datapendidikantertinggi_riset2.pt_24,
            datapendidikantertinggi_riset2.pt_25,
            datapendidikantertinggi_riset2.pt_26,
            datapendidikantertinggi_riset2.pt_27,
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
            max: 25,
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
            text: "Tingkat Pendidikan",
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
            text: "Sebaran Penduduk yang Melakukan Perjalanan Wisata berdasarkan Tingkat Pendidikan Terakhir yang Ditamatkan",
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
