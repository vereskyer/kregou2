@extends('user.layouts.master')

@section('content')
    <div class="container">
        <h1>{{ $question->content }}</h1>
        <p>Asked by {{ $question->user->name }}</p>

        @foreach($question->answers as $answer)
            @php
                $hasPaid = Auth::user()->payments()->where('answer_id', $answer->id)->exists();
            @endphp

            @if ($hasPaid)
                <p>{{ $answer->content }}</p>
            @else
                <p>This answer costs 1000 KRW. <a href="{{ route('user.answers.purchase', $answer->id) }}">Purchase</a> to view.</p>
            @endif
        @endforeach

        <form action="{{ route('user.answers.store', $question->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="content">Your Answer</label>
                <textarea name="content" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Answer</button>
        </form>
    </div>
@endsection
