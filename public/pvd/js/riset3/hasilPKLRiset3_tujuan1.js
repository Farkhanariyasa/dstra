//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const tujuan1 = document.getElementById('tujuan1');
new Chart(tujuan1, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: '< 12 Bulan',
        data: [21.34, 36.61, 6.25, 26.13, 25.85, 13.85],
        backgroundColor: ["#ffab00"],
      },
      {
        label: '12-24 Bulan',
        data: [6.67, 8.93, 10, 10.81, 4.08, 10.77],
        backgroundColor: ["#506396"],
      },
      {
        label: '24-36 Bulan',
        data: [12, 4.46, 5, 8.11, 8.84, 10.77],
        backgroundColor: ["#b35c74"],
      },
      {
        label: '> 36 Bulan',
        data: [60, 50, 78.75, 54.95, 61.22, 64.62],
        backgroundColor: ["#4b395f"],
      },
      ]},
    options: {
    indexAxis: 'y',
    responsive:true,
    scales: {
        x: {
          stacked: true,
        },
        y: {
          stacked: true
        }  
     },
    plugins:{
        title: {
            display: false,
            // text : ["Persentase Tenaga Kerja di Industri Pariwisata", "Menurut Jenis Industri dan Lama Menekuni Pekerjaan"],
            font: {
                size: 18
            }
          },
        legend:{
            display: true,
            position: "right"
          },
        datalabels:{
            display:true,
            color:'black'
          },
      },
    maintainAspectRatio: false
    }, 
    plugins:[ChartDataLabels]
});


const barChart = document.getElementById('filterValue');
barChart.addEventListener('change', tampilData);
  
function tampilData(){
    // barChart.value.split(',');
    // tujuan1.data.datasets[0].data=barChart.value.split(',');
    // tujuan1.update();
    if (barChart.value =='T1_1') {
        console.log(barChart.value);
        tujuan1.data.datasets[0].data = 
            [   datajenisindustri.ji1,
                datajenisindustri.ji2,
                datajenisindustri.ji4,
                // datajenisindustri.ji7,
                // datajenisindustri.ji8,
                datajenisindustri.ji9,
                datajenisindustri.ji10,
                datajenisindustri.ji11,
            ];
            tujuan1.data.labels = [
                'jasa akomodasi',
                'jasa makan dan minum',
                'jasa angkutan darat',
                // 'jasa angkutan udara',
                // 'Agen perjalanan dan reservasi lainnya',
                'Jasa kebudayaan, olahraga dan rekreasi',
                'Aktivitas perdagangan barang-barang pariwisata',
                'jasa pariwisata lainnya'
            ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Industri';
            tujuan1.update();

    } if (barChart.value =='T1_2') {
            console.log(barChart.value);
            tujuan1.data.datasets[0].data = 
            [   
                datapendidikantertinggi.pt1,
                datapendidikantertinggi.pt2,
                datapendidikantertinggi.pt3,
                datapendidikantertinggi.pt4,
                datapendidikantertinggi.pt5,
                datapendidikantertinggi.pt6,
                datapendidikantertinggi.pt7,
                datapendidikantertinggi.pt8,
                datapendidikantertinggi.pt9
            ];
            tujuan1.data.labels = ['Tidak/belum pernah sekolah',
            'Tidak/belum SD',
            'SD/MI/SDLB/Paket A',
            'SMP/MTs/SMPLB/Paket B',
            'SMA/MA/SMLB/Paket C',
            'SMK/MAK',
            'Diploma I/II/III',
            'Diploma IV',
            'S1/S2/S3'
            ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Pendidikan Tertinggi ';
            tujuan1.update();

    } if (barChart.value =='T1_3') {
            console.log(barChart.value);
            tujuan1.data.datasets[0].data = 
            [   
                datajeniskelamin_riset3.jk_11,
                datajeniskelamin_riset3.jk_12
            ];
            tujuan1.data.labels = ['Laki-laki',
            'Perempuan'
            ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
            tujuan1.update();

    }
}