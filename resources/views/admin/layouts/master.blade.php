<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>韓國易購管理後臺</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('backend/assets/js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>


    <script src="{{ asset('backend/assets/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('backend/assets/js/charts-pie.js') }}" defer></script>
    <!-- You need focus-trap.js to make the modal accessible -->
    <script src="{{ asset('backend/assets/js/focus-trap.js') }}" defer></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- select 2 css & js  --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>

<body>
    <div class="flex h-full bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('admin.layouts.sidebar')

        <div class="flex flex-col flex-1 w-full">

            {{-- header start --}}
            @include('admin.layouts.header')
            {{-- header end  --}}

            {{-- main start --}}
            @yield('content')
            {{-- main end  --}}
        </div>
    </div>
</body>

</html>
