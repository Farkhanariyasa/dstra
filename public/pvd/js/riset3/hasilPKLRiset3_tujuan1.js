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
const ctx = document.getElementById('tujuan1');
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
        },
        y: {
          stacked: true
        }  
     },
    plugins:{
        title: {
            display: true,
            text : ["Persentase Tenaga Kerja di Industri Pariwisata", "Menurut Jenis Industri dan Lama Menekuni Pekerjaan"],
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
    if (barChart.value == 'T1_1') {
        console.log(barChart.value);

        tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
        tujuan1.data.datasets[0].data = [10.58,10.75];

        tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
        tujuan1.data.datasets[1].data = [21.53,38.55];

        tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
        tujuan1.data.datasets[2].data = [20.8,5.37];

        tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
        tujuan1.data.datasets[3].data = [19.71,13.32];

        tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
        tujuan1.data.datasets[4].data =  [16.06,24.07];

        tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
        tujuan1.data.datasets[5].data = [11.31, 7.94];   
        
        tujuan1.data.labels = [
            'KRT','Bukan KRT'
        ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Industri';
            tujuan1.update();

    } if (barChart.value =='T1_2') {
            console.log(barChart.value);
            tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
            tujuan1.data.datasets[0].data = [0.00,4.35,12.80,10.81,12.68,11.27,6.35,6.67,16.13,6.25,0.00,25.81];

            tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
            tujuan1.data.datasets[1].data = [50.00,50.00,36.80,27.93,26.76,25.35,26.98,26.67,38.71,50.00,28.57,16.13];

            tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
            tujuan1.data.datasets[2].data = [0.00,0.00,3.20,10.81,12.68,14.08,17.46,16.67,12.90,6.25,28.57,19.35];

            tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
            tujuan1.data.datasets[3].data = [50.00,26.09,16.80,13.51,11.27,14.08,22.22,25.00,8.06,12.50,3.57,16.13];

            tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[4].data =  [0.00,19.57,22.40,20.72,23.94,22.54,14.29,23.33,14.52,21.88,35.71,16.33];

            tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[5].data =  [0.00,0.00,8.00,16.22,12.68,12.68,12.70,1.67,9.68,3.13,3.57,6.45];    
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
            tujuan1.options.plugins.title.text='asdasdasd';
            tujuan1.update();

    } if (barChart.value =='T1_3') {
            console.log(barChart.value);

            tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
            tujuan1.data.datasets[0].data = [10.40, 11.54, 8.96, 3.33, 25.81];
      
            tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
            tujuan1.data.datasets[1].data = [40.46, 27.47, 26.12, 40.00, 16.13];
      
            tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
            tujuan1.data.datasets[2].data = [2.31, 11.54, 15.67, 16.67, 19.35];
      
            tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
            tujuan1.data.datasets[3].data = [19.65, 12.64, 17.91, 8.33, 16.13];
      
            tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[4].data =  [21.39, 21.98, 18.66, 28.33, 16.13];
      
            tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[5].data = [5.78, 14.84, 12.69, 3.33, 6.45]; 
            
            tujuan1.data.labels = [
              'Dibawah 15 dan 15 - 24',
              '25 - 34',
              '35 - 44',
              '55 - 64',
              '65 +',
            ];
            // console.log(tujuan1.data.datasets[0].data)
            tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
            tujuan1.update();

    } if (barChart.value =='T1_4') {
      console.log(barChart.value);
      
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [10.22	,10.85];

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [37.63,	29.84];

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [6.99	,12.98];

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [16.67	,15.50];

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [ 20.97	,20.93];

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [7.53	,9.88]; 

      tujuan1.data.labels = [
        'Belum Kawin',
        'Pernah Kawin',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
      tujuan1.update();
    } if (barChart.value =='T1_5') {
      console.log(barChart.value);
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [10.74,10.60];

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [24.82,42.40];

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [18.38,1.06];

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [19.09, 10.95];

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data = [15.99,28.27];

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [10.98,6.71];
      
      tujuan1.data.labels = [
        'Laki-laki',
        'Perempuan',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
      tujuan1.update();
    } if (barChart.value =='T1_6') {
      console.log(barChart.value);

      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [12.56, 8.77, 12.71, 9.22];

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [39.07, 33.33, 19.49, 29.08];

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [9.30, 10.96, 13.56, 13.48];

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [12.56, 18.86, 20.34, 12.06];

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [17.21, 19.30, 25.42, 25.53];

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [ 9.30, 8.77, 8.47, 10.64]; 

      tujuan1.data.labels = [
        '< Rp1.500.000',
        'Rp1.500.000 - Rp2.500.000',
        'Rp2.500.000 - Rp3.500.000',
        '> Rp3.500.000',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
      tujuan1.update();
    } if (barChart.value =='T1_7') {
      console.log(barChart.value);
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [13.62, 4.74];

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [25.53, 44.83];

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [14.26, 5.60];

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [20.21, 6.90];

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [14.89, 33.19];

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [11.49, 4.74]; 
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
      tujuan1.update();
    } if (barChart.value =='T1_8') {
      

      console.log(barChart.value);
      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [14.55, 9.78, 4.74];

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [23.81, 32.61, 44.83];

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [14.29, 14.13, 5.60];

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [23.28, 7.61, 6.90];

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [12.70, 23.91, 33.19];

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [11.38, 11.96, 4.74]; 
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
        'Tidak Menggunakan'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
      tujuan1.update();
    

    }if (barChart.value =='T1_9') {
      console.log(barChart.value);
      


      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [13.73, 9.09, 4.74];

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [25.49, 27.27, 44.83];

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [14.60, 0.00, 5.60];

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [20.26, 18.18, 6.90];

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [14.38, 36.36, 33.19];

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [  11.55, 9.09, 4.74]; 
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
        'Tidak Menggunakan'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
      tujuan1.update();
    
    } if (barChart.value =='T1_10') {
      console.log(barChart.value);
      


      tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
      tujuan1.data.datasets[0].data = [15.34, 9.16, 4.74];

      tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
      tujuan1.data.datasets[1].data = [22.71, 32.82, 44.83];

      tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
      tujuan1.data.datasets[2].data = [15.04, 12.21, 5.60];

      tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
      tujuan1.data.datasets[3].data = [19.76, 21.37, 6.90];

      tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[4].data =  [15.34, 13.74, 33.19];

      tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
      tujuan1.data.datasets[5].data = [11.80, 10.69, 4.74]; 
      tujuan1.data.labels = [
        'Ya',
        'Tidak',
        'Tidak Menggunakan'
      ];
      // console.log(tujuan1.data.datasets[0].data)
      tujuan1.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
      tujuan1.update();
      
    }
}





            tujuan1.data.datasets[0].label = 'Penyediaan Jasa Akomodasi Bagi Wisatawan';
            tujuan1.data.datasets[0].data = [];

            tujuan1.data.datasets[1].label = 'Penyediaan Jasa Makan dan Minum';
            tujuan1.data.datasets[1].data = [];

            tujuan1.data.datasets[2].label = 'Penyediaan Jasa Angkatan Darat Untuk Penumpang';
            tujuan1.data.datasets[2].data = [];

            tujuan1.data.datasets[3].label = 'Penyediaan Jasa kebudayaan, Olahraga dan Rekreasi';
            tujuan1.data.datasets[3].data = [];

            tujuan1.data.datasets[4].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[4].data =  [];

            tujuan1.data.datasets[5].label = 'Aktivitas Perdagangan Barang-barang Pariwisata';
            tujuan1.data.datasets[5].data = []; 