const ctx = document.getElementById('jk_batang');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels:['Laki-laki',
                'Perempuan'],
        datasets:[{
            label: 'Responden',
            data: [jeniskelamin.laki,
                jeniskelamin.perempuan],
            borderWidth:1,
            backgroundColor:[
                "#ffab00"
            ]
        }]
    },
    options: {
        scales:{
            y: {
                beginAtZero: true
            }
        },
        responsive: true,
        plugins:{
            title:{
                display:true,
                text: 'Jenis Kelamin ART',
                font:{
                    size:16,
                    family:'Poppins'

                },
                color:'#493a5a'
            },
            legend:{
                display:true
            },
            tooltip:{
                enabled:true,
                // callbacks:{
                //     label: function(context){
                //         var label = context.label,
                //             currentvalue = context.raw;

                //             return label
                //     }
                // }
            },
            datalabels:{
                display:true,
                color:'black'
            }
        },
        maintainAspectRatio: false
    },plugins:[ChartDataLabels]
});