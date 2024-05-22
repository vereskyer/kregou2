@extends('user.layouts.master')

@section('content')
    <main>
        <!-- 引入特定版本或配置的 Tailwind CSS -->
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> --}}
        <div class="card card-side bg-base-100 shadow-xl">
            <label for="my-drawer-2" class="drawer-button btn btn-primary mt-10">東大門女裝</label>
            <figure class="pl-5">
                <img src="{{ asset('uploads/namecard.jpg') }}"
                    class="w-40 h-40 rounded-lg" alt="Movie" />
            </figure>
            <div class="card-body">
                <h2 class="card-title bg-green-500 w-1/5 text-center">마이클 - {{ $user->name }}</h2>
                <p>이름으로 적어주세요</p>
                <h3 class="card-title">픽업 삼촌: 010.8255.7594</h3>
            </div>
        </div>

        <div class="card card-side bg-base-100 shadow-xl mt-8">
            <label for="my-drawer-2" class="drawer-button btn btn-primary mt-10">南大門童裝</label>
            <figure class="pl-5">
                <img src="{{ asset('uploads/namecard.jpg') }}"
                    class="w-40 h-40 rounded-lg" alt="Movie" />
            </figure>
            <div class="card-body">
                <h2 class="card-title bg-green-500 w-1/5 text-center">마이클 - {{ $user->name }}</h2>
                <p>이름으로 적어주세요</p>
                <h3 class="card-title">픽업 삼촌: 010.4654.0613</h3>
            </div>
        </div>


        <div class="card card-side bg-base-100 shadow-xl mt-8">
            <label for="my-drawer-2" class="drawer-button btn btn-primary mt-10">快遞發貨</label>
            <figure class="pl-5">
                <img src="{{ asset('uploads/namecard.jpg') }}"
                    class="w-40 h-40 rounded-lg" alt="Movie" />
            </figure>
            <div class="card-body">
                <h2 class="card-title bg-green-500 w-1/5 text-center">마이클 - {{ $user->name }}</h2>
                <p>이름으로 적어주세요</p>
                <h3 class="card-title">전화: 010.5598.5115</h3>
                <h3 class="card-title">주소: 서울 동대문구 한천로 440 2층 천한무역</h3>
                <h3 class="card-title">우편번호: 02423</h3>
            </div>
        </div>
    </main>
@endsection
