@extends('admin.layouts.master')

@section('content')
<main class="mt-10 pl-6 h-screen pb-16 overflow-y-auto">
    <div class="p-4" data-theme="emerald">
        <form id="shop-order-form" method="POST" action="{{ route('user.shoporder.store') }}">
            @csrf
            <button class="btn btn-secondary">市場取貨訂單，儘量韓國時間23:00之前提交</button>
            <div>
                <input type="text" id="store-search" placeholder="檔口名稱" name="store_name" value="{{ $shoporder->store_name }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
                <div id="search-results" class="mt-2 bg-white shadow-lg"></div>
            </div>
            <div>
                <input type="text" id="building" placeholder="所屬大樓" name="building" value="{{ $shoporder->building }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="floor" placeholder="所屬樓層" name="floor" value="{{ $shoporder->floor }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="position" placeholder="位置" name="position" value="{{ $shoporder->position }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="phone" placeholder="電話" name="phone" value="{{ $shoporder->phone }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="phone" placeholder="狀態" name="status" value="{{ $shoporder->status }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="description" placeholder="其他說明" name="description" value="{{ $shoporder->description }}"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div class="flex justify-start">
                <button type="submit" class="mt-4 btn btn-primary">提交</button>
            </div>
        </form>
    </div>
</main>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('#store-search').on('input', function() {
        let query = $(this).val();
        if (query.length > 2) {
            $.ajax({
                url: '/AGWcvMZ/search',
                method: 'GET',
                data: { query: query },
                success: function(response) {
                    $('#search-results').empty();
                    response.forEach(function(store) {
                        $('#search-results').append('<div class="search-item" data-store=\'' + JSON.stringify(store) + '\'>' + 
                            store.store_name + ' - ' + store.building.name + store.floor + store.position + '</div>');
                    });
                    $('.search-item').on('click', function() {
                        let store = $(this).data('store');
                        $('#store-search').val(store.store_name);
                        $('#building').val(store.building ? store.building.name : '');
                        $('#floor').val(store.floor);
                        $('#position').val(store.position);
                        $('#phone').val(store.phone);
                        $('#description').val(store.description);
                        $('#search-results').empty();
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching stores:", error);
                }
            });
        } else {
            $('#search-results').empty();
        }
    });
});
</script>
@endsection
