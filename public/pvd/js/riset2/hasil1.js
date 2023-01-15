const riset2_hasil1 = document.getElementById('riset2_hasil1');

new Chart(riset2_hasil1, {
    type: 'bar',
    data: {
        labels: [
            hasil1.kecamatan[0],
            hasil1.kecamatan[1],
            hasil1.kecamatan[2],
            hasil1.kecamatan[3],
        ],

        datasets: [{
            label: 'Jumlah Wisatawan',
            data: [
                hasil1.jumlah_wisatawan[0],
                hasil1.jumlah_wisatawan[1],
                hasil1.jumlah_wisatawan[2],
                hasil1.jumlah_wisatawan[3],
                
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffab00",
                "#506396",
                "#4b395f",
                "#b35c74",
            ]
        }]
         
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text : 'Jumlah Wisatawan Berdasarkan Kecamatan',
                font: {
                    size: 20
                }
            },
        },
        layout: {
            padding: 20
        },

    }

});