@extends('admin.layouts.master')

@section('content')
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">

                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                            Korean
                        </h1>

                        {{-- update profile  --}}
                        <form action="{{ route('korean.store') }}" method="POST">
                            @csrf

                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400">中文</span>
                                <!-- focus-within sets the color for the icon when input is focused -->
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input
                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                        value="" name="chinese" />

                                </div>
                            </label>

                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400">Email</span>
                                <!-- focus-within sets the color for the icon when input is focused -->
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input
                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                        value="" name="korean" />

                                </div>
                            </label>

                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <button
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

                                添加韩语
                            </button>
                        </form>

                        <hr class="my-8" />




                    </div>

                </div>

            </div>
            <div class="overflow-x-auto bg-white rounded-lg">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>中文</th>
                            <th>韩语</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($koreans as $korean)
                            <tr>
                                <th>{{ $korean->id }}</th>
                                <td>{{ $korean->chinese }}</td>
                                <td>

                                    <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
                                        <label for="npm-install" class="sr-only">Label</label>
                                        <input id="{{ $korean->id }}"" type="text"
                                            class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            value="{{ $korean->korean }}" disabled readonly>
                                        <button data-copy-to-clipboard-target="{{ $korean->id }}""
                                            class="col-span-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center inline-flex justify-center">
                                            <span id="default-message">Copy</span>
                                            <span id="success-message" class="hidden inline-flex items-center">
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


            </div>
        </div>
        <!-- 2. Include library -->
        <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>

        <!-- 3. Instantiate clipboard -->
        <script>
            const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'npm-install');
            const $defaultMessage = document.getElementById('default-message');
            const $successMessage = document.getElementById('success-message');
            
            clipboard.updateOnCopyCallback((clipboard) => {
                $defaultMessage.classList.add('hidden');
                $successMessage.classList.remove('hidden');
            
                // reset to default state
                setTimeout(() => {
                    $defaultMessage.classList.remove('hidden');
                    $successMessage.classList.add('hidden');
                }, 2000);
            })
            
        </script>

    </div>
@endsection
