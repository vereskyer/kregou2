@include('layouts.header')


<div class="container">
    <h1>{{ $question->content }}</h1>
    <p>Asked by {{ $question->user->name }}</p>

    @foreach ($question->answers as $answer)
        @php
            $hasPaid = Auth::user()
                ->payments()
                ->where('answer_id', $answer->id)
                ->exists();
        @endphp

        @if ($hasPaid)
            <p>{{ $answer->content }}</p>
        @else
            <p>This answer costs 1000 KRW. <a href="{{ route('user.answers.purchase', $answer->id) }}">Purchase</a> to
                view.</p>
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

<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">

        <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">幫忙找款</h2>

        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
                <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606" alt="Mountain" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        {{ $question->content }}</h2>
                    <p class="text-gray-700 leading-tight mb-4 text-red-500">
                        如果您知道這個款是哪家的，可以在下面添加檔口的資訊。手機號，或kakao talk， 或微信，或Line都可以。
                    </p>

                </div>
            </div>
            <form action="{{ route('user.answers.store', $question->id) }}" method="POST">
                @csrf

                
                <div class="mt-5 mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-600">
                        提交信息</label>
                    <textarea type="text" id="content" name="content" placeholder="如果有可以提供的其他信息，可以加以說明."
                        class="border border-gray-300 shadow p-3 w-full rounded mb-"></textarea>
                </div>

                <button type="submit"
                    class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
            </form>
        </div>
    </div>
</div>
