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
                                    <button
                                        class="quantity-btn decrease bg-gray-200 rounded-l-lg px-2 py-1 disabled:opacity-50 disabled:cursor-not-allowed"
                                        data-id="{{ $id }}"
                                        {{ $items['quantity'] <= 1 ? 'disabled' : '' }}>-</button>
                                    <span
                                        class="mx-2 w-10 text-center text-cyan-800 font-bold quantity-display">{{ $items['quantity'] }}</span>
                                    <button class="quantity-btn increase bg-gray-200 rounded-r-lg px-2 py-1"
                                        data-id="{{ $id }}">+</button>



                                </div>


                            </div>
                            <div class="mt-4">
                                <span class="ml-auto font-bold">單價：₩ {{ $items['price'] }}</span>
                                <span class="font-bold ml-5">本項合計：<span
                                        data-item-total="{{ $id }}">{{ $items['price'] * $items['quantity'] }}</span></span>
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
            <span class="text-xl font-bold cart-total">₩ {{ number_format($total, 0, '.', ',') }}</span>
        </div>

        <div class="flex justify-end items-center mt-8">
            <form action="{{ route('cart.submit-order') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">提交訂單</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete-product").click(function() {
                if (confirm("確定要刪除嗎?")) {
                    var productId = $(this).data('id');
                    var $productElement = $(this).closest('.flex.flex-col.md\\:flex-row');

                    $.ajax({
                        url: '{{ route('cart.remove') }}',
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

            $('.quantity-btn').click(function() {
                var $btn = $(this);
                var productId = $btn.data('id');
                var isIncrease = $btn.hasClass('increase');
                var $quantityDisplay = $btn.siblings('.quantity-display');
                var currentQuantity = parseInt($quantityDisplay.text());

                // 确保数量不会小于1
                var newQuantity = isIncrease ? currentQuantity + 1 : Math.max(1, currentQuantity - 1);

                if (newQuantity !== currentQuantity) {
                    updateQuantity(productId, newQuantity);
                }

                $.ajax({
                    url: '{{ route('cart.update') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: productId,
                        quantity: isIncrease ? currentQuantity + 1 : currentQuantity - 1
                    },
                    success: function(response) {
                        if (response.success) {
                            $quantityDisplay.text(response.quantity);
                            updateItemTotal(productId, response.quantity, response.price);
                            updateCartTotal(response.total);
                        } else {
                            alert('更新失敗，請稍後再試。');
                        }
                    },
                    error: function() {
                        alert('發生錯誤，請稍後再試。');
                    }
                });
            });

            function updateItemTotal(productId, quantity, price) {
                var $itemTotal = $('[data-item-total="' + productId + '"]');
                $itemTotal.text('₩ ' + formatNumber(quantity * price));
            }

            function updateCartTotal(total) {
                $('.cart-total').text('₩ ' + formatNumber(total));
            }

            function formatNumber(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            function updateQuantity(productId, newQuantity) {
                $.ajax({
                    url: '{{ route('cart.update') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: productId,
                        quantity: newQuantity
                    },
                    success: function(response) {
                        if (response.success) {
                            // 更新显示的数量
                            var $quantityDisplay = $('[data-id="' + productId + '"]').siblings(
                                '.quantity-display');
                            $quantityDisplay.text(response.quantity);

                            // 更新减少按钮的状态
                            var $decreaseBtn = $('[data-id="' + productId + '"].decrease');
                            $decreaseBtn.prop('disabled', response.quantity <= 1);

                            // 更新商品小计和购物车总计
                            updateItemTotal(productId, response.quantity, response.price);
                            updateCartTotal(response.total);
                        } else {
                            alert('更新失敗，請稍後再試。');
                        }
                    },
                    error: function() {
                        alert('發生錯誤，請稍後再試。');
                    }
                });
            }

            // 格式化所有商品的小计
            $('[data-item-total]').each(function() {
                var price = parseFloat($(this).text().replace('₩', '').replace(',', ''));
                $(this).text('₩ ' + formatNumber(price));
            });

            // 格式化总计
            var total = parseFloat($('.cart-total').text().replace('₩', '').replace(',', ''));
            $('.cart-total').text('₩ ' + formatNumber(total));

        });
    </script>

@endsection
