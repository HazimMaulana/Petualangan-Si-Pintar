<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    @vite('../resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
</head>

<body class="flex flex-col bg-[url('/public/images/bg-soal.png')] h-screen bg-cover overflow-y-auto justify-center items-center">
    <div class="flex w-full justify-start pl-6">
        <a href="/home" class="w-[5%]">
                <img src="/images/homebutton.png" alt="Home Button" class="w-full transition-transform transform hover:scale-110">
        </a>
    </div>
    <div class="flex flex-col w-full justify-center items-center px-36 mt-12">
        <canvas id="myChart" width="350" height="150"></canvas> 
    </div>

    <script>
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July']; 
        const data = {
            labels: labels,
            datasets: [{
                label: 'Grafik Pembelajaran', 
                data: [65, 59, 80, 81, 56, 55, 40], 
                fill: true, 
                borderColor: 'rgb(75, 192, 192)', 
                tension: 0.1 
            }]
        };

        const config = {
            type: 'line', 
            data: data,
        };

        
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
</body>

</html>
