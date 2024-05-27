@extends('admin.layouts.master')

@section('content')
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">

                <script src="//unpkg.com/alpinejs"></script>
                <div x-data="{
                    openTab: 1,
                    activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
                    inactiveClasses: 'text-blue-500 hover:text-blue-700'
                }" class="p-6">
                    <ul class="flex border-b">
                        <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                            <a href="#" :class="openTab === 1 ? activeClasses : inactiveClasses"
                                class="bg-white inline-block py-2 px-4 font-semibold">
                                用戶基本信息
                            </a>
                        </li>
                        <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                            <!-- Set active class by using :class provided by Alpine -->
                            <a href="#" :class="openTab === 2 ? activeClasses : inactiveClasses"
                                class="bg-white inline-block py-2 px-4 font-semibold">
                                存款
                            </a>
                        </li>
                        <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                            <a href="#" :class="openTab === 3 ? activeClasses : inactiveClasses"
                                class="bg-white inline-block py-2 px-4 font-semibold">
                                扣款
                            </a>
                        </li>
                    </ul>
                    <div class="w-full">
                        <div x-show="openTab === 1">

                            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                                <div class="w-full">


                                    {{-- update profile  --}}
                                    <form action="{{ route('admin.users.update', $user->id) }}" class="mt-6 w-full"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf

                                        @method('PUT')

                                        <label class="block text-sm">

                                            <!-- focus-within sets the color for the icon when input is focused -->
                                            <div
                                                class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                                <img class="w-24 h-24 rounded-full"
                                                    src="{{ asset("/storage/{$user->image}") }}" alt="">
                                            </div>
                                            <div class="mt-2">
                                                <input type="file" name="image"
                                                    class="mt-2 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" />

                                            </div>

                                        </label>

                                        <label class="block text-sm  mt-4">

                                            <div>
                                                <span class="text-gray-700 dark:text-gray-400">用户名稱</span>
                                                <!-- focus-within sets the color for the icon when input is focused -->
                                                <div
                                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                                    <input
                                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                        value="{{ $user->name }}" name="name" />
                                                </div>
                                            </div>
                                        </label>

                                        <label class="block text-sm  mt-4">

                                            <div>
                                                <span class="text-gray-700 dark:text-gray-400">用户邮箱</span>
                                                <!-- focus-within sets the color for the icon when input is focused -->
                                                <div
                                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                                    <input
                                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                        value="{{ $user->email }}" name="email" />
                                                </div>
                                            </div>
                                        </label>

                                        <label class="block text-sm  mt-4">

                                            <div>
                                                <span class="text-gray-700 dark:text-gray-400">用户角色</span>
                                                <!-- focus-within sets the color for the icon when input is focused -->
                                                <div
                                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                                    <input
                                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                        value="{{ $user->role }}" name="role" />
                                                </div>
                                            </div>
                                        </label>

                                        <label class="block text-sm  mt-4">

                                            <div>
                                                <span class="text-gray-700 dark:text-gray-400">用户电话</span>
                                                <!-- focus-within sets the color for the icon when input is focused -->
                                                <div
                                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                                    <input
                                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                        value="{{ $user->phone }}" name="phone" />
                                                </div>
                                            </div>
                                        </label>

                                        <label class="block text-sm  mt-4">

                                            <div>
                                                <span class="text-gray-700 dark:text-gray-400">用户余额</span>
                                                <!-- focus-within sets the color for the icon when input is focused -->
                                                <div
                                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                                    <input
                                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                        value="{{ $user->balance }}" name="balance" />
                                                </div>
                                            </div>
                                        </label>

                                        <label class="block text-sm  mt-4">

                                            <div>
                                                <span class="text-gray-700 dark:text-gray-400">用户状态</span>
                                                <!-- focus-within sets the color for the icon when input is focused -->
                                                <div
                                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                                    <input
                                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                        value="{{ $user->status }}" name="status" />
                                                </div>
                                            </div>
                                        </label>
                                        <!-- You should use a button here, as the anchor is only used for the example  -->
                                        <button
                                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                            更新用户信息
                                        </button>
                                    </form>

                                    <hr class="my-8" />

                                </div>
                            </div>
                        </div>
                        <div x-show="openTab === 2">
                            <div class="flex items-center justify-center p-12">
                                <!-- Author: FormBold Team -->
                                <div class="mx-auto w-full max-w-[550px] bg-white">
                                    <form action="{{ route('admin.users.deposit', $user->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-5">
                                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                                客戶名稱
                                            </label>
                                            <input type="text" value="{{ $user->name }}" name="name" id="name" placeholder="Full Name"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                        <div class="mb-5">
                                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                                充值金額
                                            </label>
                                            <input type="number" name="amount" id="phone" placeholder="充值金額..."
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>

                                        <div class="mb-5">
                                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                                說明
                                            </label>
                                            <input type="text" name="meta" id="phone" placeholder="金額變動說明..."
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>

                            
                                        <div>
                                            <button
                                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                                充值
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div x-show="openTab === 3">
                            <div class="flex items-center justify-center p-12">
                                <!-- Author: FormBold Team -->
                                <div class="mx-auto w-full max-w-[550px] bg-white">
                                    <form action="{{ route('admin.users.force-withdraw', $user->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf


                                        <div class="mb-5">
                                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                                客戶名稱
                                            </label>
                                            <input type="text" value="{{ $user->name }}" name="name" id="name" placeholder="Full Name"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                        <div class="mb-5">
                                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                                扣款金額
                                            </label>
                                            <input type="number" name="amount" id="phone" placeholder="扣款金額..."
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>

                                        <div class="mb-5">
                                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                                說明
                                            </label>
                                            <input type="text" name="meta" id="phone" placeholder="金額變動說明..."
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>

                            
                                        <div>
                                            <button
                                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                                充值
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
