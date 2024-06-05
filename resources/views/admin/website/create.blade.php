@extends('admin.layouts.master')

@section('content')
<main class="mt-10 pl-6 h-screen pb-16 overflow-y-auto">
    <div class="p-4" data-theme="emerald">
        <form method="POST" action="{{ route('admin.websites.store') }}">
            @csrf
            <button class="btn btn-secondary">市場取貨訂單，儘量韓國時間23:00之前提交</button>
            
            <div>
                <input type="text" id="name" placeholder="名稱..." name="name" value=""
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="url" placeholder="網址..." name="url" value=""
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="description" placeholder="描述..." name="description" value=""
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
            <div>
                <input type="text" id="tag" placeholder="tag..." name="tag" value=""
                    class="mt-4 input input-bordered input-primary w-full max-w-xs" />
            </div>
         
            <div class="flex justify-start">
                <button type="submit" class="mt-4 btn btn-primary">提交</button>
            </div>
        </form>
    </div>
</main>
@endsection
