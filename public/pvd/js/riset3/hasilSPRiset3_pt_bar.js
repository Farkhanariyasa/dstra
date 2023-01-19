const ctx = document.getElementById('ji_batang');
const batang =new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'jasa akomodasi',
            'jasa makan dan minum',
            'jasa angkutan darat',
            'jasa angkutan udara',
            'Agen perjalanan dan reservasi lainnya',
            'Jasa kebudayaan, olahraga dan rekreasi',
            'Aktivitas perdagangan barang-barang pariwisata',
            'jasa pariwisata lainnya'
        ],
        datasets: [{
            label: 'Jenis Industri',
            data: [  
                datajenisindustri.ji1,
                datajenisindustri.ji2,
                datajenisindustri.ji4,
                datajenisindustri.ji7,
                datajenisindustri.ji8,
                datajenisindustri.ji9,
                datajenisindustri.ji10,
                datajenisindustri.ji11,
            ],
            borderWidth: 1,
            backgroundColor: [
                "#6f617f"
            ],
        }]
    },
    options: {
    responsive:true,
    scales: {
        y: {
        beginAtZero: true
        }
    },
    plugins:{
        title: {
            display: true,
            text : 'Banyaknya Tenaga Pariwisata Berdasarkan Jenis Industri',
            font: {
                size: 20
            }
          },
        legend:{
            display: false
          } 
        },
    maintainAspectRatio: false
    }
});

const barChart = document.getElementById('forBarChart');
barChart.addEventListener('change', tampilData);
  
function tampilData(){
    // barChart.value.split(',');
    // batang.data.datasets[0].data=barChart.value.split(',');
    // batang.update();
    if (barChart.value =='a') {
        console.log(barChart.value);
        batang.data.datasets[0].data = 
            [   datajenisindustri.ji1,
                datajenisindustri.ji2,
                datajenisindustri.ji4,
                datajenisindustri.ji7,
                datajenisindustri.ji8,
                datajenisindustri.ji9,
                datajenisindustri.ji10,
                datajenisindustri.ji11,
            ];
            batang.data.labels = [
                'jasa akomodasi',
                'jasa makan dan minum',
                'jasa angkutan darat',
                'jasa angkutan udara',
                'Agen perjalanan dan reservasi lainnya',
                'Jasa kebudayaan, olahraga dan rekreasi',
                'Aktivitas perdagangan barang-barang pariwisata',
                'jasa pariwisata lainnya'
            ];
            // console.log(batang.data.datasets[0].data)
            batang.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Industri';
            batang.update();

    } if (barChart.value =='b') {
            console.log(barChart.value);
            batang.data.datasets[0].data = 
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
            batang.data.labels = ['Tidak/belum pernah sekolah',
            'Tidak/belum SD',
            'SD/MI/SDLB/Paket A',
            'SMP/MTs/SMPLB/Paket B',
            'SMA/MA/SMLB/Paket C',
            'SMK/MAK',
            'Diploma I/II/III',
            'Diploma IV',
            'S1/S2/S3'
            ];
            // console.log(batang.data.datasets[0].data)
            batang.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Pendidikan Tertinggi ';
            batang.update();

    } if (barChart.value =='c') {
            console.log(barChart.value);
            batang.data.datasets[0].data = 
            [   
                datajeniskelamin_riset3.jk_11,
                datajeniskelamin_riset3.jk_12
            ];
            batang.data.labels = ['Laki-laki',
            'Perempuan'
            ];
            // console.log(batang.data.datasets[0].data)
            batang.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
            batang.update();

    }
}