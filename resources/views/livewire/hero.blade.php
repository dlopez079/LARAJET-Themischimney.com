<div x-data="{ isOpen: false }"
    class="bg-white">
    <header>
        <div class="relative bg-white">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:space-x-10 lg:px-8">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="/">
                        <span class="sr-only">Themis</span>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 298.83 28.68" enable-background="new 0 0 298.83 28.68" xml:space="preserve">
                            <path fill="#020202" stroke="#000000" stroke-miterlimit="10" d="M43.68,1.8l0.85,12.14L34.9,6.25h-5.87v14.79l9.22,5.87H6.85
                            l9.22-5.87V6.25H10.2l-9.62,7.69L1.42,1.8H43.68z M74.91,1.8h29.32l-9.22,5.85v13.37l9.22,5.89H74.91l7.12-5.89v-4.1H67.48v4.1
                            l7.12,5.89H45.3l9.22-5.89V7.65L45.3,1.8h29.3l-7.12,5.85v3h14.55v-3L74.91,1.8z M154.05,1.8v10.85l-9.42-6.71h-17.71v5.48h9.73
                            l6.92-2.94v11.33l-6.92-3.42h-9.73v5.56h17.71l10.15-7.21v12.18h-50.05l9.22-5.81V7.63l-9.22-5.83H154.05z M183.4,1.8l5.04,11.4
                            l4.76-11.4h28.14l-9.22,5.85v13.39l9.22,5.87h-30.48l8.7-5.87V4.76l-9.38,22.15h-6.79l-9.42-21.34v15.47l8.65,5.87h-24.96l9.22-5.87
                            V7.65l-9.22-5.85H183.4z M222.71,1.8h30.96l-9.2,5.85v13.39l9.2,5.87h-30.96l9.22-5.87V7.65L222.71,1.8z M258.42,27.9V15.32
                            c2.24,2.58,5.33,4.59,9.26,6.03c3.93,1.45,8.27,2.17,13.01,2.17c4.99,0,7.49-0.67,7.49-2c0-0.63-0.33-1.05-1-1.26
                            c-0.67-0.21-2.27-0.42-4.81-0.62l-5.48-0.42c-6.38-0.48-10.88-1.24-13.52-2.3c-4.19-1.68-6.29-4.06-6.29-7.14
                            c0-2.89,1.41-5.16,4.22-6.81c2.81-1.64,6.69-2.46,11.63-2.46c4.76,0,9.03,0.66,12.8,1.97l1.05,0.37l7.04-2.17v10.61
                            c-6.59-4.29-13.6-6.44-21.04-6.44c-4.49,0-6.73,0.67-6.73,2c0,0.63,0.55,1.1,1.64,1.42c1.09,0.32,3.15,0.6,6.16,0.85l5.33,0.42
                            c6.7,0.54,11.18,1.35,13.45,2.43c3.8,1.81,5.7,4.24,5.7,7.28c0,2.72-1.51,4.89-4.52,6.5c-3.01,1.61-7.05,2.42-12.13,2.42
                            c-5.45,0-11.02-0.9-16.74-2.7L258.42,27.9z"/>
                        </svg>
                    </a>
                </div>

                <!-- Hamburger Menu -->
                <div 
                    x-show="!isOpen"
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="-mr-2 -my-2 md:hidden"
                    >

                    <button 
                    @click="isOpen = !isOpen"
                    type="button" 
                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500" 
                    aria-expanded="false"
                    >
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="#services" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Services
                    </a>

                    <a href="#testimonials" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Testimonials
                    </a>

                    <a href="#about" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        About
                    </a>

                    <a href="#contact" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Contact
                    </a>
                </nav>
                <div class="hidden sm:flex items-center justify-end md:flex-1 lg:w-0">

                    @auth
                    <a href="{{ url('/dashboard') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900 hidden">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900 hidden">
                        Sign in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700 hidden">
                        Register
                    </a>
                    @endif
                    @endif

                </div>
            </div>

            <!--
            Mobile menu, show/hide based on mobile menu state.

            Entering: "duration-200 ease-out"
              From: "opacity-0 scale-95"
              To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
              From: "opacity-100 scale-100"
              To: "opacity-0 scale-95"
          -->
            <div  
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="font-large"></h1>
                            </div>
                            <div class="-mr-2">
                                <button 
                                @click="isOpen = !isOpen"
                                    type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div 
                            class="mt-6">
                            <nav class="grid grid-cols-1 gap-7">
                                <a href="#services" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-red-600 text-white">
                                        <!-- Heroicon name: outline/briefcase -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 text-base font-medium text-gray-900">
                                        Services
                                    </div>
                                </a>

                                <a href="#testimonials" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-red-600 text-white">
                                        <!-- Heroicon name: outline/annotation -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 text-base font-medium text-gray-900">
                                        Testimonials
                                    </div>
                                </a>

                                <a href="#about" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-red-600 text-white">
                                        <!-- Heroicon name: outline/Book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 text-base font-medium text-gray-900">
                                        About
                                    </div>
                                </a>

                                <a href="#contact" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-red-600 text-white">
                                        <!-- Heroicon name: outline/Phone-Out -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3h5m0 0v5m0-5l-6 6M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 text-base font-medium text-gray-900">
                                        Contact
                                    </div>
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="py-6 px-5">
                        <div class="grid grid-cols-2 gap-4 hidden">
                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                Pricing
                            </a>

                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                Partners
                            </a>

                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                Company
                            </a>
                        </div>
                        <div class="mt-6">
                            <a href="#" class=" hidden w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">
                                Sign up
                            </a>
                            <p class="mt-6 text-center text-base font-medium text-gray-500">
                                Employees
                                <a href="/login" class="text-gray-900">
                                    Sign in
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div>
            <!-- Hero card -->
            <div class="relative">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                        <div class="absolute inset-0">
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1527103288388-eb522e3d9810?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2702&q=80" alt="Themis Chimney Main Image">
                            <div class="absolute inset-0 bg-red-700 mix-blend-multiply"></div>
                        </div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                <span class="block text-white">Take control of your</span>
                                <span class="block text-red-200">Chimney Designs</span>
                            </h1>
                            <p class="mt-6 max-w-lg mx-auto text-center text-xl text-red-200 sm:max-w-3xl">
                                We help you keep your Chimney safe and operational with exceptional designs and superb maintenance detailed to your needs and desires.
                            </p>
                            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                    <a href="#services" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-red-700 bg-white hover:bg-red-50 sm:px-8">
                                        Learn More
                                    </a>
                                    <a href="#contact" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
</div>