@extends('admin.layouts.master')

@section('content')
    <main class="mt-10 pl-6 h-screen pb-16 overflow-y-auto">
        <div class="p-4" data-theme="emerald">
            <form id="shop-order-form" method="POST" enctype="multipart/form-data"
                action="{{ route('admin.buildings.update', ['id' => $building->id]) }}">
                @csrf
                @method('PUT')
                <button class="btn btn-secondary">市場取貨訂單，儘量韓國時間23:00之前提交</button>

                <div class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Image</span>
                    <!-- focus-within sets the color for the icon when input is focused -->
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <img class="w-12 h-12 rounded-full" src="{{ asset($building->image) }}" alt="">
                    </div>
                    <input type="file" name="image" class="" />
                </div>
                <div>
                    <input type="text" id="store-search" placeholder="大樓名稱" name="name" value="{{ $building->name }}"
                        class="mt-4 input input-bordered input-primary w-full max-w-xs" />
                    <div id="search-results" class="mt-2 bg-white shadow-lg"></div>
                </div>
                <div>
                    <input type="text" id="building" placeholder="TAG" name="tag" value="{{ $building->tag }}"
                        class="mt-4 input input-bordered input-primary w-full max-w-xs" />
                </div>
                <div>
                    <input type="text" id="floor" placeholder="簡單描述" name="description"
                        value="{{ $building->description }}"
                        class="mt-4 input input-bordered input-primary w-full max-w-xs" />
                </div>

                <div class="flex justify-start">
                    <button type="submit" class="mt-4 btn btn-primary">提交</button>
                </div>
            </form>
        </div>
    </main>
@endsection
