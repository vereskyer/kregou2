@include('layouts.header')



<div class="container">

    @foreach ($questions as $question)
        <div
            class="mt-10 px-7 lg:px-10 max-w-6xl mx-auto flex flex-col gap-y-10 lg:flex-row items-center gap-x-10 justify-center py-10 lg:py-14 dark:bg-gray-800">
            <div class="lg:w-[650px] lg:px-5 flex flex-col gap-y-5">
                <h1
                    class="text-4xl md:text-5xl xl:text-[50px] leading-[1.2] md:max-w-xl md:mx-auto md:text-center lg:text-left lg:mx-0 lg:max-w-full font-semibold dark:text-white">
                    {{ $question->content }}
                </h1>
                <div class="badge badge-primary">如果已经解决，这里显示一个ok的icon</div>
                <div class="badge badge-secondary">查看会扣掉1000韩币</div>
                <div class="flex gap-x-5 flex-col gap-y-2.5 lg:flex-row">
                    <a href="#"
                        class="flex w-full lg:w-fit items-center text-white justify-center rounded-lg bg-[#1053F3] px-6 py-2.5 font-semibold hover:shadow-lg hover:drop-shadow transition duration-200">
                        <span>
                            查看答案
                        </span>
                    </a>
                    <a href="{{ route('questions.create') }}"
                        class="flex w-full lg:w-fit items-center text-[#1053F3] justify-center rounded-lg border border-[#6A65FF] px-6 py-2.5 font-semibold hover:shadow-lg hover:drop-shadow transition duration-200 bg-[#5138EE]/10 dark:text-white dark:bg-transparent dark:border-gray-500/50">
                        <span>
                            我也想找款
                        </span>
                    </a>
                </div>
            </div>
            <div class="hero-image md:px-5 lg:px-0 w-full lg:w-1/2 rounded-3xl md:pt-2 lg:pt-0 relative isolate z-10">
                <img class="rounded-3xl w-full"
                    src="https://images.unsplash.com/photo-1590650516494-0c8e4a4dd67e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8c2VydmljZXxlbnwwfDB8fHwxNzEyMjIyNjQ3fDA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="">
            </div>
        </div>
    @endforeach


    
    @foreach ($questions as $question)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $question->content }}</h5>
                <p class="card-text">Asked by {{ $question->user->name }}</p>
                <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary">View Question</a>
            </div>
        </div>
    @endforeach
    {{ $questions->links() }}


</div>
