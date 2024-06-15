@extends('user.layouts.master')

@section('title', '韓國網站代購')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <style type="text/css">
        .ck-editor__editable_inline {
            height: 450px;
        }
    </style>
@endsection

@section('content')
    <main class="mt-10 pl-6 h-screen pb-16 overflow-y-auto">
        <div class="p-4" data-theme="emerald">
            <form id="site-order-form" method="POST" action="{{ route('user.siteorder.store') }}" enctype="multipart/form-data">
                @csrf
                <button class="btn btn-secondary">提交韓國網站代購</button>
                <div class="block text-sm mt-5">
                    <span class="text-gray-700 dark:text-gray-400 bg-red-300 font-bold size-md">請上傳需要代購的商品的圖片</span>
                    <div class="mt-3 relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400"></div>
                    <input type="file" name="image" class="mt-3" />
                </div>
                <div class="mt-4 w-1/3">
                    <span class="text-gray-700 dark:text-gray-400 bg-red-300 font-bold size-md mb-4">請簡單說明需要代購的商品，款式，顏色，規格和數量...</span><br>
                    <span class="text-gray-700 dark:text-gray-400 bg-red-300 font-bold size-md mb-4">比如： 黑色，XL 一件...</span>
                    <textarea class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" name="description" rows="5" id="editor"></textarea>
                </div>
                <div>
                    <input type="text" id="url" placeholder="網址鏈接..." name="url" class="mt-4 input input-bordered input-primary w-full max-w-xs" />
                </div>
                <div class="flex justify-start">
                    <button type="submit" class="mt-4 btn btn-primary">提交</button>
                </div>
            </form>
            
        </div>
    </main>


    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('user.siteorder.ckeditor.upload', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
