@include('layouts.header')

<main class="mt-6">
    @foreach ($articles as $article)
        <div class="card card-side bg-base-100 shadow-xl mt-3">
            {{-- <figure><img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" alt="Movie" />
            </figure> --}}
            <div class="card-body">
                <h2 class="card-title">{{ $article->content }}</h2>
                
            </div>
        </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>

    <!-- Include ClipboardJS library -->
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>

    <!-- Script to handle copying -->

</main>

@include('layouts.footer')
