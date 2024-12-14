<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('../resources/css/app.css')
</head>
<body class="flex flex-col bg-[url('/public/images/bg-materi1.png')] h-screen bg-cover">

    <div class="flex flex-row items-center space-x-4 mt-8 pl-6">

        <img src="/images/papanmateribelajar.png" alt="Papan Video" class="w-[23%]">

        <a href="/home" class="w-[5%]">
            <img src="/images/homebutton.png" alt="Home Button" class="w-full transition-transform transform hover:scale-110">
        </a>
    </div>
    <!-- PDF Container -->
    <div class="flex flex-row space-x-12 justify-center items-center mt-8">
        <div class="flex flex-col p-12 w-[1000px] h-[500px] space-y-2 bg-[#f4f2de] items-center border-2 border-black rounded-3xl">
            <iframe 
                src="/files/materi.pdf" 
                class="w-full h-full rounded-2xl" 
                frameborder="0">
            </iframe>
        </div>
    </div>
</body>
</html>
