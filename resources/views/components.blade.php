@extends('layouts.header')

@section('content')
    <main class="mt-6">
        @include('layouts.hero')

        <div class="flex flex-col gap-2">
            <div>
                <label class="inline-flex items-center" for="redCheckBox">
                  <input id="redCheckBox" type="checkbox" class="w-5 h-5 accent-red-600" onchange="updateOrderStatus()">
                  <span id="orderStatus" class="ml-2">未訂貨</span>
                </label>
            </div>
        </div>
    </main>

    <script>
        function updateOrderStatus() {
            const checkBox = document.getElementById('redCheckBox');
            const orderStatus = document.getElementById('orderStatus');
            if (checkBox.checked) {
                orderStatus.textContent = '已定貨';
            } else {
                orderStatus.textContent = '未訂貨';
            }
        }
    </script>
@endsection