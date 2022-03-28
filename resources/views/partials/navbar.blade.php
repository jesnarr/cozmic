<div class="relative bg-white border-b-2 border-gray-100 shadow-sm" x-data="{menu: false}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img class="h-10 w-auto sm:h-12" src="{{ asset('img/cozmic.png') }}" alt="">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button" @click="menu = true"  x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>

                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Home
                </a>
                <a href="#services" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Services
                </a>
                <a href="#features" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Mission & Vision
                </a>
                <a href="#about" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    About Us
                </a>
                <a href="#pricing" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Pricing
                </a>
            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                {{-- <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                    Sign in
                </a> --}}
                <a href="#contact" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-amber-400">
                   Contact Us
                </a>
            </div>
        </div>
    </div>

    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-10" x-cloak x-show="menu" x-transition:enter="transition ease-out origin-top-left duration-200" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition origin-top-left ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-12 w-auto" src="{{ asset('img/cozmic.png') }}" alt="Workflow">
                    </div>
                    <div class="-mr-2">
                        <button type="button" @click="menu = false" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                Home
                            </span>
                        </a>
                        <a href="#services" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                Services
                            </span>
                        </a>

                        <a href="#features" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                Mission & Vision
                            </span>
                        </a>

                        <a href="#about" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                About Us
                            </span>
                        </a>

                        <a href="#pricing" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                Pricing
                            </span>
                        </a>
                        
                        {{-- <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                Contact Us
                            </span>
                        </a> --}}
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <div>
                    <a href="#contact" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-amber-400 hover:bg-yellow-400">
                        Contact Us
                    </a>
                    {{-- <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="#" class="text-amber-400 font-bold hover:text-yellow-400">
                            Sign in
                        </a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
