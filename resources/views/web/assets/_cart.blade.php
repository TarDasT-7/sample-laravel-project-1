<style>
    #sidebar {
        transition: transform 0.2s ease, opacity 0.2s ease;
        transform: translateX(100%);
        opacity: 0;
    }

    #sidebar.show {
        transform: translateX(0);
        opacity: 1;
    }
</style>

<div id="sidebar" class="hidden fixed inset-y-0 right-0 w-[300px] bg-c_black z-50 shadow-lg py-4 px-4">
    <div class="w-full h-full bg-c_dark rounded">
        <div class="flex justify-between items-center w-full h-[50px] px-2 ">
            <div class="text-lg font-bold inter text-c_light">
                <h1>Your Cart / 999 items</h1>
            </div>
            <div>
                <button class="hover:opacity-75 duration-200" id="hide-cart">
                    <svg fill="red" width="25" height="25" viewBox="0 0 0.5 0.5"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M.353.103a.031.031 0 1 1 .044.044L.294.25l.103.103a.031.031 0 0 1-.044.044L.25.294.147.397A.031.031 0 0 1 .103.353L.206.25.103.147A.031.031 0 0 1 .147.103L.25.206z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-[90%] h-[2px] mx-auto bg-c_yellow my-1"></div>
        <div class="w-full max-h-[650px] px-2 py-1 overflow-y-auto custom-scrollbar">
            <div class="flex w-full h-full ">
                <ul class="w-full h-full">
                    <li class="w-full h-32 p-1 border-b border-c_light">
                        <div class="flex w-full h-full p-1">
                            <div class="w-1/2 h-full bg-c_light group overflow-hidden rounded">
                                <img src="https://mockup.love/wp-content/uploads/edd/2017/08/Front-Hardcover-Book-Mockup-PSD.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div
                                class="flex flex-col items-center justify-end gap-2 w-1/2 h-full group overflow-hidden">
                                <div class="flex text-center inter font-bold text-c_light px-2 text-sm">
                                    <h1>book name for test and more </h1>
                                </div>
                                <div class="flex inter items-center font-bold text-c_light">
                                    <h1 class=" text-lg">$25.99</h1>
                                    <span class="ml-2 text-sm">X</span>
                                    <h1 class="text-sm">5</h1>
                                </div>
                                <div class="hover:opacity-75 duration-200">
                                    <button class="bg-c_red py-1 inter px-4 rounded text-c_light font-bold">
                                        remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="w-full h-32 p-1 border-b border-c_light">
                        <div class="flex w-full h-full p-1">
                            <div class="w-1/2 h-full bg-c_light group overflow-hidden rounded">
                                <img src="https://mockup.love/wp-content/uploads/edd/2017/08/Front-Hardcover-Book-Mockup-PSD.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div
                                class="flex flex-col items-center justify-end gap-2 w-1/2 h-full group overflow-hidden">
                                <div class="flex text-center inter font-bold text-c_light px-2 text-sm">
                                    <h1>book name for test and more </h1>
                                </div>
                                <div class="flex inter items-center font-bold text-c_light">
                                    <h1 class=" text-lg">$25.99</h1>
                                    <span class="ml-2 text-sm">X</span>
                                    <h1 class="text-sm">5</h1>
                                </div>
                                <div class="hover:opacity-75 duration-200">
                                    <button class="bg-c_red py-1 inter px-4 rounded text-c_light font-bold">
                                        remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="w-full h-32 p-1 border-b border-c_light">
                        <div class="flex w-full h-full p-1">
                            <div class="w-1/2 h-full bg-c_light group overflow-hidden rounded">
                                <img src="https://mockup.love/wp-content/uploads/edd/2017/08/Front-Hardcover-Book-Mockup-PSD.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div
                                class="flex flex-col items-center justify-end gap-2 w-1/2 h-full group overflow-hidden">
                                <div class="flex text-center inter font-bold text-c_light px-2 text-sm">
                                    <h1>book name for test and more </h1>
                                </div>
                                <div class="flex inter items-center font-bold text-c_light">
                                    <h1 class=" text-lg">$25.99</h1>
                                    <span class="ml-2 text-sm">X</span>
                                    <h1 class="text-sm">5</h1>
                                </div>
                                <div class="hover:opacity-75 duration-200">
                                    <button class="bg-c_red py-1 inter px-4 rounded text-c_light font-bold">
                                        remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="w-full h-32 p-1 border-b border-c_light">
                        <div class="flex w-full h-full p-1">
                            <div class="w-1/2 h-full bg-c_light group overflow-hidden rounded">
                                <img src="https://mockup.love/wp-content/uploads/edd/2017/08/Front-Hardcover-Book-Mockup-PSD.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div
                                class="flex flex-col items-center justify-end gap-2 w-1/2 h-full group overflow-hidden">
                                <div class="flex text-center inter font-bold text-c_light px-2 text-sm">
                                    <h1>book name for test and more </h1>
                                </div>
                                <div class="flex inter items-center font-bold text-c_light">
                                    <h1 class=" text-lg">$25.99</h1>
                                    <span class="ml-2 text-sm">X</span>
                                    <h1 class="text-sm">5</h1>
                                </div>
                                <div class="hover:opacity-75 duration-200">
                                    <button class="bg-c_red py-1 inter px-4 rounded text-c_light font-bold">
                                        remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-[90%] h-[2px] mx-auto bg-c_yellow my-1"></div>
        <div class="flex flex-col gap-4 items-center justify-center w-full h-auto px-2 my-5">
            <div
                class="flex text-md font-bold inter text-c_black bg-c_light items-center justify-center hover:opacity-75 duration-200 w-full h-10 rounded">
                <h1 class="capitalize">total price:</h1>
                <h1>$95000.99</h1>
            </div>
            <div
                class="flex text-lg font-bold inter text-c_light bg-c_blue hover:opacity-75 duration-200 items-center justify-center w-full h-10 rounded">
                <a href="/cart" class="capitalize">
                    <h1>manage</h1>
                </a>
            </div>
            <div
                class="flex text-lg font-bold inter text-c_black bg-c_yellow hover:opacity-75 duration-200 items-center justify-center w-full h-10 rounded">
                <a href="/cart/checkout" class="capitalize">
                    <h1>checkout</h1>
                </a>
            </div>
        </div>
    </div>
</div>
