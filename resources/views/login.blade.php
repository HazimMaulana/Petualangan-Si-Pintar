<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('../resources/css/app.css')
</head>
<body class="flex bg-[url('/public/images/login1alt.png')] h-screen bg-cover items-center justify-center">
    <div class="flex flex-col justify-center items-center w-full">
        <img src="/images/titlelogin.png" alt="" class="w-[25%]">
        <div class="flex flex-col w-[550px] py-6 space-y-6 bg-[#f4f2de] border-[3px] border-[#623615] rounded-[30px] justify-center items-center">
            <input type="text" name="" id="" class="w-[90%] h-[80px] border-2 border-[#623615] rounded-full pl-6 text-2xl">
            <input type="text" name="" id="" class="w-[90%] h-[80px] border-2 border-[#623615] rounded-full pl-6 text-2xl">
        </div>
        <a href="/home" class="bg-black mt-4 rounded-full hover:bg-[#fae078]">
            <div class="text-3xl font-bold text-[#fae078] py-2 px-4  hover:text-black ">LOGIN</div>
        </a>
    </div>
</body>
</html>
