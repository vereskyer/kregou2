@section('content')
    <div class="container">
        <h1>{{ $answer->content }}</h1>
        <p>Answered by {{ $answer->user->name }}</p>
    </div>
@endsection