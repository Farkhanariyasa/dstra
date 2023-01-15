const riset1_hasil3 = document.getElementById('riset1_hasil3');

var colors2 = [
    '#ffab00', 
    '#506396', 
    '#4b395f', 
    '#b35c74', 
    '#ffbc33', 
    '#7382ab', 
    '#6f617f', 
    '#c27d90', 
    '#ffdd99'
];

var assigned = {};
function c2(name) {
  return assigned[name] || (assigned[name] = colors2[Object.keys(assigned).length % colors2.length]);
}

new Chart(riset1_hasil3, {
    type: "sankey",
    data: {
        datasets: [
        {
            data: [
                {
                    from: hasil3.lokasi_awal[0], to: hasil3.lokasi_tujuan[0], flow: 5
                },
                {
                    from: hasil3.lokasi_awal[1], to: hasil3.lokasi_tujuan[1], flow: 2
                },
                {
                    from: hasil3.lokasi_awal[2], to: hasil3.lokasi_tujuan[2], flow: 3
                },
                {
                    from: hasil3.lokasi_awal[3], to: hasil3.lokasi_tujuan[3], flow: 4
                },
                {
                    from: hasil3.lokasi_awal[4], to: hasil3.lokasi_tujuan[4], flow: 5
                },
                {
                    from: hasil3.lokasi_awal[5], to: hasil3.lokasi_tujuan[5], flow: 6
                },
                {
                    from: hasil3.lokasi_awal[6], to: hasil3.lokasi_tujuan[6], flow: 7
                },
                {
                    from: hasil3.lokasi_awal[7], to: hasil3.lokasi_tujuan[7], flow: 1.5
                },
                {
                    from: hasil3.lokasi_awal[8], to: hasil3.lokasi_tujuan[8], flow: 6
                },

                
                

            ],
            colorFrom: (c) => c2(c.dataset.data[c.dataIndex].from),
            colorTo: (c) => c2(c.dataset.data[c.dataIndex].to),
            borderWidth: 0
            }
        ]
    },

    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: "Sankey Diagram",
                font: {
                    size: 20,
                }
            },
        },
        layout: {
            padding: 30,
        },
    }

});
