@include('layouts.header')

<main class="mt-6">
@include('layouts.hero')

<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="overflow-x-auto">
        <table class="table table-zebra">
          <!-- head -->
          <thead>
            <tr>
              <th>ID</th>
              <th>中文</th>
              <th>韓語</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($koreans as $korean)
            <tr>
                <th>{{ $korean->id - 3 }}</th>
                <td>{{ $korean->chinese }}</td>
                <td>
                    <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
                        <input id="input-{{ $korean->id }}" type="text"
                            class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $korean->korean }}" readonly>
                        <button data-clipboard-target="#input-{{ $korean->id }}"
                            class="copy-btn col-span-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center inline-flex justify-center">
                            <span class="default-message">Copy</span>
                            <span class="success-message hidden inline-flex items-center">
                                <svg class="w-3 h-3 text-white me-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                Copied!
                            </span>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    <div>
        {{ $koreans->links() }}
    </div>
    </div>
</section>

<!-- Include ClipboardJS library -->
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>

<!-- Script to handle copying -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // Create a single ClipboardJS instance for all buttons with the class 'copy-btn'
        var clipboard = new ClipboardJS('.copy-btn');

        clipboard.on('success', function(e) {
            // Find the button that triggered the event
            var button = e.trigger;
            // Toggle messages
            var defaultMessage = button.querySelector('.default-message');
            var successMessage = button.querySelector('.success-message');
            defaultMessage.classList.add('hidden');
            successMessage.classList.remove('hidden');

            // Reset the message after a delay
            setTimeout(function() {
                defaultMessage.classList.remove('hidden');
                successMessage.classList.add('hidden');
            }, 2000);

            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            console.error('Failed to copy:', e);
        });

        // Restore the scroll position
        if (sessionStorage.getItem('scrollPosition')) {
            window.scrollTo(0, sessionStorage.getItem('scrollPosition'));
            sessionStorage.removeItem('scrollPosition');
        }
    });

    // Save the scroll position before leaving the page
    window.addEventListener('beforeunload', function() {
        sessionStorage.setItem('scrollPosition', window.scrollY);
    });
</script>
</main>

@include('layouts.footer')
