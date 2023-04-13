<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles
        {{-- font awesome cdn --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            main {
                position: relative;
                height: 100%;
            }

            .background-image {
                background-image: url({{asset('images/hospital.jpg')}});
                background-size: cover;
                background-position: center;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                filter: blur(5px);
                z-index: -1;
            }

            #home {
                position: relative;
                z-index: 1;
            }







            /* Chart */
            #kpi{
            height: 400px;
            width: 100%;
            border: 1px solid black;
            background-color: white;
            }
            .pieLegend li span {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin-right: 5px;
            }

            #top10Legend {
            display: inline-block;
            }

            #container {
            display: inline-block;
            height: 50%;
            width: 50%;
            }

            #top10Legend>ul{
            list-style:none;
            }




            .z-full {
                z-index: 9999;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="font-inter antialiased bg-slate-100 text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"    
    >

        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>

        <!-- Page wrapper -->
        <div class="flex h-screen overflow-hidden">

            <x-app.sidebar />

            <!-- Content area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif" x-ref="contentarea">

                <x-app.header />

                <main>
                    {{ $slot }}
                </main>

            </div>

        </div>

        @livewireScripts
    </body>
</html>
