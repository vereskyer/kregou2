@extends('admin.layouts.master')

@section('head')
@endsection

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                商品管理
            </h2>

            <a href="{{ route('admin.products.create') }}"
                class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                添加新的商品
            </a>

            <div class="mt-6 w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">


                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full whitespace-normal table-auto">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-3 py-4 w-40">Image</th>
                                    <th class="px-3 py-4 w-40">商品名稱</th>
                                    <th class="px-3 py-4 w-40">韓語名稱</th>
                                    <th class="px-3 py-4 w-72">描述</th>
                                    <th class="px-3 py-4 w-32 text-red-600">供貨價格</th>
                                    <th class="px-3 py-4 w-32">批發價格</th>
                                    <th class="px-3 py-4 w-32">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @forelse ($products as $product)
                                    <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="px-3 py-4 text-sm">
                                            <div class="h-32 w-36 overflow-hidden rounded-md">
                                                <img src="{{ asset($product->image) }}" alt=""
                                                    class="h-full w-full object-cover hover:scale-150 transition-all duration-500 cursor-pointer">
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm">
                                            <div class="w-40 break-words">
                                                <span class="product-name-text"
                                                    data-product-id="{{ $product->id }}">{{ $product->name }}</span>
                                                <input type="text" class="product-name-input hidden w-full mt-2"
                                                    value="{{ $product->name }}" style="display: none;">
                                                <button class="edit-product-name-btn mt-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm">
                                            <div class="w-40 break-words">{{ $product->korean_name }}</div>
                                        </td>
                                        <td class="px-3 py-4 text-sm">
                                            <div class="w-72 h-32 overflow-y-auto">
                                                <span class="description-text" data-product-id="{{ $product->id }}">
                                                    {{ Str::limit($product->description, 300) }}
                                                </span>
                                                <textarea class="description-input hidden w-full h-28 mt-2" style="display: none;">{{ $product->description }}</textarea>
                                                <button class="edit-description-btn mt-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm">
                                            <div class="w-32">
                                                <span class="supply-price-text text-red-600"
                                                    data-product-id="{{ $product->id }}">{{ $product->supply_price }}</span>
                                                <input type="number" step="0.01"
                                                    class="supply-price-input hidden w-full mt-2"
                                                    value="{{ $product->supply_price }}" style="display: none;">
                                                <button class="edit-supply-price-btn mt-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm">
                                            <div class="w-32">
                                                <span class="wholesale-price-text"
                                                    data-product-id="{{ $product->id }}">{{ $product->wholesale_price }}</span>
                                            </div>
                                        </td>

                                        <td class="px-3 py-4">
                                            <div class="flex items-center space-x-2 text-sm">
                                                <!-- Actions buttons here -->
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="px-3 py-4 text-center text-gray-500 dark:text-gray-400">No
                                            products found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <!-- Pagination -->
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </main>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // 描述编辑功能（保持原有代码不变）
                const editButtons = document.querySelectorAll('.edit-description-btn');

                editButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const container = this.closest('div');
                        const text = container.querySelector('.description-text');
                        const input = container.querySelector('.description-input');
                        text.style.display = 'none';
                        input.style.display = 'inline-block';
                        input.focus();
                    });
                });

                const descriptionInputs = document.querySelectorAll('.description-input');

                descriptionInputs.forEach(input => {
                    input.addEventListener('blur', function() {
                        const container = this.closest('div');
                        const text = container.querySelector('.description-text');
                        const productId = text.dataset.productId;
                        const newDescription = this.value;

                        // 发送AJAX请求更新描述
                        fetch(`/admin/products/${productId}/update-description`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    description: newDescription
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    text.textContent = newDescription;
                                    this.style.display = 'none';
                                    text.style.display = 'inline-block';
                                } else {
                                    alert('更新失败，请重试');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('更新时发生错误');
                            });
                    });
                });


                // Supply Price 编辑功能
                const editSupplyPriceButtons = document.querySelectorAll('.edit-supply-price-btn');

                editSupplyPriceButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const container = this.closest('div');
                        const text = container.querySelector('.supply-price-text');
                        const input = container.querySelector('.supply-price-input');
                        text.style.display = 'none';
                        input.style.display = 'inline-block';
                        input.focus();
                    });
                });

                const supplyPriceInputs = document.querySelectorAll('.supply-price-input');

                supplyPriceInputs.forEach(input => {
                    input.addEventListener('blur', function() {
                        const container = this.closest('div');
                        const text = container.querySelector('.supply-price-text');
                        const productId = text.dataset.productId;
                        const newSupplyPrice = this.value;

                        // 发送AJAX请求更新供应价格
                        fetch(`/admin/products/${productId}/update-supply-price`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    supply_price: newSupplyPrice
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    text.textContent = newSupplyPrice;
                                    this.style.display = 'none';
                                    text.style.display = 'inline-block';

                                    // 更新 wholesale_price 显示
                                    const wholesalePriceText = document.querySelector(
                                        `.wholesale-price-text[data-product-id="${productId}"]`);
                                    if (wholesalePriceText) {
                                        wholesalePriceText.textContent = data.wholesale_price;
                                    }
                                } else {
                                    alert('更新失败，请重试');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('更新时发生错误');
                            });
                    });
                });

                // 商品名称编辑功能
                const editProductNameButtons = document.querySelectorAll('.edit-product-name-btn');

                editProductNameButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const container = this.closest('div');
                        const text = container.querySelector('.product-name-text');
                        const input = container.querySelector('.product-name-input');
                        text.style.display = 'none';
                        input.style.display = 'inline-block';
                        input.focus();
                    });
                });

                const productNameInputs = document.querySelectorAll('.product-name-input');

                productNameInputs.forEach(input => {
                    input.addEventListener('blur', function() {
                        const container = this.closest('div');
                        const text = container.querySelector('.product-name-text');
                        const productId = text.dataset.productId;
                        const newName = this.value;

                        // 发送AJAX请求更新商品名称
                        fetch(`/admin/products/${productId}/update-name`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    name: newName
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    text.textContent = newName;
                                    this.style.display = 'none';
                                    text.style.display = 'inline-block';
                                } else {
                                    alert('更新失败，请重试');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('更新时发生错误');
                            });
                    });
                });
            });
        </script>
    @endpush
@endsection
