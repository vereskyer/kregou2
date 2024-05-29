<?php 

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $questions = Question::orderBy('created_at', 'desc')->paginate(10);
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $question = new Question();

        if ($request->hasFile('image')) {
            if (File::exists(public_path($question->image))) {
                File::delete(public_path($question->image));

                $image = $this->uploadImage($request, 'image', 'uploads');
                $question->image = $image; // 这里为新上传的图片路径赋值
            }
        }

        $question->user_id = $user->id;
        $question->content = $request->content;
        $question->save();      
        
        toastr('Question posted successfully');

        return redirect()->route('questions.index');
    }

    public function show(Question $question)
    {
        $question->load('answers.user');
        return view('questions.show', compact('question'));
    }
}