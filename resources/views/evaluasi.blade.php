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
        <img src="/images/papanevaluasi.png" alt="" class="w-[20%] mb-12 mt-8 pl-6">
        <a href="/home" class="w-[6%] pb-3 pl-4">
            <img src="/images/homebutton.png" alt="Home Button"
                class="w-full transition-transform transform hover:scale-110">
        </a>
    </div>
    <div class="flex w-full justify-center items-center">
        <div class="grid grid-cols-3 gap-4">
            <a href="/soal-evaluasi"
                class="flex flex-col w-[300px] h-[220px] space-y-2 bg-[#f4f2de] items-center border-[3px] border-black rounded-[40px] justify-center transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <p class="text-4xl font-bold font-hfcheers text-[#83b02e]">Level 1</p>
            </a>
            <a href="/soal-evaluasi-2"
                class="flex flex-col w-[300px] h-[220px] space-y-2 bg-[#83b02e] items-center border-[3px] border-black rounded-[40px] justify-center transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <p class="text-4xl font-bold font-hfcheers text-[#fff626]">Level 2</p>
            </a>
            <a href="/soal-evaluasi-3"
                class="flex flex-col w-[300px] h-[220px] space-y-2 bg-[#f4f2de] items-center border-[3px] border-black rounded-[40px] justify-center transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <p class="text-4xl font-bold font-hfcheers text-[#83b02e]">Level 3</p>
            </a>
            <a href=""
                class="flex flex-col w-[300px] h-[220px] space-y-2 bg-[#83b02e] items-center border-[3px] border-black rounded-[40px] justify-center transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <p class="text-4xl font-bold font-hfcheers text-[#fff626]">Level 4</p>
            </a>
            <a href=""
                class="flex flex-col w-[300px] h-[220px] space-y-2 bg-[#f4f2de] items-center border-[3px] border-black rounded-[40px] justify-center transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <p class="text-4xl font-bold font-hfcheers text-[#83b02e]">Level 5</p>
            </a>
            <a href=""
                class="flex flex-col w-[300px] h-[220px] space-y-2 bg-[#83b02e] items-center border-[3px] border-black rounded-[40px] justify-center transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <p class="text-4xl font-bold font-hfcheers text-[#fff626]">Level 6</p>
            </a>
        </div>
    </div>
</body>

</html>
