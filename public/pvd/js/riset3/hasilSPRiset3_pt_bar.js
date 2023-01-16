const ctx = document.getElementById('ji_batang');
const batang =new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'jasa akomodasi',
            'jasa makan dan minum',
            'jasa angkutan rel',
            'jasa angkutan darat',
            'jasa angkutan air',
            'jasa angkutan udara',
            'jasa angkutan udara',
            'Agen perjalanan dan reservasi lainnya',
            'Jasa kebudayaan, olahraga dan rekreasi',
            'Aktivitas perdagangan barang-barang pariwisata',
            'jasa pariwisata lainnya'
        ],
        datasets: [{
            label: 'Pendidikan Tertinggi',
            data: [   datajenisindustri.ji1,
                datajenisindustri.ji2,
                datajenisindustri.ji3,
                datajenisindustri.ji4,
                datajenisindustri.ji5,
                datajenisindustri.ji6,
                datajenisindustri.ji7,
                datajenisindustri.ji8,
                datajenisindustri.ji9,
                datajenisindustri.ji10,
                datajenisindustri.ji11,
            ],
            borderWidth: 1,
            backgroundColor: [
                "#4b395f"
            ],
        }]
    },
    options: {
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
          }
        },
    maintainAspectRatio: false
    }
});

const barChart = document.getElementById('forBarChart');

barChart.addEventListener('change', tampilData);
  
function tampilData(){
    console.log(barChart.value);
    // barChart.value.split(',');
    // batang.data.datasets[0].data=barChart.value.split(',');
    // batang.update();
    if (barChart.value =='a') {
        batang.data.datasets[0].data = 
            [   datajenisindustri.ji1,
                datajenisindustri.ji2,
                datajenisindustri.ji3,
                datajenisindustri.ji4,
                datajenisindustri.ji5,
                datajenisindustri.ji6,
                datajenisindustri.ji7,
                datajenisindustri.ji8,
                datajenisindustri.ji9,
                datajenisindustri.ji10,
                datajenisindustri.ji11,
            ];
            batang.data.labels = ['jasa akomodasi',
            'jasa makan dan minum',
            'jasa angkutan rel',
            'jasa angkutan darat',
            'jasa angkutan air',
            'jasa angkutan udara',
            'jasa angkutan udara',
            'Agen perjalanan dan reservasi lainnya',
            'Jasa kebudayaan, olahraga dan rekreasi',
            'Aktivitas perdagangan barang-barang pariwisata',
            'jasa pariwisata lainnya'];
            // console.log(batang.data.datasets[0].data)
            console.log('jenisindustri');

            batang.update();
    } else {
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
            console.log('pendidikan tertinggi');

            batang.update();
    }
}