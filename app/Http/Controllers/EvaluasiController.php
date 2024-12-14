<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function index()
    {
        return view("evaluasi"); 
    }

    public function soalEvaluasi(){
        $filePath = storage_path('app/public/soal.txt');

        $soal = file_get_contents($filePath);
        
        $soalLines = array_filter(explode("\n", $soal), fn($line) => trim($line) !== '');

        $soalArray = [];
        foreach ($soalLines as $line) {
            $line = trim($line);  
            $parts = explode('|', $line);  
        
            if (count($parts) == 7) {  
                $soalArray[] = [
                    'no' => $parts[0],
                    'pertanyaan' => $parts[1],
                    'pilihan' => [
                        'A' => $parts[2],
                        'B' => $parts[3],
                        'C' => $parts[4],
                        'D' => $parts[5]
                    ],
                    'jawaban' => $parts[6],
                ];
            }
        }
        
        return view('soalEvaluasi', compact('soalArray'));
    }

    public function soalEvaluasi2(){
        $filePath = storage_path('app/public/soal-2.txt');

        $soal = file_get_contents($filePath);
        
        $soalLines = array_filter(explode("\n", $soal), fn($line) => trim($line) !== '');

        $soalArray = [];
        foreach ($soalLines as $line) {
            $line = trim($line);  
            $parts = explode('|', $line);  
        
            if (count($parts) == 7) {  
                $soalArray[] = [
                    'no' => $parts[0],
                    'pertanyaan' => $parts[1],
                    'pilihan' => [
                        'A' => $parts[2],
                        'B' => $parts[3],
                        'C' => $parts[4],
                        'D' => $parts[5]
                    ],
                    'jawaban' => $parts[6],
                ];
            }
        }
        
        return view('soalEvaluasi-2', compact('soalArray'));
    }
    public function soalEvaluasi3(){
        $filePath = storage_path('app/public/soal-3.txt');

        $soal = file_get_contents($filePath);
        
        $soalLines = array_filter(explode("\n", $soal), fn($line) => trim($line) !== '');

        $soalArray = [];
        foreach ($soalLines as $line) {
            $line = trim($line);  
            $parts = explode('|', $line);  
        
            if (count($parts) == 7) {  
                $soalArray[] = [
                    'no' => $parts[0],
                    'pertanyaan' => $parts[1],
                    'pilihan' => [
                        'A' => $parts[2],
                        'B' => $parts[3],
                        'C' => $parts[4],
                        'D' => $parts[5]
                    ],
                    'jawaban' => $parts[6],
                ];
            }
        }
        
        return view('soalEvaluasi-3', compact('soalArray'));
    }
}
