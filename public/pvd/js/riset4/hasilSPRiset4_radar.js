const data = {
    labels: [
        'Eating',
        'Drinking',
        'Sleeping',
        'Designing',
        'Coding',
        'Cycling',
        'Running'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [65, 59, 90, 81, 56, 55, 40],
        fill: true,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgb(255, 99, 132)',
        pointBackgroundColor: 'rgb(255, 99, 132)',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgb(255, 99, 132)'
    }, {
        label: 'My Second Dataset',
        data: [28, 48, 40, 19, 96, 27, 100],
        fill: true,
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgb(54, 162, 235)',
        pointBackgroundColor: 'rgb(54, 162, 235)',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgb(54, 162, 235)'
    }, {
        label: 'My Third Dataset',
        data: [45, 25, 16, 36, 67, 18, 76],
        fill: true,
        backgroundColor: 'rgba(255, 205, 86, 0.2)',
        borderColor: 'rgb(255, 205, 86)',
        pointBackgroundColor: 'rgb(255, 205, 86)',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgb(255, 205, 86)'
    }    
    ]
};

const radar = document.getElementById("radar");

new Chart(radar,{
    type: 'radar',
    data: data,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : "Radar Chart",
                font: {
                    size: 20
                }
            },
            elements: {
                line: {
                    borderWidth: 3
                }
            },

        },
    }
});