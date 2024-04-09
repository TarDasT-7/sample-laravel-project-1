<div class="flex w-full h-[75px] text-c_dark px-8">
    <div class="flex items-center justify-start w-1/6 h-full">
        <a href="/">
            <h1 class="font-bold text-3xl handlee">Some logo for test</h1>
        </a>
    </div>
    <div class="flex w-4/6 h-full items-center justify-center" style="direction: rtl">
        <ul class="flex gap-6 capitalize inter font-bold text-lg">
            <li class="hover:opacity-75 duration-200"><a href="/">home</a></li>
            <li class="hover:opacity-75 duration-200"><a href="/categories">categories</a></li>
            <li class="hover:opacity-75 duration-200"><a href="/search">search</a></li>
            <li class="hover:opacity-75 duration-200"><a href="#contact-us" class="scroll-link">contact</a></li>
            <li class="hover:opacity-75 duration-200"><a href="#about-us" class="scroll-link">about</a></li>
        </ul>
    </div>
    <div class="flex w-1/6 h-full items-center justify-start" style="direction: rtl">
        <ul class="flex gap-6 capitalize inter font-bold">
            <li>
                @auth
                    <button id="dropdown-user" data-dropdown-toggle="dropdown" type="button">
                        <div class="flex items-center gap-2 text-lg">
                            <div>{{ auth()->user()->fullname }}</div>
                            <div
                                class="flex items-end justify-center w-[40px] h-[40px] rounded-full bg-c_black border-2 border-c_black p-1">
                                <svg fill="#191919" width="30px" height="30px" viewBox="0 0 24 24"id="user"
                                    data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                                    <path id="primary"
                                        d="M21,20a2,2,0,0,1-2,2H5a2,2,0,0,1-2-2,6,6,0,0,1,6-6h6A6,6,0,0,1,21,20Zm-9-8A5,5,0,1,0,7,7,5,5,0,0,0,12,12Z"
                                        style="fill: #EEEDEB;"></path>
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div id="dropdown" class="z-10 hidden bg-c_black divide-y divide-gray-100 rounded shadow w-44">
                        <ul class="py-2 px-1 text-sm text-c_light text-left" aria-labelledby="dropdown-user">
                            <li>
                                <a href="/"
                                    class="block rounded px-4 py-2 hover:bg-c_light hover:text-c_dark duration-200">Dashboard</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="block rounded px-4 py-2 hover:bg-c_light hover:text-c_dark duration-200">Cart</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button
                                        class="inline w-full text-end rounded px-4 py-2 text-c_red hover:bg-c_red hover:text-c_light duration-200">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <button data-modal-target="login-modal" data-modal-toggle="login-modal">
                        <div class="flex items-center gap-2 text-lg">
                            <div>login</div>
                            <div
                                class="flex items-end justify-center w-[40px] h-[40px] rounded-full bg-c_black border-2 border-c_black p-1">
                                <svg fill="#191919" width="30px" height="30px" viewBox="0 0 24 24"id="user"
                                    data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                                    <path id="primary"
                                        d="M21,20a2,2,0,0,1-2,2H5a2,2,0,0,1-2-2,6,6,0,0,1,6-6h6A6,6,0,0,1,21,20Zm-9-8A5,5,0,1,0,7,7,5,5,0,0,0,12,12Z"
                                        style="fill: #EEEDEB;"></path>
                                </svg>
                            </div>
                        </div>
                    </button>
                @endauth
            </li>
            <li>
                <button id="show-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="40px" height="40px"
                        viewBox="0 0 197.7 166" preserveAspectRatio="xMinYMax meet" data-hook="svg-icon-2">
                        <path
                            d="M197.9 55.9L169.9 127.4 64.5 127.4 27.6 29.8 0 29.8 0.2 16.7 36.5 16.7 73.4 114.3 160.9 114.3 183 55.9">
                        </path>
                        <circle cx="143.8" cy="153" r="13"></circle>
                        <circle cx="90.8" cy="153" r="13"></circle>
                        <text data-hook="items-count" class="text-[4.5rem]" text-anchor="middle" x="116" y="35"
                            dy=".48em">
                            0
                        </text>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
</div>


<!-- login modal -->
<div id="login-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-c_light rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-c_black inter">
                    Login
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="login-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white inter">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="forexample@gmail.com" required />
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white inter">Your
                            password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div class="flex justify-between">
                        <a href="#" class="text-sm text-blue-700 hover:underline ">Lost
                            Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                        to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered?
                        <span data-modal-target="register-modal" data-modal-toggle="register-modal"
                            data-modal-hide="login-modal"
                            class="text-blue-700 hover:underline dark:text-blue-500 cursor-pointer">Create account
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- register modal -->
<div id="register-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-c_light rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-c_black inter">
                    register
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="register-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="fullname"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white inter">Your
                            full name</label>
                        <input type="text" name="fullname" id="full-name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="amir tardasti" required />
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white inter">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="forexample@gmail.com" required />
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white inter">Your
                            password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Have you already registered?
                        <span data-modal-target="login-modal" data-modal-toggle="login-modal"
                            data-modal-hide="register-modal"
                            class="text-blue-700 hover:underline dark:text-blue-500 cursor-pointer">login
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
