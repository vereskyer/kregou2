@extends('user.layouts.master')

@section('content')
    <main class="ml-10 mt-10 w-3/4">
        <!-- 引入特定版本或配置的 Tailwind CSS -->
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> --}}
        <div class="card card-side bg-base-100 shadow-xl">
            <label for="my-drawer-2" class="ml-3 drawer-button btn btn-primary mt-10">東大門女裝</label>
            <figure class="pl-5">
                <img src="{{ asset('uploads/namecard.jpg') }}"
                    class="w-40 h-40 rounded-lg" alt="Movie" />
            </figure>
            <div class="card-body">
                <h2 class="card-title text-center">
                    <span class="border border-green-700 inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-lg font-large text-blue-700 ring-1 ring-inset ring-blue-700/10">
                        마이클 - {{ $user->name }}
                    </span>

                    </h2>
                <p>이름으로 적어주세요</p>
                <h3 class="card-title">픽업 삼촌: 010.8255.7594</h3>
            </div>
        </div>

        <div class="card card-side bg-base-100 shadow-xl mt-8">
            <label for="my-drawer-2" class="ml-3 drawer-button btn btn-primary mt-10">南大門童裝</label>
            <figure class="pl-5">
                <img src="{{ asset('uploads/namecard.jpg') }}"
                    class="w-40 h-40 rounded-lg" alt="Movie" />
            </figure>
            <div class="card-body">
                <h2 class="card-title text-center">
                    <span class="border border-green-700 inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-lg font-large text-blue-700 ring-1 ring-inset ring-blue-700/10">
                        마이클 - {{ $user->name }}
                    </span>

                    </h2>
                <p>이름으로 적어주세요</p>
                <h3 class="card-title">픽업 삼촌: 010.4654.0613</h3>
            </div>
        </div>


        <div class="card card-side bg-base-100 shadow-xl mt-8">
            <label for="my-drawer-2" class="ml-3 drawer-button btn btn-primary mt-10    ">快遞發貨</label>
            <figure class="pl-5">
                <img src="{{ asset('uploads/namecard.jpg') }}"
                    class="w-40 h-40 rounded-lg" alt="Movie" />
            </figure>
            <div class="card-body">
                <h2 class="card-title text-center">
                    <span class="border border-green-700 inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-lg font-large text-blue-700 ring-1 ring-inset ring-blue-700/10">
                        마이클 - {{ $user->name }}
                    </span>

                    </h2>
                    <p>이름으로 적어주세요</p>
                <h3 class="card-title">전화: 010.5598.5115</h3>
                <h3 class="card-title">주소: 서울 동대문구 한천로 440 2층 천한무역</h3>
                <h3 class="card-title">우편번호: 02423</h3>
            </div>
        </div>
    </main>
@endsection
