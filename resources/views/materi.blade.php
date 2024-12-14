<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('../resources/css/app.css')
</head>
<body class="flex flex-col bg-[url('/public/images/bg-materi1.png')] h-screen bg-cover">
    <div class="flex flex-row w-full items-center">
        <img src="/images/papanmateri.png" alt="" class="w-[20%] mb-12 mt-8 pl-6">
        <a href="/home" class="w-[6%] pb-3 pl-4">
            <img src="/images/homebutton.png" alt="Home Button"
                class="w-full transition-transform transform hover:scale-110">
        </a>
    </div>
    <div class="flex flex-row space-x-12 justify-center items-center">
        <div class="flex flex-col w-[350px] h-[300px] space-y-2  bg-[#f4f2de] items-center border-2 border-black rounded-3xl">
            <img src="/images/buku.png" alt="" class="w-[220px] pt-4">
            <a href="/materi-pembelajaran" class="w-[90%] flex justify-center items-center bg-[#ffd435] text-xl text-[#623615] font-semibold py-2 rounded-full hover:bg-[#623615] hover:text-[#ffd435]">
                E-Book
            </a>
        </div>
        <div class="flex flex-col w-[350px] h-[300px] space-y-2  bg-[#f4f2de] items-center border-2 border-black rounded-3xl">
            <img src="/images/film.png" alt="" class="w-[220px] pt-4">
            <a href="/video-pembelajaran" class="w-[90%] flex justify-center items-center bg-[#ffd435] text-xl text-[#623615] font-semibold py-2 rounded-full hover:bg-[#623615] hover:text-[#ffd435]">
                Video Pembelajaran
            </a>
        </div>
        
    </div>
</body>
</html>
