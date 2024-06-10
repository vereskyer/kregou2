@extends('admin.layouts.master')

@section('content')
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">

                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                            添加新的檔口
                        </h1>

                        {{-- update profile  --}}
                        <form action="{{ route('admin.store.store') }}" class="mt-6 w-full" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Image</span>
                                <!-- focus-within sets the color for the icon when input is focused -->
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    {{-- <img class="w-12 h-12 rounded-full" src="{{ asset(Auth::user()->image) }}" alt=""> --}}
                                </div>
                                <input type="file" name="image" class="" />
                            </label>

                            <label class="block text-sm  mt-4">

                                <div>
                                    <span class="text-gray-700 dark:text-gray-400">檔口名稱</span>
                                    <!-- focus-within sets the color for the icon when input is focused -->
                                    <div
                                        class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                        <input
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                            value="" name="store_name" />
                                    </div>
                                </div>
                            </label>

                            <label class="block text-sm mt-4">
                                <div class="flex space-x-4 w-full">
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">所屬大樓</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="mt-2 relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <select
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select"
                                                name="building_id" id="building-select">
                                                <option value="" disabled selected>请选择大楼</option>
                                                @foreach ($buildings as $building)
                                                    <option value="{{ $building->id }}">{{ $building->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <button
                                                class="mt-6 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                添加新的大樓
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </label>
                            <label class="block text-sm mt-4">
                                <div class="flex space-x-4 w-full">

                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">樓層</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <select
                                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select"
                                            name="floor">
                                            <option value="-3">B3</option>
                                            <option value="-2">B2</option>
                                            <option value="-1">B1</option>
                                            <option value="1F" selected>1F</option>
                                            <option value="2F">2F</option>
                                            <option value="3F">3F</option>
                                            <option value="4F">4F</option>
                                            <option value="5F">5F</option>
                                            <option value="6F">6F</option>
                                            <option value="7F">7F</option>
                                            <option value="8F">8F</option>
                                            <option value="9F">9F</option>
                                            <option value="10F">10F</option>
                                            <!-- You can add more options as needed -->
                                        </select>
                                    </div>
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">位置</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="position" />
                                        </div>
                                    </div>

                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">其他說明</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="description" />
                                        </div>
                                    </div>
                                </div>

                            </label>

                            <label class="block text-sm mt-4">
                                <div class="flex space-x-4 w-full">
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">座機</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="phone" />
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">手機</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="handphone" />
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">kakao</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="kakao" />
                                        </div>
                                    </div>
                                </div>

                            </label>

                            <label class="block text-sm mt-4">
                                <div class="flex space-x-4 w-full">
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">微信</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="wechat" />
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">Line</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="line" />
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">IG</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="instagram" />
                                        </div>
                                    </div>
                                </div>

                            </label>

                            <label class="block text-sm mt-4">
                                <div class="flex space-x-4 w-full">
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">網站</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="website" />
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">story</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="" name="ks_story" />
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-gray-700 dark:text-gray-400">price</span>
                                        <!-- focus-within sets the color for the icon when input is focused -->
                                        <div
                                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                            <input
                                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                                value="1000" name="price" />
                                        </div>
                                    </div>

                                </div>

                            </label>


                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <button
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                添加
                            </button>
                        </form>

                        <hr class="my-8" />

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#building-select').select2({
                    placeholder: "请选择大楼",
                    allowClear: true
                });
            });
        </script>
    </div>
@endsection
