@include('layouts.header')

<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">

        <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">幫忙找款</h2>
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input name="image" type="file" 
                    class="file-input file-input-bordered file-input-info w-full max-w-xs" />

                <div class="mt-5 mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-600">簡單說明</label>
                    <textarea type="text" id="content" name="content" placeholder="如果有可以提供的其他信息，可以加以說明."
                        class="border border-gray-300 shadow p-3 w-full rounded mb-"></textarea>
                </div>

                <button type="submit"
                    class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
            </form>
        </div>
    </div>
</div>
