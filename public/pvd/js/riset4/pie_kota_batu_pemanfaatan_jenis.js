const piePemanfaatanJenis1 = document.getElementById('pie-kota-batu-pemanfaatan-jenis');

const piePemanfaatanJenis_1 = new Chart(piePemanfaatanJenis1, {
    type: 'doughnut',
    data: {
        labels: [ ["Jasa Transportasi Wisata"],
            ["Jasa Penyedia Makanan dan Minuman"],
            ["Penyedia Akomodasi"]
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                pemanfaatanTikJenis.transportasi,
                pemanfaatanTikJenis.makanan,
                pemanfaatanTikJenis.akomodasi,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffdd99",
                "#96a1c0",
                "#6f617f"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Pemanfaatan TIK pada Unit Usaha Pariwisata di Kota Batu Berdasarkan Jenis Usaha'],
                font: {
                    size: 18
                }
            },
            legend:{
                display: true,
                position: 'bottom',
            },
            tooltip:{
                enabled: true,
                callbacks: {
                    label: function(context){
                        var label = context.label,
                            currentValue = context.raw,
                            total = context.chart._metasets[context.datasetIndex].total;
              
                        var percentage = parseFloat((currentValue/total*100).toFixed(2));
              
                        return label + ": " +currentValue + ' (' + percentage + '%)';
                    }
                }
            },
            datalabels: {
                display: true,
                color: 'black',
                formatter: function(value, context) {
                    total = context.chart._metasets[context.datasetIndex].total;
                    percentage = parseFloat((value/total*100).toFixed(2));
                    return percentage + '%';
                }


            }
        },
    },
    plugins: [ChartDataLabels]
});

const pieKotaBatuPemanfaatanJenisLegend = document.getElementById('pie-kota-batu-pemanfaatan-jenis-legend');
pieKotaBatuPemanfaatanJenisLegend.addEventListener('click', update_value_pemanfaatan_jenis1(chk_bx));

function update_value_pemanfaatan_jenis1(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        piePemanfaatanJenis_1.options.plugins.legend.display=true;
        piePemanfaatanJenis_1.update();
    }
        
    else
    {
        console.log('uncheck');
        piePemanfaatanJenis_1.options.plugins.legend.display=false;
        piePemanfaatanJenis_1.update();
  
    }
}