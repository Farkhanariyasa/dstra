const hu_scatterplot = document.getElementById("hu_scatterplot");

const hu_pencar = new Chart(hu_scatterplot, {
    type: "scatter",
    data: {
        datasets: [
        {
            label: "Scatter Dataset",
            data: [
            {
                x: 10,
                y: 0,
            },
            {
                x: 0,
                y: 10,
            },
            {
                x: 10,
                y: 5,
            },
            {
                x: 0.5,
                y: 5.5,
            },
            ],
            backgroundColor: ["#ffab00", "#506396", "#c27d90"],
            hoverOffset: 4,
        },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
        title: {
            display: true,
            text: "Hubungan Jumlah Perjalanan Wisata dan Usia Wisatawan di Kota Malang Oktober-Desember 2022",
            font: {
            size: 18,
            },
            align: "center",
        },
        // datalabels: {
        //   anchor: "center",
        //   align: "center",
        //   offset: 150,
        //   color: "black",
        //   font: {
        //     size: 14,
        //   },
        // },
        },
    },
    // plugins: [ChartDataLabels],
});
