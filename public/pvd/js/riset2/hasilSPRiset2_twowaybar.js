// Chart
const twoway_bar = document.getElementById("twoway_bar");
const batang_duaarah = new Chart(twoway_bar, {
    type: "bar",
    data: {
        labels: ["Laki-laki", "Perempuan"],
        datasets: [
        {
            label: "Jumlah Wisatawan",
            data: [300, 400],
            borderWidth: 1,
            backgroundColor: "#ffab00",
        },
        {
            label: "Jumlah Bepergian",
            data: [200, 500],
            borderWidth: 1,
            backgroundColor: "#ffab00",
        },
        ],
    },
    options: {
        responsive: true,
        scales: {
        x: {
            title: {
            display: true,
            text: "Jenis Kelamin",
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
            text: "Jumlah",
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
            text: "Estimasi Jumlah Perjalanan menurut Kecamatan Asal Wisatawan di Kota Malang Bulan Oktober-Desember 2022",
            font: {
            size: 18,
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