@extends('admin.layouts.master')

@section('content')
<div class="flex items-center justify-center">
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="{{ route('admin.bulk-product-upload.store') }}" method="POST" enctype="multipart/form-data" class="py-4 px-9">
            @csrf
            <div class="mb-5">
                <label for="category_id" class="mb-3 block text-base font-medium text-[#07074D]">
                    選擇分類：
                </label>
                <select name="category_id" id="category_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6 pt-4">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    上傳文件
                </label>

                <div class="mb-8">
                    <input type="file" name="images[]" id="file" class="sr-only" multiple />
                    <label for="file" class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                        <div>
                            <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                拖放文件到這裡
                            </span>
                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                或
                            </span>
                            <span class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                瀏覽
                            </span>
                        </div>
                    </label>
                </div>

                <!-- 這裡可以顯示上傳的文件列表 -->
                <div id="file-list" class="mb-5 rounded-md bg-[#F5F7FB] py-4 px-8 hidden">
                    <div class="flex items-center justify-between">
                        <span class="truncate pr-3 text-base font-medium text-[#07074D]" id="file-name">
                            <!-- 文件名將在這裡顯示 -->
                        </span>
                        <button class="text-[#07074D]" onclick="removeFile()">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z" fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z" fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    上傳文件
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('file').addEventListener('change', function(event) {
        const fileList = event.target.files;
        const fileListContainer = document.getElementById('file-list');
        const fileNameElement = document.getElementById('file-name');

        if (fileList.length > 0) {
            fileNameElement.textContent = fileList[0].name;
            fileListContainer.classList.remove('hidden');
        } else {
            fileListContainer.classList.add('hidden');
        }
    });

    function removeFile() {
        const fileInput = document.getElementById('file');
        fileInput.value = '';
        document.getElementById('file-list').classList.add('hidden');
    }
</script>
@endsection