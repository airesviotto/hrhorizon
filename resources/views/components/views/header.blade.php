<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{route('landing-page')}}" class="flex items-center">
                <img src="{{asset('/images/logo.png')}}" class="mr-3 h-6 sm:h-9" alt="HR Horizon Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-black">{{ env("APP_NAME")}}</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button onclick="openModal('loginModal')" class="inline-flex justify-center items-center py-3 px-5 text-base font-small text-center text-white rounded-lg bg-sky-500 hover:bg-sky-800 focus:ring-4 focus:ring-sky-300 focus:ring-sky-700">
                    Log in
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    
                </button>
                
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-sky-500 rounded-lg lg:hidden  focus:outline-none focus:ring-2  text-gray-400 focus:ring-sky-600 cursor-pointer" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-sky-500 lg:bg-transparent lg:text-sky-700 lg:p-0 hover:text-black" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-sky-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-700 lg:p-0 text-gray-400 lg:hover:text-black hover:bg-gray-700 hover:text-white lg:hover:bg-transparent border-gray-700">Company</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-sky-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-700 lg:p-0 text-gray-400 lg:hover:text-black hover:bg-gray-700 hover:text-white lg:hover:bg-transparent border-gray-700">Marketplace</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-sky-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-700 lg:p-0 text-gray-400 lg:hover:text-black hover:bg-gray-700 hover:text-white lg:hover:bg-transparent border-gray-700">Features</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-sky-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-700 lg:p-0 text-gray-400 lg:hover:text-black hover:bg-gray-700 hover:text-white lg:hover:bg-transparent border-gray-700">Team</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-sky-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-700 lg:p-0 text-gray-400 lg:hover:text-black hover:bg-gray-700 hover:text-white lg:hover:bg-transparent border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

     {{-- Modais --}}
    <x-views.modal title="Member Login" id="loginModal">
        @include('auth.login')
    </x-views.modal>
</header>


