@extends('admin.layouts.master')

@section('head')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
    <style type="text/css">
        .ck-editor__editable_inline {
            height: 450px;
        }
    </style>
@endsection

@section('content')
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">

                <div class="flex items-center justify-center flex-1">
                    <div class="w-full p-6">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                            添加新的商品
                        </h1>

                        {{-- update profile  --}}
                        <form action="{{ route('admin.products.store') }}" class="mt-6 w-full" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Image</span>
                                <!-- focus-within sets the color for the icon when input is focused -->
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    {{-- <img class="w-12 h-12 rounded-full" src="{{ asset(Auth::user()->image) }}" alt=""> --}}
                                </div>
                                <input type="file" name="image" class="" />
                            </label>

                            <label class="block text-sm  mt-4">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">商品分類</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="mt-2 relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <select
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select"
                                            name="category_id" id="category-select">
                                            <option value="" disabled selected>请选择商品分類</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">商品名稱</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <input
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="name" />
                                    </div>
                                </div>

                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">韓語名稱</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <input
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="korean_name" />
                                    </div>
                                </div>
                            </label>

                            <label class="block text-sm  mt-4 bg-green-100">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">批發價格</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <input
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="wholesale_price" />
                                    </div>
                                </div>

                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">供貨價格</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <input
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="supply_price" />
                                    </div>
                                </div>
                            </label>


                            <label class="block text-sm  mt-4">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">詳細介紹</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <textarea
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="description" rows="5" id="editor">
                                    </textarea>
                                    </div>
                                </div>
                            </label>

                            <label class="block text-sm  mt-4">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">會員參考網址</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <input
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="url" />
                                    </div>
                                </div>
                            </label>

                            <label class="block text-sm  mt-4">
                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">管理員查看的url</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <input
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="admin_url" />
                                    </div>
                                </div>
                            </label>
                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <button
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                添加商品
                            </button>
                        </form>

                        <hr class="my-8" />

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    </div>
@endsection
