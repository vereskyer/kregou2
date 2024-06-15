@extends('admin.layouts.master')

@section('content')
<main class="mt-10 pl-6 h-screen pb-16 overflow-y-auto">
    <div class="p-4" data-theme="emerald">
        <form id="shop-order-form" method="POST" action="{{ route('admin.siteorder.update', ['id' => $siteorder->id]) }}">
            @csrf
            {{-- @method('PUT') --}}
            <span class="btn btn-secondary">{{ $siteorder->user->name }}的訂單 </span>
            <div>
                <img class="object-cover w-40 h-40 rounded-md mt-5" src="{{ asset($siteorder->image) }}">
                <div id="search-results" class="mt-2 bg-white shadow-lg"></div>
            </div>
            <div class="mt-4">
                <span class="btn btn-secondary">訂單說明</span>

                <p class="mt-4">{!! $siteorder->description !!}<p>
            </div>
            <div class="mt-4">
                <span class="btn btn-secondary">管理員備註</span> <br>
                <input type="text" id="floor" placeholder="訂單備註..." name="notes" value="{{ $siteorder->notes }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>

            <div class="flex justify-start">
                <button type="submit" class="mt-4 btn btn-primary">提交</button>
            </div>
        </form>
    </div>
</main>
@endsection
