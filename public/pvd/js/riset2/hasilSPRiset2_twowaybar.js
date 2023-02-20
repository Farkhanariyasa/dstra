// Chart
const container = document.getElementById("container");
const container_bar = new Chart(container, {
    type: "bar",
    data: {
        labels: ["Laki-laki", "Perempuan"],
        datasets: [
        {
            label: "Jumlah Wisatawan",
            data: [300, 500],
            borderWidth: 1,
            backgroundColor: "#ffab00",
        },
        {
            label: "Jumlah Wisatawan",
            data: [300, 500],
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
            text: "Jumlah Wisatawan",
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
            text: "Sebaran Penduduk yang Melakukan Perjalanan Wisata berdasarkan Jenis Kelamin",
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