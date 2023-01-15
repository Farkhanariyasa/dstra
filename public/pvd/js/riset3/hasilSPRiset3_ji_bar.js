const ctx = document.getElementById('ji_batang');
new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['jasa akomodasi',
            'jasa makan dan minum',
            'jasa angkutan rel',
            'jasa angkutan darat',
            'jasa angkutan air',
            'jasa angkutan udara',
            'jasa angkutan udara',
            'Agen perjalanan dan reservasi lainnya',
            'Jasa kebudayaan, olahraga dan rekreasi',
            'Aktivitas perdagangan barang-barang pariwisata',
            'jasa pariwisata lainnya'],
    datasets: [{
        label: '# of Votes',
        data: [datajenisindustri.ji1,
            datajenisindustri.ji2,
            datajenisindustri.ji3,
            datajenisindustri.ji4,
            datajenisindustri.ji5,
            datajenisindustri.ji6,
            datajenisindustri.ji7,
            datajenisindustri.ji8,
            datajenisindustri.ji9,
            datajenisindustri.ji10,
            datajenisindustri.ji11,],
        borderWidth: 1
    }]
    },
    options: {
    scales: {
        y: {
        beginAtZero: true
        }
    },
    maintainAspectRatio: false
    }
});
