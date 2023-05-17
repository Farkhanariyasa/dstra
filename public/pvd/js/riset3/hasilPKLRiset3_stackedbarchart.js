//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const tujuan1_blok3_1 = document.getElementById('tujuan1_blok3_1');

const total1_1_1= 100/(data1_1.ji1_1+data1_1.ji1_2+ data1_1.ji1_3);
const total1_1_2= 100/(data1_1.ji2_1+data1_1.ji2_2+ data1_1.ji2_3);
const total1_1_3= 100/(data1_1.ji3_1+data1_1.ji3_2+ data1_1.ji3_3);
const total1_1_4= 100/(data1_1.ji4_1+data1_1.ji4_2+ data1_1.ji4_3);
const total1_1_5= 100/(data1_1.ji5_1+data1_1.ji5_2+ data1_1.ji5_3);
const total1_1_6= 100/(data1_1.ji6_1+data1_1.ji6_2+ data1_1.ji6_3);

new Chart(tujuan1_blok3_1, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        
        label: 'Bebas sewa',
        data: [data1_1.ji1_1*total1_1_1, data1_1.ji2_1*total1_1_2, data1_1.ji3_1*total1_1_3, data1_1.ji4_1*total1_1_4, data1_1.ji5_1*total1_1_5, data1_1.ji6_1*total1_1_6],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Kontrak Sewa',
        data: [data1_1.ji1_2*total1_1_1, data1_1.ji2_2*total1_1_2, data1_1.ji3_2*total1_1_3, data1_1.ji4_2*total1_1_4, data1_1.ji5_2*total1_1_5, data1_1.ji6_2*total1_1_6],
        backgroundColor: ["#b35c74"],
      },
      {
        label: 'Milik Sendiri',
        data: [data1_1.ji1_3*total1_1_1, data1_1.ji2_3*total1_1_2, data1_1.ji3_3*total1_1_3, data1_1.ji4_3*total1_1_4, data1_1.ji5_3*total1_1_5, data1_1.ji6_3*total1_1_6],
        backgroundColor: ["#4b395f"],
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
            display: false,
            // text : ["Persentase Tenaga Kerja di Industri Pariwisata", "Menurut Jenis Industri dan Status Kepemilikan Rumah"],
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

