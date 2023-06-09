//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio
// Palet warna
// 2 kategori: "#506396","#ffab00"
// 3 kategori: "#ffab00","#b35c74", "#506396"
// 4 kategori: "#4b395f","#b35c74", "#506396","#ffab00"
// 5 kategori: "#4b395f","#b35c74", "#506396","#96a1c0","#ffab00"
// ----- 6 kategori: "#4b395f","#b35c74", "#506396","#d19dac","#96a1c0","#ffab00"
// 7 kategori: "#4b395f","#b35c74", "#506396", "#93889f", "#d19dac","#96a1c0","#ffab00"
// 9 kategori: "#4b395f","#b35c74", "#506396","#ffab00","#7382ab", "#93889f", "#d19dac","#96a1c0","#ffdd99"
// const tujuan1 = document.getElementById('tujuan1');
const ctx = document.getElementById('tujuan1_1');
const tujuan1 =new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['KRT','Bukan KRT'],
    datasets: [
      {
        label: 'Penyediaan Jasa Akomodasi Bagi Wisatawan',
       
        data: [10.58,10.75],
        backgroundColor: ["#4b395f"],
      },
      {
        label:  'Penyediaan Jasa Makan dan Minum',
        data: [21.53,38.55],
        backgroundColor: ["#b35c74"],
      },
      {
        label:  'Penyediaan Jasa Angkatan Darat Untuk Penumpang',
        data: [20.8,5.37],
        backgroundColor: ["#506396"],
      },
      {
        label:  'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi',
        data: [19.71,13.32],
        backgroundColor: ["#d19dac"],
      },
      {
        label:'Aktivitas Perdagangan Barang-barang Pariwisata',
        data: [16.06,24.07],
        backgroundColor: ["#96a1c0"],
      },
      {
        label: 'Jenis Industri Lainnya',
        data: [11.31, 7.94],
        backgroundColor: ["#ffab00"],
      }
      ]},
    options: {
    indexAxis: 'y',
    responsive:true,
    scales: {
        x: {
          stacked: true,
          max: 100
        },
        y: {
          stacked: true
        }  
     },
    plugins:{
        title: {
            display: true,
            text : ["Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Hubungan dengan KRT"],
            font: {
                size: 18
            }
          },
        legend:{
            display: true,
            position: "bottom"
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
    if (barChart.value == 'T1_1') {
        console.log(barChart.value);

        tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
        tujuan1.data.datasets[0].data = [10.58,10.75];
        tujuan1.data.datasets[0].barThickness= 150,

        tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
        tujuan1.data.datasets[1].data = [21.53,38.55];
        tujuan1.data.datasets[1].barThickness= 150,

        tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
        tujuan1.data.datasets[2].data = [20.8,5.37];
        tujuan1.data.datasets[2].barThickness= 150,

        tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
        tujuan1.data.datasets[3].data = [19.71,13.32];
        tujuan1.data.datasets[3].barThickness= 150,

        tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
        tujuan1.data.datasets[4].data =  [16.06,24.07];
        tujuan1.data.datasets[4].barThickness= 150,

        tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
        tujuan1.data.datasets[5].data = [11.31, 7.94];  
        tujuan1.data.datasets[5].barThickness= 150, 
        
        tujuan1.data.labels = [
            'KRT','Bukan KRT'
        ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Hubungan dengan KRT';
            tujuan1.update();
            
          } if (barChart.value =='T1_2') {
            console.log(barChart.value);
            tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
            tujuan1.data.datasets[0].data = [0.00,4.35,12.80,10.81,12.68,11.27,6.35,6.67,16.13,6.25,0.00,25.81];
            tujuan1.data.datasets[0].barThickness= 30,

            tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
            tujuan1.data.datasets[1].data = [50.00,50.00,36.80,27.93,26.76,25.35,26.98,26.67,38.71,50.00,28.57,16.13];
            tujuan1.data.datasets[1].barThickness= 30,

            tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
            tujuan1.data.datasets[2].data = [0.00,0.00,3.20,10.81,12.68,14.08,17.46,16.67,12.90,6.25,28.57,19.35];
            tujuan1.data.datasets[2].barThickness= 30,

            tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
            tujuan1.data.datasets[3].data = [50.00,26.09,16.80,13.51,11.27,14.08,22.22,25.00,8.06,12.50,3.57,16.13];
            tujuan1.data.datasets[3].barThickness= 30,

            tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[4].data =  [0.00,19.57,22.40,20.72,23.94,22.54,14.29,23.33,14.52,21.88,35.71,16.33];
            tujuan1.data.datasets[4].barThickness= 30,

            tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[5].data =  [0.00,0.00,8.00,16.22,12.68,12.68,12.70,1.67,9.68,3.13,3.57,6.45];
            tujuan1.data.datasets[5].barThickness= 30,    
            tujuan1.data.labels = [
                '<15',
                '15-19',
                '20-24',
                '25-29',
                '30-34',
                '35-39',
                '40-44',
                '45-49',
                '50-54',
                '55-59',
                '60-64',
                '65+',
            ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Usia ';
            tujuan1.update();

    } if (barChart.value =='T1_3') {
            console.log(barChart.value);

            tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
            tujuan1.data.datasets[0].data = [10.40, 11.54, 8.96, 3.33, 25.81];
            tujuan1.data.datasets[0].barThickness= 70 
      
            tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
            tujuan1.data.datasets[1].data = [40.46, 27.47, 26.12, 40.00, 16.13];
            tujuan1.data.datasets[1].barThickness= 70
      
            tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
            tujuan1.data.datasets[2].data = [2.31, 11.54, 15.67, 16.67, 19.35];
            tujuan1.data.datasets[2].barThickness= 70 
      
            tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
            tujuan1.data.datasets[3].data = [19.65, 12.64, 17.91, 8.33, 16.13];
            tujuan1.data.datasets[3].barThickness= 70 
      
            tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[4].data =  [21.39, 21.98, 18.66, 28.33, 16.13];
            tujuan1.data.datasets[4].barThickness= 70 
      
            tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[5].data = [5.78, 14.84, 12.69, 3.33, 6.45]; 
            tujuan1.data.datasets[5].barThickness=70  
            
            tujuan1.data.labels = [
              'Dibawah 15 dan 15 - 24',
              '25 - 34',
              '35 - 44',
              '55 - 64',
              '65 +',
            ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Status Perkawinan';
            tujuan1.update();

    } if (barChart.value =='T1_4') {
      console.log(barChart.value);
      
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [10.22	,10.85];
      tujuan1.data.datasets[0].barThickness= 150,

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [37.63,	29.84];
      tujuan1.data.datasets[1].barThickness= 150,

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [6.99	,12.98];
      tujuan1.data.datasets[2].barThickness= 150,

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [16.67	,15.50];
      tujuan1.data.datasets[3].barThickness= 150,

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [ 20.97	,20.93];
      tujuan1.data.datasets[4].barThickness= 150,

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [7.53	,9.88]; 
      tujuan1.data.datasets[5].barThickness= 150

      tujuan1.data.labels = [
        'Belum Kawin',
        'Pernah Kawin',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kelamin';
      tujuan1.update();
    } if (barChart.value =='T1_5') {
      console.log(barChart.value);
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [10.74,10.60];
      tujuan1.data.datasets[0].barThickness= 150,

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [24.82,42.40];
      tujuan1.data.datasets[1].barThickness= 150,

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [18.38,1.06];
      tujuan1.data.datasets[2].barThickness= 150,

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [19.09, 10.95];
      tujuan1.data.datasets[3].barThickness= 150,

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data = [15.99,28.27];
      tujuan1.data.datasets[4].barThickness= 150,

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [10.98,6.71];
      tujuan1.data.datasets[5].barThickness= 150
      
      tujuan1.data.labels = [
        'Laki-laki',
        'Perempuan',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja di Industri Pariwisata menurut Jenis Industri dan Jumlah Pendapatan';
      tujuan1.update();
    } if (barChart.value =='T1_6') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [12.56, 8.77, 12.71, 9.22];
      tujuan1.data.datasets[0].barThickness= 100;

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [39.07, 33.33, 19.49, 29.08];
      tujuan1.data.datasets[1].barThickness= 100;

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [9.30, 10.96, 13.56, 13.48];
      tujuan1.data.datasets[2].barThickness= 100;

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [12.56, 18.86, 20.34, 12.06];
      tujuan1.data.datasets[3].barThickness= 100;

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [17.21, 19.30, 25.42, 25.53];
      tujuan1.data.datasets[4].barThickness= 100;

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [ 9.30, 8.77, 8.47, 10.64]; 
      tujuan1.data.datasets[5].barThickness=100;

      tujuan1.data.labels = [
        '< Rp1.500.000',
        'Rp1.500.000 - Rp2.500.000',
        'Rp2.500.000 - Rp3.500.000',
        '> Rp3.500.000',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet';
      tujuan1.update();
    } if (barChart.value =='T1_7') {
      console.log(barChart.value);
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [13.62, 4.74];
      tujuan1.data.datasets[0].barThickness= 150,

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [25.53, 44.83];
      tujuan1.data.datasets[1].barThickness= 150,

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [14.26, 5.60];
      tujuan1.data.datasets[2].barThickness= 150,

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [20.21, 6.90];
      tujuan1.data.datasets[3].barThickness= 150,

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [14.89, 33.19];
      tujuan1.data.datasets[4].barThickness= 150,

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [11.49, 4.74]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Promosi';
      tujuan1.update();
    } if (barChart.value =='T1_8') {
      

      console.log(barChart.value);
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [14.55, 9.78, 4.74];
      tujuan1.data.datasets[0].barThickness= 150,

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [23.81, 32.61, 44.83];
      tujuan1.data.datasets[1].barThickness= 150,

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [14.29, 14.13, 5.60];
      tujuan1.data.datasets[2].barThickness= 150,

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [23.28, 7.61, 6.90];
      tujuan1.data.datasets[3].barThickness= 150,

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [12.70, 23.91, 33.19];
      tujuan1.data.datasets[4].barThickness= 150,

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [11.38, 11.96, 4.74]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
        'Tidak Menggunakan'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Komunikasi';
      tujuan1.update();
    

    }if (barChart.value =='T1_9') {
      console.log(barChart.value);
      


      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [13.73, 9.09, 4.74];
tujuan1.data.datasets[0].barThickness= 150,

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [25.49, 27.27, 44.83];
      tujuan1.data.datasets[1].barThickness= 150,

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [14.60, 0.00, 5.60];
      tujuan1.data.datasets[2].barThickness= 150,

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [20.26, 18.18, 6.90];
      tujuan1.data.datasets[3].barThickness= 150,

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [14.38, 36.36, 33.19];
      tujuan1.data.datasets[4].barThickness= 150,

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [  11.55, 9.09, 4.74]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
        'Tidak Menggunakan'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Transaksi Barang/Jasa';
      tujuan1.update();
    
    } if (barChart.value =='T1_10') {
      console.log(barChart.value);
      


      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [15.34, 9.16, 4.74];
tujuan1.data.datasets[0].barThickness= 150,

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [22.71, 32.82, 44.83];
      tujuan1.data.datasets[1].barThickness= 150,

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [15.04, 12.21, 5.60];
      tujuan1.data.datasets[2].barThickness= 150,

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [19.76, 21.37, 6.90];
      tujuan1.data.datasets[3].barThickness= 150,

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [15.34, 13.74, 33.19];
      tujuan1.data.datasets[4].barThickness= 150,

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [11.80, 10.69, 4.74]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
        'Tidak Menggunakan'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Keinginan untuk Menambah Pekerjaan';
      tujuan1.update();
    }if (barChart.value =='T1_11') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [8.04, 12.50];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [26.22, 35.82];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [16.43, 7.93];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [18.18, 14.18];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [19.23, 22.12];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [11.89, 7.45];
      tujuan1.data.datasets[5].barThickness= 150
     
      tujuan1.data.labels = [
        'Ya',
        'Tidak'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata menurut Industri Pariwisata dan Status Pekerjaan Utama';
      tujuan1.update();
    } if (barChart.value =='T1_12') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [9.86, 17.81];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [32.75, 24.66];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [10.81, 16.44];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [15.90, 15.07];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [22.10, 10.96];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [8.59, 15.07];
      tujuan1.data.datasets[5].barThickness= 150
     
      tujuan1.data.labels = [
        'Ya',
        'Tidak'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Lama Bekerja';
      tujuan1.update();
    } if (barChart.value =='T1_13') {
      console.log(barChart.value);

      
      tujuan1.data.datasets[0].data = [10.38, 10.90]; 
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [38.75, 27.12];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [5.88, 15.25];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [17.30, 14.77];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [19.72, 21.79];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [7.96, 10.17];
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        '<=36',
        '>36',
        
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan Sebelumnya';
      tujuan1.update();
    } if (barChart.value =='T1_14') {
      console.log(barChart.value);
      
      tujuan1.data.datasets[0].data = [9.30, 10.99];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [35.66, 31.06];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [6.20, 12.57];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [17.05, 15.53];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [22.48, 20.59];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [9.30, 9.25];
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan di Sektor Pariwisata Sebelumnya';
      tujuan1.update();
    } if (barChart.value =='T1_15') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [9.52, 10.76];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [35.71, 31.67];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [0.00, 12.12];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [19.05, 15.61];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [21.43, 20.91];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [14.29, 8.94];
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='T1_15';
      tujuan1.update();
    } if (barChart.value =='T1_16') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [14.22, 9.16];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [24.17, 35.23];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [ 13.27, 10.59];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [18.48, 14.66];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [14.69, 23.63];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [15.17, 6.72];
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='T1_16';
      tujuan1.update();
    } if (barChart.value =='T1_17') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [11.80, 22.00];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [18.63, 42.00];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [16.77, 2.00];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [22.36, 6.00];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [13.04, 20.00];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [17.39, 8.00];
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Laki-laki',
        'Perempuan'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='T1_17';
      tujuan1.update();
    } if (barChart.value =='T1_18') {
      console.log(barChart.value);


      tujuan1.data.datasets[0].data = [10.17, 15.79];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [25.42, 23.68];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [16.95, 11.84];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [20.34, 17.76];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [11.86, 15.79];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [15.25, 15.13];
                  tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        'Ya',
        'Tidak'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='T1_18';
      tujuan1.update();
    }if (barChart.value =='T1_19') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [0.00, 25.00, 10.34, 4.76, 11.11, 19.35, 25.00, 0.00, 0.00];
      tujuan1.data.datasets[0].barThickness= 40;
      tujuan1.data.datasets[1].data = [0.00, 25.00, 24.14, 38.10, 20.00, 48.39, 25.00, 0.00, 20.00];
      tujuan1.data.datasets[1].barThickness= 40;
      tujuan1.data.datasets[2].data = [100.00, 25.00, 17.24, 11.90, 22.22, 9.68, 0.00, 0.00, 20.00];
      tujuan1.data.datasets[2].barThickness= 40;
      tujuan1.data.datasets[3].data = [0.00, 0.00, 31.03, 28.57, 22.22, 12.90, 25.00, 0.00, 40.00];
      tujuan1.data.datasets[3].barThickness= 40;
      tujuan1.data.datasets[4].data = [0.00, 25.00, 13.79, 11.90, 17.78, 9.68, 12.50, 0.00, 0.00];
      tujuan1.data.datasets[4].barThickness= 40;
      tujuan1.data.datasets[5].data = [0.00, 0.00, 3.45, 4.76, 6.67, 0.00, 12.50, 100.00, 20.00];
      tujuan1.data.datasets[5].barThickness=40;
      tujuan1.data.labels = [
         "Tidak/Belum Pernah Sekolah", 
         "Tidak/Belum SD",
         "SD/MI/SDLB/Paket A",
         "SMP/MTS/SMPLB/Paket B", 
         "SMA/MA/SMALB/Paket C", 
         "SMK/MAK", 
         "Diploma I/II/III", 
         "Diploma IV", 
         "S1/S2/S3"
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='T1_19';
      tujuan1.update();
    }if (barChart.value =='T1_20') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [20.00, 10.34, 4.76, 11.11, 25.00];
      tujuan1.data.datasets[0].barThickness= 40
      tujuan1.data.datasets[1].data = [20.00, 24.14, 38.10, 20.00, 25.00];
      tujuan1.data.datasets[1].barThickness= 40
      tujuan1.data.datasets[2].data = [40.00, 17.24, 11.90, 22.22, 0.00];
      tujuan1.data.datasets[2].barThickness= 40
      tujuan1.data.datasets[3].data = [0.00, 31.03, 28.57, 22.22, 25.00];
      tujuan1.data.datasets[3].barThickness= 40
      tujuan1.data.datasets[4].data = [20.00, 13.79, 11.90, 17.78, 12.50];
      tujuan1.data.datasets[4].barThickness= 40
      tujuan1.data.datasets[5].data = [0.00, 3.45, 4.76, 6.67, 12.50]; 
      tujuan1.data.datasets[5].barThickness=40
      tujuan1.data.labels = [
        "Tidak Bersekolah",
        "Sekolah Dasar",
        "Sekolah Menengah Pertama ",
        "Sekolah Menengah Atas",
        "Diploma (Diploma ,II,III)",
        "Sarjana (Diploma IV dan Strata I)",
        "Pascasarjana (Strata II dan III) "
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='T170  ';
      tujuan1.update();
    } if (barChart.value =='T1_21') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [7.89, 14.47, 14.29];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [31.58, 31.58, 21.43];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [15.79, 17.11, 7.14];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [27.63, 18.42, 28.57];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [13.16, 14.47, 7.14];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [3.95, 3.95, 21.43]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        "Di Bawah SMA/SMK",
        "SMA/SMK",
        "Di Atas SMA/SMK" 
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja yang Pernah Bekerja di Sektor Pariwisata dalam Tiga Tahun Terakhir Berdasarkan Jenis Industri dan Pendidikan Tertinggi yang Ditamatkan';
      tujuan1.update();
    }  if (barChart.value =='T1_22') {
      console.log(barChart.value);
            tujuan1.data.datasets[0].data = [18.26, 9.20];
            tujuan1.data.datasets[0].barThickness= 150,
            tujuan1.data.datasets[1].data = [30.43, 32.20];
            tujuan1.data.datasets[1].barThickness= 150,
            tujuan1.data.datasets[2].data = [11.30, 11.41];
            tujuan1.data.datasets[2].barThickness= 150,
            tujuan1.data.datasets[3].data = [19.13, 15.16];
            tujuan1.data.datasets[3].barThickness= 150,
            tujuan1.data.datasets[4].data = [10.43, 23.00];
            tujuan1.data.datasets[4].barThickness= 150,
            tujuan1.data.datasets[5].data = [10.43, 9.03]; 
            tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        "Ya",
        "Tidak"
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Keikutsertaan dalam Pelatihan';
      tujuan1.update();
    }  if (barChart.value =='T1_23') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [17.81	,8.81];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [27.40	,33.09];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [15.75	,10.25];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [13.70,	16.37];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [13.01,	23.02];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [12.33,	8.45]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
       "Ya", "Tidak"
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Penggunaan Bahasa Asing di Tempat Bekerja';
      tujuan1.update();
    } if (barChart.value =='T1_24') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [14.80, 8.77];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [34.53, 30.69];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [10.31, 11.90];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [18.39, 14.61];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [14.35, 24.01];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [7.62, 10.02]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        "Layak Huni",
        " Tidak Layak Huni"
       ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Rumah Layak Huni';
      tujuan1.update();
    } if (barChart.value =='T1_25') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].data = [10.42, 13.82];
      tujuan1.data.datasets[0].barThickness= 150,
      tujuan1.data.datasets[1].data = [32.29, 34.18];
      tujuan1.data.datasets[1].barThickness= 150,
      tujuan1.data.datasets[2].data = [11.31, 11.64];
      tujuan1.data.datasets[2].barThickness= 150,
      tujuan1.data.datasets[3].data = [16.22, 17.09];
      tujuan1.data.datasets[3].barThickness= 150,
      tujuan1.data.datasets[4].data = [21.28, 15.27];
      tujuan1.data.datasets[4].barThickness= 150,
      tujuan1.data.datasets[5].data = [8.48, 8.00]; 
      tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        "Sumber air minum bersih",
        "Akses air minum layak"       ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sumber Air Minum Bersih dan Akses Air Minum Layak';
      tujuan1.update();
    } if (barChart.value =='T1_26') {
      console.log(barChart.value);

        tujuan1.data.datasets[0].data = [11.53, 6.61];
        tujuan1.data.datasets[0].barThickness= 150,
        tujuan1.data.datasets[1].data = [32.36, 29.75];
        tujuan1.data.datasets[1].barThickness= 150,
        tujuan1.data.datasets[2].data = [10.50, 15.70];
        tujuan1.data.datasets[2].barThickness= 150,
        tujuan1.data.datasets[3].data = [17.56, 7.44];
        tujuan1.data.datasets[3].barThickness= 150,
        tujuan1.data.datasets[4].data = [19.10, 29.75];
        tujuan1.data.datasets[4].barThickness= 150,
        tujuan1.data.datasets[5].data = [8.95, 10.74]; 
        tujuan1.data.datasets[5].barThickness= 150
      tujuan1.data.labels = [
        "Sanitasi layak",
        "Sanitasi tidak layak"      
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sanitasi Layak';
      tujuan1.update();
    }
}
 
           