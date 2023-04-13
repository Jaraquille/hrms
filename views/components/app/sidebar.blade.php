<div class="bg-blue-600">
    <!-- Sidebar backdrop (mobile only) -->
    <div
        class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'"
        aria-hidden="true"
        x-cloak
    ></div>

    <!-- Sidebar -->
    <div
        id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-gray-700 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'"
        @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false"
        x-cloak="lg"
    >

        <!-- Sidebar header -->
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <div class="text-center">
                <img src="{{asset('images/logo.jpg')}}" class="w-24 rounded-full mx-auto" alt="">
                <h1 class="text-white mt-2">Health Record Management System</h1>
            </div>
            {{-- <a class="block" href="{{ route('dashboard') }}">
                <svg width="32" height="32" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%" />
                            <stop stop-color="#A5B4FC" offset="100%" />
                        </linearGradient>
                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%" />
                            <stop stop-color="#38BDF8" offset="100%" />
                        </linearGradient>
                    </defs>
                    <rect fill="#6366F1" width="32" height="32" rx="16" />
                    <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5" />
                    <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)" />
                    <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)" />
                </svg>
            </a> --}}
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                {{-- <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
                </h3> --}}
                <ul class="mt-3">
                    <!-- Dashboard -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['dashboard'])){{ 'bg-slate-900' }}@endif">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['dashboard'])){{ 'hover:text-slate-200' }}@endif" href="{{route('dashboard')}}">
                            <div class="flex items-center">
                                {{-- home icon fontawesome --}}
                                <i class="fas  w-8 h-8 fa-home text-2xl @if(in_array(Request::segment(1), ['dashboard'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Home</span>
                            </div>
                        </a>
                    </li>
                    
                    @if (Auth::user()->user_type == 1)
                        <!-- Profile -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['patient-profile'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['patient-profile'])){{ 'hover:text-slate-200' }}@endif" href="{{route('patient-profile')}}">
                                <div class="flex items-center">
                                    {{-- profile icon from fontawesome --}}
                                    <i class="fas  w-8 h-8 fa-user text-2xl @if(in_array(Request::segment(1), ['patient-profile'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Profile</span>
                                </div>
                            </a>
                        </li>
                        <!-- Medical-record -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['patient-medical'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['patient-medical'])){{ 'hover:text-slate-200' }}@endif" href="{{route('patient-medical')}}">
                                <div class="flex items-center">
                                    {{-- medical record icon from fontawesome --}}
                                    <i class="fas  w-8 h-8 fa-file-medical text-2xl @if(in_array(Request::segment(1), ['patient-medical'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Medical Record</span>
                                </div>
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->user_type > 1)
                        <!-- Patient Info -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['patient-info'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['patient-info'])){{ 'hover:text-slate-200' }}@endif" href="{{route('patient-info')}}">
                                <div class="flex items-center">
                                    {{-- patient-info icon fontawesome --}}
                                    <i class="fas  w-8 h-8 fa-user text-2xl @if(in_array(Request::segment(1), ['patient-info'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Patient Info</span>
                                </div>
                            </a>
                        </li>
                        <!-- Purok -->
                        {{-- <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['purok'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['purok'])){{ 'hover:text-slate-200' }}@endif" href="#">
                                <div class="flex items-center">
                                    <i class="fas  w-8 h-8 fa-users text-2xl @if(in_array(Request::segment(1), ['purok'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Purok</span>
                                </div>
                            </a>
                        </li> --}}
                        <!-- Calendar -->
                        {{-- <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="#">
                                <div class="flex items-center">
                                    <i class="fas  w-8 h-8 fa-calendar text-2xl @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Calendar</span>
                                </div>
                            </a>
                        </li> --}}
                        <!-- Vital-statistic -->
                        {{-- <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['vital-statistic'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['vital-statistic'])){{ 'hover:text-slate-200' }}@endif" href="#">
                                <div class="flex items-center">
                                    <i class="fas  w-8 h-8 fa-heartbeat text-2xl @if(in_array(Request::segment(1), ['vital-statistic'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Vital Statistic</span>
                                </div>
                            </a>
                        </li> --}}
                        <!-- Generate Timetable -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        {{-- <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 1h22v23H1z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                        </svg> --}}
                                        {{-- <svg class="shrink-0 w-8 h-8" viewBox="0 0 24 24">
                                            <path class="fill-current @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                                        </svg> --}}
                                        {{-- service icon from fontawesome --}}
                                        <i class="fas  w-8 h-8 fa-cloud-upload-alt text-2xl @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Services</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['prenatal-search', 'prenatal-form', 'prenatal', 'family-planning', 'family-planning-search', 'family-planning-form', 'immunization', 'immunization-form', 'print'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    {{-- Family planning --}}
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['family-planning'])){{ 'bg-slate-600' }}@endif">
                                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['family-planning'])){{ 'hover:text-slate-200' }}@endif" href="{{route('family-planning')}}">
                                            <div class="flex items-center">
                                                {{-- family icon fontawesome --}}
                                                {{-- <i class="fas  w-8 h-8 fa-baby text-2xl @if(in_array(Request::segment(1), ['family-planning'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i> --}}
                                                <span class="text-sm font-medium ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Family Planning</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Prenatal -->
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['prenatal'])){{ 'bg-slate-600' }}@endif">
                                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['prenatal'])){{ 'hover:text-slate-200' }}@endif" href="{{route('prenatal')}}">
                                            <div class="flex items-center">
                                                {{-- pre-natal icon fontawesome --}}
                                                {{-- <i class="fas  w-8 h-8 fa-baby text-2xl @if(in_array(Request::segment(1), ['prenatal'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i> --}}
                                                <span class="text-sm font-medium ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pre-natal Record</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Immunization -->
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['immunization'])){{ 'bg-slate-600' }}@endif">
                                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['immunization'])){{ 'hover:text-slate-200' }}@endif" href="{{route('immunization')}}">
                                            <div class="flex items-center">
                                                {{-- pre-natal icon fontawesome --}}
                                                {{-- <i class="fas  w-8 h-8 fa-baby text-2xl @if(in_array(Request::segment(1), ['immunization'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i> --}}
                                                <span class="text-sm font-medium ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Immunization</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Print -->
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['print'])){{ 'bg-slate-600' }}@endif">
                                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['print'])){{ 'hover:text-slate-200' }}@endif" href="{{route('print')}}">
                                            <div class="flex items-center">
                                                {{-- pre-natal icon fontawesome --}}
                                                {{-- <i class="fas  w-8 h-8 fa-baby text-2xl @if(in_array(Request::segment(1), ['print'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif"></i> --}}
                                                <span class="text-sm font-medium ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Print</span>
                                            </div>
                                        </a>
                                    </li>
                                    {{-- <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('pref.department.create')){{ '!text-indigo-500' }}@endif" href="{{ route('pref.department.create') }}">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Add Department</span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                    @endif

                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>