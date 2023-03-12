// Chart
const jp_twowaybar = document.getElementById("jp_twowaybar");
const batang_duaarah = new Chart(jp_twowaybar, {
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
        responsive: true,
        scales: {
        x: {
            title: {
            display: true,
            text: "Kecamatan Asal",
            font: {
                size: 18,
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
                size: 18,
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
        title: {
            display: true,
            text: "Estimasi Jumlah Perjalanan menurut Kecamatan Asal Wisatawan dan Tujuan Utama Perjalanan di Kota Malang Oktober-Desember 2022",
            font: {
            size: 20,
            },
            align: "center",
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