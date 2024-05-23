<?php

namespace App\Http\Controllers\Frontend;

use Log;
use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    public function showText()
    {
        $text = "这里是你要展示的外语文本内容。";
        return view('user.text', compact('text'));
    }

    public function addWord(Request $request)
    {
        Log::info('Request Data:', $request->all());

        // 验证请求数据
        $validatedData = $request->validate([
            'word' => 'required|string|max:255',
            'context' => 'required|string',
        ]);

        // 创建并保存新单词
        $word = new Word();
        $word->word = $validatedData['word'];
        $word->context = $validatedData['context'];
        $word->save();

        return response()->json(['message' => 'Word added successfully!'], 200);
    }

    public function showWords()
    {
        $words = Word::all();
        return view('user.words', compact('words'));
    }
}
