$('#btn-slider').click(function(){
    if($('#sliders').hasClass('active')){
        $('#sliders').removeClass('active');
        $('#sliders-background').removeClass('active');
    } else {
        $('#sliders').addClass('active');
        $('#sliders-background').addClass('active');
    }
});


$('#sliders-background').click(function(){
    $('#sliders').removeClass('active');
    $('#sliders-background').removeClass('active');
});


// this for char one type bar
var ctx = document.getElementById('myChartOne').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Tambakharjo', 'Tembalang', 'Gunungpati', 'Sekayu', 'Jatingaleh', 'Purwosari', 'Karangturi', 'Mugassari', 'Pleburan', 'Kembangarum', 'Pedalangan', 'Sendangmulyo', 'Bangetayu', 'Kalibanteng Kidul', 'Kandri', 'Manyaran', 'Ngijo', 'Ningkosawit', 'Pakintelan', 'Palebon', 'Sadeng', 'Salamanmloyo' , 'Jangli',],
        datasets: [{
            label: '# of Votes',
            data: [86, 75, 68, 60, 58, 52, 49, 44, 43, 42, 36, 31, 28, 25, 20, 17, 15, 12, 9, 9, 5, 1, 1],
            backgroundColor: [
                'rgba(128, 158, 224, 0.2)',
                'rgba(254, 207, 116, 0.2)',
                'rgba(163, 217, 173, 0.2)',
                'rgba(127, 102, 157, 0.2)',
                'rgba(255, 30, 30, 0.2)',
                'rgba(95, 113, 97, 0.2)',
                'rgba(255, 87, 127, 0.2)',
                'rgba(93, 56, 145, 0.2)',
                'rgba(252, 226, 42, 0.2)',
                'rgba(0, 255, 246, 0.2)',
                'rgba(33, 70, 199, 0.2)',
            ],
            borderColor: [
                'rgba(128, 158, 224, 1)',
                'rgba(254, 207, 116, 1)',
                'rgba(163, 217, 173, 1)',
                'rgba(127, 102, 157, 1)',
                'rgba(255, 30, 30, 1)',
                'rgba(95, 113, 97, 1)',
                'rgba(255, 87, 127, 1)',
                'rgba(93, 56, 145, 1)',
                'rgba(252, 226, 42, 1)',
                'rgba(0, 255, 246, 1)',
                'rgba(33, 70, 199, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// this for chart Two type line
var ctx = document.getElementById('myChartTwo').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Agt', 'Sept', 'Oct', 'Nov', 'Des'],
        datasets: [{
            label: '# of Votes',
            data: [12, 14, 10, 20, 17, 12, 14, 15, 16, 14, 9, 11],
            backgroundColor: [
                'rgba(128, 158, 224, 0.2)',
                'rgba(254, 207, 116, 0.2)',
                'rgba(163, 217, 173, 0.2)',
                'rgba(127, 102, 157, 0.2)',
                'rgba(255, 30, 30, 0.2)',
                'rgba(95, 113, 97, 0.2)',
                'rgba(255, 87, 127, 0.2)',
                'rgba(93, 56, 145, 0.2)',
                'rgba(252, 226, 42, 0.2)',
                'rgba(0, 255, 246, 0.2)',
                'rgba(33, 70, 199, 0.2)',
            ],
            borderColor: [
                'rgba(128, 158, 224, 1)',
                'rgba(254, 207, 116, 1)',
                'rgba(163, 217, 173, 1)',
                'rgba(127, 102, 157, 1)',
                'rgba(255, 30, 30, 1)',
                'rgba(95, 113, 97, 1)',
                'rgba(255, 87, 127, 1)',
                'rgba(93, 56, 145, 1)',
                'rgba(252, 226, 42, 1)',
                'rgba(0, 255, 246, 1)',
                'rgba(33, 70, 199, 1)',
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});