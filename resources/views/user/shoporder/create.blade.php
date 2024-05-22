@extends('user.layouts.master')

@section('content')
    <main class="mt-10 pl-6 h-screen pb-16 overflow-y-auto">
        <div class="p-4" data-theme="emerald">

            <button class="btn btn-secondary">市場取貨訂單，儘量韓國時間23:00之前提交</button>
            <div>
                <input type="text" placeholder="檔口名稱" name="store_name"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" placeholder="所屬大樓" name="building"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" placeholder="所屬樓層" name="floor"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" placeholder="位置" name="position"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" placeholder="電話" name="phone"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" placeholder="其他說明" name="description"
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div class="flex justify-start">
                <button class="mt-4 btn btn-primary">提交</button>
            </div>
        </div>
    </main>
@endsection
