let delayed_fg_dasbor;
const fg_dasbor = document.getElementById("fg_dasbor");
const bubble_fg_dasbor = new Chart(fg_dasbor, {
  type: "bubble",
  data: {
    labels: ["Jarak Terdekat Staypoint", "H3 Tanpa Staypoint", "H3 Dengan Staypoint", "Frechet Distance", "DTW"],
    datasets: [
      {
        label: "(x, y, r)",
        data: [
            {   
                label: "0.4",
                x: 1,
                y: 0.4,
                r: 18
            },
            {
                label: "0.31",
                x: 2,
                y: 0.31,
                r: 6
            },
            {
                label: "0.88", 
                x: 3,
                y: 0.88,
                r: 15
            },
            {
                label: "0.05",
                x: 4,
                y: 0.05,
                r: 30
            },
            {
                label: "0.08 ",
                x: 5,
                y: 0.08,
                r: 25
            },




        ],
        backgroundColor: ["#516296"],
        borderWidth: 1,
        borderRadius: 8,
      },
      
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    animation: {
      onComplete: () => {
        delayed_fg_dasbor = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg_dasbor) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        min: 0,
        beginAtZero: true,
        ticks: {
            stepSize: 1,
            display: true,
            callback: function(value, index, values) {
                if(index === 5) {
                    return ["DTW"];
                } else if(index === 4) {
                    return ["Frechet","Distance"]; 
                } else if(index === 3) {
                    return ["H3" ,"Dengan","Staypoint"];
                } else if(index === 2) {
                    return ["H3", "Tanpa", "Staypoint"];
                } else if(index === 1) {
                    return ["Jarak", "Terdekat", "Staypoint"];
                } else {
                    return "";
                }
            },
        },
        grid: {
            display: false,
        },
        title: {
            display: true,
            text: "Jenis Algoritma",
            
        },  
      },
      y: {
        beginAtZero: true,
        min: 0,
        max: 1,
        ticks: {
            stepSize: 0.2
        },
        title: {
            display: true,
            text: "F1-Score True FG",
        },
        grid: {
            display: false,

        },
    },
    }, 
    plugins: {
      title: {
        display: true,
        text: ["Visualisasi Kombinasi Algoritma Berdasarkan", "F1Score (yes) dan Waktu Running"],
        font: {
          size: 16,
          // family: "Poppins",
        },
        color: "#493a5a", 
        padding: {
          top: 5,
          bottom: 25,
          right: 10,
          left: 10,
        },
      },
      legend: {
        display: false,
        position: "bottom",
      },
      tooltip: {
        enabled: true,
        callbacks: {
          label: function (tooltipItem) {
            if(tooltipItem.dataIndex == 0){
              return "Waktu (menit/msisdn): 1,49"
            } else if(tooltipItem.dataIndex == 1){
              return "Waktu (menit/msisdn): 0.332"
            } else if(tooltipItem.dataIndex == 2){
              return "Waktu (menit/msisdn): 1.32"
            } else if(tooltipItem.dataIndex == 3){
              return "Waktu (menit/msisdn): 22.14"
            } else if(tooltipItem.dataIndex == 4){
              return "Waktu (menit/msisdn): 15.56"
            }
          },
        }
      },
      datalabels: {
        display: true,
        font: {
          size: 11,
        },
        color: "black",
        anchor: 'center',
        align: 'center',
      },
    },
    maintainAspectRatio: false,
  },
  plugins: [ChartDataLabels],
});

function responsivefonts() {
  if (window.outerWidth < 414) {
    console.log(window.outerWidth);
    Chart.defaults.font.size = 5;
  }
  if (window.outerWidth < 380) {
    Chart.defaults.font.size = 1;
  }
}


