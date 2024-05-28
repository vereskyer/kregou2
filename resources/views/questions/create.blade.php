@extends('user.layouts.master')
@section('content')
    <div class="container">
        <form action="{{ route('user.questions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="content">Question</label>
                <textarea name="content" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection