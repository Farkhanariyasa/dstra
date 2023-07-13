const doughnut1 = document.getElementById('chart-1');
const doughnutLabel = {
    id: 'doughnutLabel',
    beforeDatasetsDraw(chart, args, pluginOptions){
        const {ctx, data} = chart;
        ctx.save();
        const xCoor = chart.getDatasetMeta(0).data[0].x;
        const yCoor = chart.getDatasetMeta(0).data[0].y;
        ctx.font = 'bold 16px sans-serif';
        ctx.fillStyle = 'black';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText('IKUPTIK', xCoor, yCoor);
    }
}

const backgroundColor = {
    id: 'customCanvasBackgroundColor',
    beforeDraw: (chart, args, options) => {
      const {ctx} = chart;
      ctx.save();
      ctx.globalCompositeOperation = 'destination-over';
      ctx.fillStyle = options.color || '#ffffff';
      ctx.fillRect(0, 0, chart.width, chart.height);
      ctx.restore();
    }
  };

function clickPieSlice(click){
    const slice = doughnut_1.getElementsAtEventForMode(click, 'nearest', {intersect: true}, true);
    if(slice.length){
        const pieSlice = slice[0];
        if(doughnut_1.config.data.datasets[pieSlice.datasetIndex].offset[pieSlice.index] === 10){
            doughnut_1.config.data.datasets[pieSlice.datasetIndex].offset = [10, 10, 10, 10, 10, 10];
            doughnut_1.config.data.datasets[pieSlice.datasetIndex].offset[pieSlice.index] = 50;
        } else{
            doughnut_1.config.data.datasets[pieSlice.datasetIndex].offset[pieSlice.index] = 10;
        }
        doughnut_1.update();
    }

    if(doughnut_1.config.data.datasets[0].offset[0] == 50){
        document.getElementById("ikuptik-explanation").innerHTML = "Dimensi <strong>Infrastruktur dan Konektivitas</strong> dalam <strong><i>enterprise e-readiness assessment model</i></strong> mengukur akses individu dan bisnis dalam menggunakan layanan telepon, <i>smartphone</i>, komputer, dan <i>e-transactions</i>. Selain itu, dimensi ini juga mengukur ketersediaan layanan internet.";
    }else if(doughnut_1.config.data.datasets[0].offset[1] == 50){
        document.getElementById("ikuptik-explanation").innerHTML = "Dimensi <strong>Penggunaan TIK</strong> dalam <strong><i>enterprise e-readiness assessment model</i></strong> merupakan dimensi yang mengukur kesiapan unit usaha dalam menerapkan teknologi informasi dan komunikasi untuk meningkatkan kinerja bisnis.";
    }else if(doughnut_1.config.data.datasets[0].offset[2] == 50){
        document.getElementById("ikuptik-explanation").innerHTML = "Dimensi <strong>Sumber Daya Manusia</strong> dalam <strong><i>enterprise e-readiness assessment model</i></strong> merupakan dimensi yang berhubungan dengan penilaian kesiapan pemanfaatan TIK dari sisi sumber daya manusia. Penilaian pada dimensi ini memberikan gambaran mengenai kemampuan individu dalam memanfaatkan TIK seperti mencari, mengakses, memanajemen, menganalisa, dan menggunakan informasi";
    }else if(doughnut_1.config.data.datasets[0].offset[3] == 50){
        document.getElementById("ikuptik-explanation").innerHTML = "Dimensi <strong>Manajemen Organisasi</strong> dalam <strong><i>enterprise e-readiness assessment model</i></strong> merupakan dimensi yang mengukur kesiapan unit usaha dari sisi manajemen strategi organisasinya. Menurut Bakry (2004), strategi merupakan komponen penting dalam penilaian e-readiness yang meliputi kepemimpinan TIK dan pengembangan TIK. Sementara itu, organisasi meliputi peraturan terkait dengan TIK, kerjasama TIK, dan manajemen TIK.";
    }else if(doughnut_1.config.data.datasets[0].offset[4] == 50){
        document.getElementById("ikuptik-explanation").innerHTML = "Dimensi <strong>Ketersediaan Prasarana TIK</strong> dalam <strong><i>enterprise e-readiness assessment model</i></strong> merupakan dimensi yang mengukur kesiapan unit usaha dalam pemanfaatan TIK dari sisi ketersediaan prasarana TIK.";
    }else if(doughnut_1.config.data.datasets[0].offset[5] == 50){
        document.getElementById("ikuptik-explanation").innerHTML = "Dimensi <strong>Motivasi Penggunaan TIK</strong> dalam <strong><i>enterprise e-readiness assessment model</i></strong> menunjukkan bagaimana suatu enterprise menyikapi penggunaan TIK apakah membantu hal tersebut dianggap dapat meningkatkan kegiatan usaha mereka atau sebaliknya.";
    }else{
        document.getElementById("ikuptik-explanation").innerHTML = "Dalam riset ini, <strong><i>enterprise e-readiness assessment model</i></strong> digunakan untuk menilai kesiapan unit usaha pariwisata dalam pemanfaatan TIK, sehingga indeks yang dihasilkan disebut <strong>Indeks Kesiapan Unit Usaha Pariwisata dalam Pemanfaatan TIK</strong> atau dapat disingkat menjadi <strong>IKUPTIK</strong>. Model yang digunakan terdiri dari enam dimensi, yaitu <strong>Infrastruktur dan Konektivitas</strong>, <strong>Penggunaan TIK</strong>, <strong>Sumber Daya Manusia</strong>, <strong>Manajemen Organisasi</strong>, <strong>Ketersediaan Prasarana TIK</strong>, dan <strong>Motivasi Penggunaan TIK</strong>.";
    }
}

doughnut1.onclick = clickPieSlice;
const doughnut_1 = new Chart(doughnut1, {
    type: 'doughnut',
    data: {
        labels: [],
        datasets: [{
            label: 'Jumlah Unit Usaha Pariwisata',
            data: [1000.001, 1000.002, 1000.003, 1000.004, 1000.005, 1000.006],
            borderwidth: 1,
            offset: [10, 10, 10, 10, 10, 10],
            cutout: "30%",
            backgroundColor: [
                "#ffab00", "#506396",
                "#4b395f", "#ffab00", 
                "#506396", "#4b395f"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            customCanvasBackgroundColor: {
                color: '#ffffff',
            },
            title: {
                display: false,
                text : ['Persentase Unit Usaha Pariwisata di Kota Batu'],
                font: {
                    size: 16
                }
            },
            subtitle: {
                display: false,
                text : ['Berdasarkan Jenis Usaha Pariwisata'],
                font: {
                    size: 16,
                    weight: 'bold',
                }
            },
            legend:{
                display: false,
                title: {
                    display: false,
                    text : 'Kategori',
                },
                position: 'bottom',
                align: 'start',
            },
            tooltip:{
                enabled: false,
                callbacks: {
                    label: function(context){
                        var label = context.label,
                            currentValue = context.raw,
                            my_total = context.chart._metasets[context.datasetIndex].total;
              
                        var percentage = parseFloat((currentValue/my_total*100).toFixed(2));
                        my_id = Math.round((currentValue-1000)*1000);

                        return "Klik untuk detail!"
                    }
                }
            },
            datalabels: {
                display: true,
                color: 'black',
                align: 'center',
                formatter: function(value, context) {
                    my_id = Math.round((value-1000)*1000);
                    if(my_id == 1){
                        return 'Infrastruktur\ndan\nKonektivitas';
                    }else if(my_id == 2){
                        return 'Penggunaan\nTIK';                            
                    }else if(my_id == 3){
                        return 'Sumber\nDaya\nManusia';
                    }else if(my_id == 4){
                        return 'Manajemen\nOrganisasi';
                    }else if(my_id == 5){
                        return 'Ketersediaan\nPrasarana\nTIK';
                    }else if(my_id == 6){
                        return 'Motivasi\nPenggunaan\nTIK';
                    }else{
                        return 'Error';
                    }
                }
            }
        },
    },
    plugins: [doughnutLabel, ChartDataLabels, backgroundColor],
});

// Instantly assign Chart.js version
const chartVersion = document.getElementById('chart-1');
chartVersion.innerText = Chart.version;