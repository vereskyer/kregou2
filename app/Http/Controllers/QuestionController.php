<?php 

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::paginate(10);
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate(['content' => 'required']);
        Auth::user()->questions()->create($request->only('content'));
        return redirect()->route('user.questions.index')->with('success', 'Question posted successfully.');
    }

    public function show(Question $question)
    {
        $question->load('answers.user');
        return view('questions.show', compact('question'));
    }
}