<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Payment;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request, Question $question)
    {
        // dd($request->all());

        $request->validate(['content' => 'required']);
        Auth::user()->answers()->create([
            'question_id' => $question->id,
            'content' => $request->input('content'),
        ]);
        return redirect()->route('user.questions.show', $question->id)->with('success', 'Answer posted successfully.');
    }

    public function show($id)
    {
        $answer = Answer::findOrFail($id);
        $user = Auth::user();

        $hasPaid = Payment::where('user_id', $user->id)->where('answer_id', $id)->exists();

        if (!$hasPaid) {
            return redirect()->back()->with('error', 'You need to pay to view this answer.');
        }

        return view('answers.show', compact('answer'));
    }

    public function purchase($id)
    {
        $user = Auth::user();
        $answer = Answer::findOrFail($id);

        if ($user->balance < 1000) {
            return redirect()->back()->with('error', 'You do not have enough balance.');
        }

        $user->withdraw(1000, ['description' => 'Payment for answer ID: ' . $id]);

        Payment::create([
            'user_id' => $user->id,
            'answer_id' => $id,
        ]);

        return redirect()->route('answers.show', $id)->with('success', 'Payment successful. You can now view the answer.');
    }
}
