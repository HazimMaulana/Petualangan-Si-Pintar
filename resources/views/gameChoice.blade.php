<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('../resources/css/app.css')
</head>

<body class="flex flex-col bg-[url('/public/images/bg-materi1.png')] h-screen bg-cover">
    <div class="flex flex-row w-full items-center pt-4 pl-4">
        <a href="/home" class="w-[6%] pl-4">
            <img src="/images/homebutton.png" alt="Home Button"
                class="w-full transition-transform transform hover:scale-110">
        </a>
    </div>
    <div class="flex flex-row space-x-12 justify-center items-center mt-24">
        <div
            class="flex flex-col w-[350px] h-[300px] space-y-2  bg-[#f4f2de] items-center border-2 border-black rounded-3xl">
            <img src="/images/wordwall.png" alt="" class="w-[220px] pt-8 pb-2">
            <a href="https://wordwall.net/resource/3295340/perkembangbiakan-hewan"
                class="w-[90%]  flex justify-center items-center bg-[#ffd435] text-xl text-[#623615] font-semibold py-2 rounded-full hover:bg-[#623615] hover:text-[#ffd435]">
                wordwall
            </a>
        </div>
        <div
            class="flex flex-col w-[350px] h-[300px] space-y-2  bg-[#f4f2de] items-center border-2 border-black rounded-3xl">
            <div class="pt-3">
                <svg width="220" height="220" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.9998 2.03V4.05C17.3898 4.59 20.4998 8.58 19.9598 12.97C19.4998 16.61 16.6398 19.5 12.9998 19.93V21.93C18.4998 21.38 22.4998 16.5 21.9498 11C21.4998 6.25 17.7298 2.5 12.9998 2.03ZM10.9998 2.06C9.0498 2.25 7.1898 3 5.6698 4.26L7.0998 5.74C8.2198 4.84 9.5698 4.26 10.9998 4.06V2.06ZM4.2598 5.67C3.01025 7.18782 2.2409 9.04331 2.0498 11H4.0498C4.2398 9.58 4.7998 8.23 5.6898 7.1L4.2598 5.67ZM2.0598 13C2.2598 14.96 3.0298 16.81 4.2698 18.33L5.6898 16.9C4.80665 15.7696 4.24366 14.4226 4.0598 13H2.0598ZM7.0998 18.37L5.6698 19.74C7.18477 21.0024 9.03917 21.7887 10.9998 22V20C9.57718 19.8161 8.23016 19.2532 7.0998 18.37ZM16.8198 15.19L12.7098 11.08C13.1198 10.04 12.8898 8.82 12.0298 7.97C11.1298 7.06 9.7798 6.88 8.6898 7.38L10.6298 9.32L9.2798 10.68L7.2898 8.73C6.7498 9.82 6.9998 11.17 7.8798 12.08C8.7398 12.94 9.9598 13.16 10.9998 12.76L15.1098 16.86C15.2898 17.05 15.5598 17.05 15.7398 16.86L16.7798 15.83C16.9998 15.65 16.9998 15.33 16.8198 15.19Z"
                        fill="black" />
                </svg>
            </div>

            <a href="/game-proto"
                class="w-[90%] flex justify-center items-center bg-[#ffd435] text-xl text-[#623615] font-semibold py-2 rounded-full hover:bg-[#623615] hover:text-[#ffd435]">
                Game - Prototype
            </a>
        </div>

    </div>
</body>

</html>