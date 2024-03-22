<?php

namespace App\Http\Controllers;

use App\Models\Translate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranslateController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.translate');
    }

    public function translate(Request $request)
    {
         // Ambil input dari pengguna dan konversi menjadi huruf kecil
        $senyubukText = strtolower($request->input('senyubukText'));
        $isTranslationToIndo = $request->input('isTranslationToIndo');

        // Fungsi untuk membersihkan kata dari tanda baca
        function cleanWord($word) {
            $word = preg_replace('/[^\p{L}\p{N}\s-]/u', '', $word);
            return $word;
        }

        function loadDictionary($isTranslationToIndo) {
            $dictionary = [];
            $query = "SELECT ";
            if ($isTranslationToIndo) {
                $query .= "LOWER(kata_belitung) AS kata_belitung, LOWER(kata_indo) AS kata_indo";
            } else {
                $query .= "LOWER(kata_indo) AS kata_belitung, LOWER(kata_belitung) AS kata_indo";
            }
            $query .= " FROM kata_belitung";

            $results = DB::select(DB::raw($query));

            foreach ($results as $result){
                $dictionary[$result->kata_belitung] = $result->kata_indo;
            }

            return $dictionary;
        }

        // Fungsi untuk menerjemahkan kata dengan mengabaikan tanda baca
        function translateWord($word, $dictionary)
        {
            $cleanedWord = cleanWord($word);
            return $dictionary[$cleanedWord] ?? $word; // Menggunakan kata asli jika tidak ditemukan di kamus
        }

        // Memuat kamus dari database sesuai arah terjemahan
        $dictionary = loadDictionary($isTranslationToIndo);

        // Memisahkan kata-kata
        $words = preg_split('/\s+/', $senyubukText);
        $translatedWords = array_map(function($word) use ($dictionary) {
            return translateWord($word, $dictionary);
        }, $words);

        // Menggabungkan kata-kata terjemahan
        $translatedText = implode(' ', $translatedWords);

        // Mengembalikan hasil terjemahan dalam huruf kecil
        return response()->json(["indonesiaText" => strtolower($translatedText)]);

        // $senyubukText = strtolower($request->input('senyubukText'));
        // $isTranslationToIndo = $request->input('isTranslationToIndo');

        // $key = $isTranslationToIndo ? 'kata_belitung' : 'kata_indo';
        // $dictionary = Translate::all()->pluck($key, 'id')->toArray();

        // $words = preg_split('/\s+/', $senyubukText);
        // $translatedWords = array_map(function($word) use ($dictionary) {
        //     return $dictionary [$word] ?? $word;
        // }, $words);

        // $translatedText = implode('', $translatedWords);

        // return response()->json(['indonesiaText' => strtolower($translatedText)]);
    }
}
