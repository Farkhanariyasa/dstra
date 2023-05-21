const data = {
    labels: ['Laki-laki', 'Perempuan'],
    datasets: [{
      label: 'Usia Pemilik UUP',
      data: [
        [20, 40], 
        [30, 60],
    ],
      backgroundColor: [
        "#ffab00", "#506396",
        "#4b395f", "#b35c74",
        "#ffbc33", "#7382ab",
        "#6f617f", "#c27d90"
      ],
      borderColor: [
        "#ffab00", "#506396",
        "#4b395f", "#b35c74",
        "#ffbc33", "#7382ab",
        "#6f617f", "#c27d90"
      ],
      barPercentage: 0.75
    }]
  };

  // config 
  const config = {
    type: 'bar',
    data,
    options: {
      indexAxis: 'y',
      scales: {
        x: {
            min:10,
            max: 90
        },
        y: {
          beginAtZero: true
        }
      },
      maintainAspectRatio: false,
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
            display: true,
            text : ['Rentang Usia Pemilik Unit Usaha Pariwisata di Kota Batu'],
            font: {
                size: 18
            }
        },
        subtitle: {
            display: true,
            text : ['Berdasarkan Jenis Kelamin'],
            font: {
                size: 16,
                weight: 'bold'
            }
        },
        legend:{
            display: false,
            position: 'right',
        },
        tooltip: {
            callbacks: {
                title: (context) => {
                    console.log(context[0].label);
                    return context[0].label.replaceAll(',',' ');
                }
            }
        }
      },
    }
  };
    // render init block
    const myChart = new Chart(
        document.getElementById('gantt-kota-batu-jk-usia'),
        config
      );
  
      // Instantly assign Chart.js version
      const chartVersion = document.getElementById('chartVersion');
      chartVersion.innerText = Chart.version;