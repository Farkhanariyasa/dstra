const ctx = document.getElementById('jk_batang');
new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['Laki-laki','Perempuan'],
    datasets: [{
        label: '# of Votes',
        data: [mahasiswa.laki,mahasiswa.perempuan],
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
