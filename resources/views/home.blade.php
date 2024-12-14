<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('../resources/css/app.css')
</head>
<body class="flex flex-col bg-[url('/public/images/home1.png')] h-screen bg-cover items-center">
    <img src="/images/hometitle.png" alt="" class="w-[25%] mb-12 mt-24">
    <div class="flex flex-row space-x-6 justify-center items-center">
        <a href="/materi" class="relative">
            <img src="/images/materi.png" alt="" class="w-[250px] transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
        </a>
        <a href="/evaluasi" class="">
            <img src="/images/evaluasi.png" alt="" class="w-[250px] transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
        </a>
        <a href="/game" class="">
            <img src="/images/game.png" alt="" class="w-[250px] transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
        </a>
        <a href="/chart" class="">
            <img src="/images/perkembangan.png" alt="" class="w-[250px] transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
        </a>
    </div>
</body>
</html>
