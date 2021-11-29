function bar_chart(dataset,element_id){

    const labels = [
        '10월',
        '11월',
        '12월'
    ];
    const data = {
        labels: labels,
        datasets: [{
            label: '가입통계',
            data: dataset,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
            ],
            borderWidth: 1
        }]
    };
    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    var myChart = new Chart(
        document.getElementById(element_id),
        config
    );
}