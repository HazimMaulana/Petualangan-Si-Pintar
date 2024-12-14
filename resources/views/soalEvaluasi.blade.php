<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    @vite('../resources/css/app.css')
    <style>
        .selected {
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .correct {
            background-color: #4CAF50;
        }

        .incorrect {
            background-color: #F44336;
        }
    </style>
</head>

<body class="flex flex-col bg-[url('/public/images/bg-soal1.png')] h-screen bg-cover overflow-y-auto">
    <div class="flex flex-col w-full justify-center items-center mt-36">
        <div class="flex flex-col space-y-6 justify-center py-6 w-full">
            <form id="quizForm" class="space-y-6 px-64 w-full">
                @foreach($soalArray as $soal)
                    <div class="flex flex-col w-full space-y-2 bg-[#f4f2de] px-4 py-8 shadow-lg rounded-[40px]">
                        <p class="pl-8 py-4 text-xl">{{ $soal['no'] }}. {{ $soal['pertanyaan'] }}</p>

                        <div class="flex flex-col w-full items-center space-y-4 question-group">
                            <!-- Pilihan Jawaban Manual -->
                            <button type="button" onclick="selectAnswer(this)"
                                class="answer flex w-[95%] rounded-3xl h-[50px] items-center px-4 bg-yellow-50 shadow-sm hover:bg-white"
                                data-soal-id="{{ $soal['no'] }}" data-answer="A">
                                <p>A. {{ $soal['pilihan']['A'] }}</p>
                            </button>
                            <button type="button" onclick="selectAnswer(this)"
                                class="answer flex w-[95%] rounded-3xl h-[50px] items-center px-4 bg-yellow-50 shadow-sm hover:bg-white"
                                data-soal-id="{{ $soal['no'] }}" data-answer="B">
                                <p>B. {{ $soal['pilihan']['B'] }}</p>
                            </button>
                            <button type="button" onclick="selectAnswer(this)"
                                class="answer flex w-[95%] rounded-3xl h-[50px] items-center px-4 bg-yellow-50 shadow-sm hover:bg-white"
                                data-soal-id="{{ $soal['no'] }}" data-answer="C">
                                <p>C. {{ $soal['pilihan']['C'] }}</p>
                            </button>
                            <button type="button" onclick="selectAnswer(this)"
                                class="answer flex w-[95%] rounded-3xl h-[50px] items-center px-4 bg-yellow-50 shadow-sm hover:bg-white"
                                data-soal-id="{{ $soal['no'] }}" data-answer="D">
                                <p>D. {{ $soal['pilihan']['D'] }}</p>
                            </button>
                        </div>
                    </div>
                @endforeach

                <div class="flex w-full items-end justify-end">
                    <button type="button" onclick="submitQuiz()"
                        class="px-6 py-4 bg-[#f4f2de] shadow-lg rounded-full w-[200px] flex justify-center items-center hover:bg-white hover:border hover:border-black">
                        <p>Submit</p>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const selectedAnswers = {};
        function selectAnswer(selectedButton) {
            const questionGroup = selectedButton.closest('.question-group');

            questionGroup.querySelectorAll('.answer').forEach(button => {
                button.classList.remove('selected');
            });

            selectedButton.classList.add('selected');

            const soalId = selectedButton.getAttribute('data-soal-id');
            const answer = selectedButton.getAttribute('data-answer');
            selectedAnswers[soalId] = answer;
        }

        function submitQuiz() {
            document.querySelectorAll('.question-group').forEach((questionGroup) => {
                const soalId = questionGroup.querySelector('button').getAttribute('data-soal-id');

                const selectedButton = questionGroup.querySelector('.selected');

                const soalArray = {!! json_encode($soalArray) !!};
                const jawabanBenar = soalArray.find(soal => soal.no == soalId)?.jawaban;

                console.log('Jawaban Dipilih:', selectedButton?.getAttribute('data-answer'));
                console.log('Jawaban Benar:', jawabanBenar);

                const unselectedButtons = Array.from(questionGroup.querySelectorAll('.answer'))
                    .filter(button => !button.classList.contains('selected'));

                console.log('Tombol Tidak Dipilih:', unselectedButtons);

                if (selectedButton && selectedButton.getAttribute('data-answer') === jawabanBenar) {
                    selectedButton.classList.add('correct');
                } else if (selectedButton) {
                    selectedButton.classList.add('incorrect');
                }
                unselectedButtons.forEach(button => {
                    const answer = button.getAttribute('data-answer');
                    if (answer === jawabanBenar) {
                        button.classList.add('correct');
                    } else {
                        button.classList.remove('correct', 'incorrect');
                    }
                });
            });
        }



    </script>
</body>

</html>