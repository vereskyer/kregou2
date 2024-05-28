@extends('user.layouts.master')

@section('content')
111
    <div class="container">
        <a href="{{ route('user.questions.create') }}" class="btn btn-primary">Ask Question</a>
        @foreach($questions as $question)
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">111{{ $question->content }}</h5>
                    <p class="card-text">Asked by {{ $question->user->name }}</p>
                    <a href="{{ route('user.questions.show', $question->id) }}" class="btn btn-primary">View Question</a>
                </div>
            </div>
        @endforeach
        {{ $questions->links() }}
    </div>
@endsection