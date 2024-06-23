@extends('layouts.header')

@section('title', '韓國代購說明')

@section('content')


    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <h1 class="text-2xl font-bold my-4">Shopping Cart</h1>

        </div>
        <div class="mt-8">
            @if (session('cart'))
                @foreach (session('cart') as $id => $items)
                    <div class="flex flex-col md:flex-row border-b border-gray-400 py-4">
                        <div class="flex-shrink-0">
                            <a href="{{ route('products.show', $id) }}">
                                <img src="{{ asset($items['image']) }}" alt="Product image" class="w-60 h-60 object-cover">
                            </a>
                        </div>
                        <div class="mt-4 ml-4 md:mt-0 md:ml-6">
                            <h2 class="text-lg font-bold">{{ $items['name'] }}</h2>
                            <p class="mt-2 text-gray-600">Product Description</p>
                            <div class="mt-4 flex items-center">
                                <span class="mr-2 text-gray-600">Quantity:</span>
                                <div class="flex items-center">
                                    <button class="quantity-btn decrease bg-gray-200 rounded-l-lg px-2 py-1" data-id="{{ $id }}">-</button>
                                    <span class="mx-2 w-10 text-center text-cyan-800 font-bold quantity-display">{{ $items['quantity'] }}</span>
                                    <button class="quantity-btn increase bg-gray-200 rounded-r-lg px-2 py-1" data-id="{{ $id }}">+</button>
                                </div>

                            </div>
                            <div class="mt-4">
                                <span class="ml-auto font-bold">單價：₩ {{ $items['price'] }}</span>
                                <span class="font-bold ml-5">本項合計：₩ {{ $items['price'] * $items['quantity'] }}</span>
                            </div>
                        </div>
                        <div>
                            {{-- <button class="delete-product btn btn-sm btn-danger mt-4 md:mt-0">刪除</button> --}}
                            <button class="delete-product btn btn-sm btn-danger mt-4 md:mt-0"
                                data-id="{{ $id }}">刪除</button>
                        </div>
                    </div>
                @endforeach

            @endif


        </div>
        <div class="flex justify-end items-center mt-8">
            <span class="text-gray-600 mr-4">Subtotal:</span>
            <span class="text-xl font-bold cart-total">₩ {{ $total }}</span>
        </div>
        <div class="flex justify-end items-center mt-8">
            <button class="btn btn-primary">提交訂單</button>
        </div>
    </div>
    <script type="text/javascript">
        $(".delete-product").click(function() {
            if (confirm("確定要刪除嗎?")) {
                var productId = $(this).data('id');
                var $productElement = $(this).closest('.flex.flex-col.md\\:flex-row');

                $.ajax({
                    url: '{{ route("cart.remove") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: productId
                    },
                    success: function(response) {
                        if (response.success) {
                            $productElement.remove();
                            updateCartTotal(response.total);
                        } else {
                            alert('刪除失敗，請稍後再試。');
                        }
                    },
                    error: function() {
                        alert('發生錯誤，請稍後再試。');
                    }
                });
            }
        });

        

        function updateCartTotal(total) {
            $('.cart-total').text('₩ ' + total);
        }
    </script>
@endsection
