@extends('web.layout')
@section('content')
    <main class="p-8">
        {{-- start wallpaper component --}}
        <div class="w-full h-[550px] bg-c_yellow rounded bg-cover bg-center bg-no-repeat mb-10"
            style="background-image: url('{{ asset('files/tem/wallpaper.jpg') }}');">
            <div class=" flex w-2/5 h-full justify-center items-center farsan font-semibold text-[4rem] text-c_black p-2">
                <h1 class="flex flex-col ">
                    <span>A SOFA,</span>
                    <span>A GOOD</span>
                    <span>BOOK,</span>
                    <span>AND YOU</span>
                </h1>
            </div>
        </div>
        {{-- end wallpaper component --}}

        {{-- start best sellers box component --}}
        <div class="flex flex-col w-full h-[550px] mb-10">
            <div class="flex flex-col gap-3 w-full h-[150px] items-center justify-center">
                <h1 class="inter font-bold text-xl capitalize">amazon's</h1>
                <h1 class="handlee font-bold text-5xl capitalize">Best Sellers</h1>
            </div>
            <div class="flex flex-col w-full h-[400px] bg-c_black rounded">
                <div class="grid grid-rows-1 grid-cols-7 w-full h-[350px] gap-4 px-4 py-4">
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://mockup.love/wp-content/uploads/edd/2017/08/Front-Hardcover-Book-Mockup-PSD.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://unblast.com/wp-content/uploads/2020/02/Softcover-Book-Mockup.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://img.freepik.com/free-vector/good-paper-wattpad-book-cover_23-2149452379.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://www.hoxtonminipress.com/cdn/shop/files/OG-South_London-Cover_280x@2x.jpg?v=1710245383"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://cdn.shopify.com/s/files/1/0338/4872/1545/products/7_a77b8e7b-3d26-4c2c-9a5b-4db3c61de5a1_512x512.jpg?v=1605776501"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://media.newyorker.com/photos/5d9d3440679597000859430d/master/w_1600%2Cc_limit/191021_r35171web.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://mockupboard.com/wp-content/uploads/2020/05/Book_Cover_Free_MockUp_mockupboard.com_-1024x682.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                </div>
                <div class="flex items-center px-4 w-full h-[50px]">
                    <a href="{{route("offers.slug", "best-sellers")}}">
                        <div
                            class="rounded inter font-bold text-sm bg-c_yellow py-2 px-4 opacity-90 hover:opacity-100 duration-200">
                            Show All</div>
                    </a>
                </div>
            </div>
        </div>
        {{-- end best sellers box component --}}

        {{-- start new books box component --}}
        <div class="flex flex-col w-full h-[550px] mb-10">
            <div class="flex flex-col gap-3 w-full h-[150px] items-center justify-center">
                <h1 class="inter font-bold text-xl capitalize">amazon's</h1>
                <h1 class="handlee font-bold text-5xl capitalize">new Books</h1>
            </div>
            <div class="flex flex-col w-full h-[400px] bg-c_black rounded">
                <div class="grid grid-rows-1 grid-cols-7 w-full h-[350px] gap-4 px-4 py-4">
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://mockup.love/wp-content/uploads/edd/2017/08/Front-Hardcover-Book-Mockup-PSD.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://unblast.com/wp-content/uploads/2020/02/Softcover-Book-Mockup.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://img.freepik.com/free-vector/good-paper-wattpad-book-cover_23-2149452379.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://www.hoxtonminipress.com/cdn/shop/files/OG-South_London-Cover_280x@2x.jpg?v=1710245383"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://cdn.shopify.com/s/files/1/0338/4872/1545/products/7_a77b8e7b-3d26-4c2c-9a5b-4db3c61de5a1_512x512.jpg?v=1605776501"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://media.newyorker.com/photos/5d9d3440679597000859430d/master/w_1600%2Cc_limit/191021_r35171web.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://mockupboard.com/wp-content/uploads/2020/05/Book_Cover_Free_MockUp_mockupboard.com_-1024x682.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                </div>
                <div class="flex items-center px-4 w-full h-[50px]">
                    <a href="{{route("offers.slug", "new-books")}}">
                        <div
                            class="rounded inter font-bold text-sm bg-c_yellow py-2 px-4 opacity-90 hover:opacity-100 duration-200">
                            Show All</div>
                    </a>
                </div>
            </div>
        </div>
        {{-- end new books box component --}}

        {{-- start category box component --}}
        <div class="flex flex-col w-full h-[550px] mb-10">
            <div class="flex flex-col gap-3 w-full h-[150px] items-center justify-center">
                <h1 class="inter font-bold text-xl capitalize">amazon's</h1>
                <h1 class="handlee font-bold text-5xl capitalize">Books Categories</h1>
            </div>
            <div class="flex flex-col w-full h-[400px] bg-c_black rounded">
                <div class="grid grid-rows-1 grid-cols-6 w-full h-[350px] gap-4 px-4 py-4">
                    {{-- start category card component --}}
                    <a href="">
                        <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                            <div class="w-full h-[250px] bg-c_black overflow-hidden">
                                <img src="https://www.novelsuspects.com/wp-content/uploads/2021/04/Featured-Imaged-4.png"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div class="w-full h-[100px]">
                                <div
                                    class="px-2 py-2 flex w-full h-1/2 text-md inter font-bold justify-center items-center text-center">
                                    <h1>Mystery</h1>
                                </div>
                                <div class="flex justify-between items-end px-2 py-2 w-full h-1/2">
                                    <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                        <h1>150 items</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- end product card component --}}
                    {{-- start category card component --}}
                    <a href="">
                        <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                            <div class="w-full h-[250px] bg-c_black overflow-hidden">
                                <img src="https://hips.hearstapps.com/hmg-prod/images/best-horror-books1-1658715844.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div class="w-full h-[100px]">
                                <div
                                    class="px-2 py-2 flex w-full h-1/2 text-md inter font-bold justify-center items-center text-center">
                                    <h1>Horror</h1>
                                </div>
                                <div class="flex justify-between items-end px-2 py-2 w-full h-1/2">
                                    <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                        <h1>150 items</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- end product card component --}}
                    {{-- start category card component --}}
                    <a href="">
                        <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                            <div class="w-full h-[250px] bg-c_black overflow-hidden">
                                <img src="https://cdn.vox-cdn.com/thumbor/t9obNRJ-tagFmPzq3a6ZUD1bnXw=/85x0:1954x1360/1400x1050/filters:focal(1020x680:1021x681)/cdn.vox-cdn.com/uploads/chorus_asset/file/13642030/mdoying_181220_3114_0028.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div class="w-full h-[100px]">
                                <div
                                    class="px-2 py-2 flex w-full h-1/2 text-md inter font-bold justify-center items-center text-center">
                                    <h1>
                                        Fiction</h1>
                                </div>
                                <div class="flex justify-between items-end px-2 py-2 w-full h-1/2">
                                    <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                        <h1>150 items</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- end product card component --}}
                    {{-- start category card component --}}
                    <a href="">
                        <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                            <div class="w-full h-[250px] bg-c_black overflow-hidden">
                                <img src="https://jamestkelly.com/wp-content/uploads/2020/05/25bestfantasybooks.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div class="w-full h-[100px]">
                                <div
                                    class="px-2 py-2 flex w-full h-1/2 text-md inter font-bold justify-center items-center text-center">
                                    <h1>Fantasy</h1>
                                </div>
                                <div class="flex justify-between items-end px-2 py-2 w-full h-1/2">
                                    <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                        <h1>150 items</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- end product card component --}}
                    {{-- start category card component --}}
                    <a href="">
                        <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                            <div class="w-full h-[250px] bg-c_black overflow-hidden">
                                <img src="https://s26162.pcdn.co/wp-content/uploads/sites/3/2022/12/best-historical-fiction-2022-960x430.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div class="w-full h-[100px]">
                                <div
                                    class="px-2 py-2 flex w-full h-1/2 text-md inter font-bold justify-center items-center text-center">
                                    <h1>Historical fiction</h1>
                                </div>
                                <div class="flex justify-between items-end px-2 py-2 w-full h-1/2">
                                    <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                        <h1>150 items</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- end product card component --}}
                    {{-- start category card component --}}
                    <a href="">
                        <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                            <div class="w-full h-[250px] bg-c_black overflow-hidden">
                                <img src="https://www.writersofthefuture.com/wp-content/uploads/2019/02/New-SF-Blog-Image.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </div>
                            <div class="w-full h-[100px]">
                                <div
                                    class="px-2 py-2 flex w-full h-1/2 text-md inter font-bold justify-center items-center text-center">
                                    <h1>Science fiction</h1>
                                </div>
                                <div class="flex justify-between items-end px-2 py-2 w-full h-1/2">
                                    <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                        <h1>150 items</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- end product card component --}}

                </div>
                <div class="flex items-center px-4 w-full h-[50px]">
                    <a href="{{route("categories")}}">
                        <div
                            class="rounded inter font-bold text-sm bg-c_yellow py-2 px-4 opacity-90 hover:opacity-100 duration-200">
                            Show All</div>
                    </a>
                </div>
            </div>
        </div>
        {{-- end box component --}}

        {{-- start best discount box component --}}
        <div class="flex flex-col w-full h-[550px] mb-10">
            <div class="flex flex-col gap-3 w-full h-[150px] items-center justify-center">
                <h1 class="inter font-bold text-xl capitalize">amazon's</h1>
                <h1 class="handlee font-bold text-5xl capitalize">Best Discounts</h1>
            </div>
            <div class="flex flex-col w-full h-[400px] bg-c_black rounded">
                <div class="grid grid-rows-1 grid-cols-7 w-full h-[350px] gap-4 px-4 py-4">
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://mockup.love/wp-content/uploads/edd/2017/08/Front-Hardcover-Book-Mockup-PSD.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://unblast.com/wp-content/uploads/2020/02/Softcover-Book-Mockup.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://img.freepik.com/free-vector/good-paper-wattpad-book-cover_23-2149452379.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://www.hoxtonminipress.com/cdn/shop/files/OG-South_London-Cover_280x@2x.jpg?v=1710245383"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://cdn.shopify.com/s/files/1/0338/4872/1545/products/7_a77b8e7b-3d26-4c2c-9a5b-4db3c61de5a1_512x512.jpg?v=1605776501"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://media.newyorker.com/photos/5d9d3440679597000859430d/master/w_1600%2Cc_limit/191021_r35171web.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                    {{-- start product card component --}}
                    <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                        <div class="w-full h-[200px] bg-c_black overflow-hidden">
                            <a href="">
                                <img src="https://mockupboard.com/wp-content/uploads/2020/05/Book_Cover_Free_MockUp_mockupboard.com_-1024x682.jpg"
                                    class="w-full h-full group-hover:scale-125 duration-200"
                                    style="object-fit: cover; object-position: center" alt="test">
                            </a>
                        </div>
                        <div class="w-full h-[150px]">
                            <div
                                class="px-2 py-2 flex w-full h-2/3 text-md inter font-bold justify-center items-center text-center">
                                <a href="">
                                    <h1>title of book for test and more for test</h1>
                                </a>
                            </div>
                            <div class="flex justify-between items-end px-2 py-2 w-full h-1/3">
                                <div class="inter font-bold text-sm flex flex-row w-1/2 h-full justify-start  gap-1">
                                    <h1 class="line-through text-c_red">$25.36</h1>
                                    <h1>$24.99</h1>
                                </div>
                                <div class="inter font-bold text-md flex w-1/2 h-full justify-end ">
                                    <form action="">
                                        <button class="hover:opacity-75 duration-200">
                                            <svg width="30px" height="30px" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 20.4H7.8c-0.18 0 -0.36 -0.12 -0.48 -0.24s-0.12 -0.36 -0.06 -0.54l1.14 -2.88L7.26 6H3.6V4.8h4.2c0.3 0 0.54 0.24 0.6 0.54l1.2 11.4c0 0.12 0 0.18 -0.06 0.3L8.7 19.2H21.6z" />
                                                <path
                                                    d="m9.12 17.4 -0.24 -1.2L22.8 13.32V8.4H8.4v-1.2h15c0.36 0 0.6 0.24 0.6 0.6v6c0 0.3 -0.18 0.54 -0.48 0.6z" />
                                                <path
                                                    d="M21.6 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                                <path
                                                    d="M7.2 24c-1.32 0 -2.4 -1.08 -2.4 -2.4s1.08 -2.4 2.4 -2.4 2.4 1.08 2.4 2.4 -1.08 2.4 -2.4 2.4m0 -3.6c-0.66 0 -1.2 0.54 -1.2 1.2s0.54 1.2 1.2 1.2 1.2 -0.54 1.2 -1.2 -0.54 -1.2 -1.2 -1.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end product card component --}}
                </div>
                <div class="flex items-center px-4 w-full h-[50px]">
                    <a href="{{route("offers.slug", "best-discount")}}">
                        <div
                            class="rounded inter font-bold text-sm bg-c_yellow py-2 px-4 opacity-90 hover:opacity-100 duration-200">
                            Show All</div>
                    </a>
                </div>
            </div>
        </div>
        {{-- end best discount box component --}}

        {{-- start about box component --}}
        <div class="flex flex-col w-full h-[450px]" id="about-us">
            <div class="flex flex-col gap-3 w-full h-[150px] items-center justify-center">
                <h1 class="inter font-bold text-xl capitalize">about us</h1>
                <h1 class="handlee font-bold text-5xl capitalize">reason for formation
                </h1>
            </div>
            <div class="flex  w-full h-[300px] bg-c_yellow rounded-tr rounded-tl">
                <div class="flex w-3/6 h-full p-4">
                    <div class="w-full h-full bg-cover bg-center rounded"
                        style="background-image: url('{{ asset('files/tem/wallpaper.jpg') }}')"></div>
                </div>
                <div class="flex flex-col gap-2 w-3/6 h-full py-4 px-8">
                    <h1 class="capitalize text-2xl font-bold mb-4 inter">some text for test</h1>
                    <p class="font-bold text-md inter">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet eum, quod dolorum autem
                        voluptatum commodi atque nulla cum voluptates voluptatem sapiente quia assumenda, veniam corrupti
                        accusantium saepe libero fugit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam minus mollitia tenetur
                        repudiandae, quidem at iste distinctio. Molestiae facilis voluptatum, ad, voluptates quibusdam
                        recusandae neque fuga voluptatem natus, incidunt non!
                    </p>
                    <p class="font-bold text-md inter">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eveniet eum, quod dolorum autem
                        voluptatum commodi atque nulla cum voluptates voluptatem sapiente quia assumenda, veniam corrupti
                        accusantium saepe libero fugit.
                    </p>
                </div>
            </div>
        </div>
        {{-- end about box component --}}

        {{-- start contact box component --}}
        <div class="flex flex-row w-full h-[550px] mb-10">
            <div class="w-3/6 h-full border-2 border-c_yellow rounded-bl  p-2" id="contact-us">
                <form action="" class="flex w-full h-full flex-col px-8 py-2 capitalize">
                    <div class="flex flex-col w-3/6 inter mb-7">
                        <label for="name" class="text-lg font-medium">Full Name</label>
                        <input type="text" name="name"
                            class=" px-2 py-1 outline-none bg-c_light border-b-2 border-c_black focus:border-c_yellow duration-200"
                            placeholder="enter your full name" id="">
                    </div>
                    <div class="flex flex-col w-3/6 inter mb-7">
                        <label for="communication" class="text-lg font-medium">Email/Phone Number</label>
                        <input type="text" name="communication"
                            class=" px-2 py-1 outline-none bg-c_light border-b-2 border-c_black focus:border-c_yellow duration-200"
                            placeholder="to communicate with you" id="">
                    </div>

                    <div class="flex flex-col w-5/6 inter mb-5">
                        <label for="message" class="text-lg font-medium">Your Message</label>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="enter your message for us"
                            class=" px-2 py-1 outline-none bg-c_light border-2 rounded-lg border-c_black focus:border-c_yellow duration-200"></textarea>
                    </div>
                    <button
                        class="bg-c_yellow w-1/6 py-2 px-4 rounded-lg font-bold inter hover:opacity-75 duration-200">Send</button>
                </form>
            </div>
            <div class="w-3/6 h-full bg-c_yellow rounded-br flex flex-col gap-4 items-center justify-center capitalize">
                <h1 class="capitalize font-bold handlee text-8xl">Amazon</h1>
                <h1 class="capitalize font-bold inter text-xl flex items-center text-start">
                    <svg width="30" height="30" viewBox="0 0 0.9 0.9" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.144 0.67c0.007 0.004 0.016 0.006 0.024 0.006h0.563c0.009 0 0.017 -0.002 0.024 -0.006l-0.222 -0.208 -0.072 0.059a0.019 0.019 0 0 1 -0.024 0l-0.072 -0.06zm-0.026 -0.027 0.001 -0.001 0.218 -0.205 -0.217 -0.179 -0.001 -0.001A0.056 0.056 0 0 0 0.112 0.281v0.338c0 0.009 0.002 0.017 0.005 0.024m0.664 0a0.056 0.056 0 0 0 0.005 -0.024V0.281c0 -0.009 -0.002 -0.017 -0.005 -0.024l-0.001 0.001 -0.217 0.179 0.218 0.205zm-0.027 -0.413A0.056 0.056 0 0 0 0.731 0.225h-0.563c-0.009 0 -0.017 0.002 -0.024 0.005L0.45 0.482zM0.169 0.188h0.563A0.094 0.094 0 0 1 0.825 0.281v0.338a0.094 0.094 0 0 1 -0.094 0.094h-0.563a0.094 0.094 0 0 1 -0.094 -0.094V0.281A0.094 0.094 0 0 1 0.169 0.188" />
                    </svg>
                    amir.tardasti7@gmail.com
                </h1>
                <h1 class="capitalize font-bold inter text-xl flex items-center">
                    <svg width="30" height="30" viewBox="0 0 1.5 1.5" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.215 0.813c-0.014 0 -0.028 -0.004 -0.042 -0.007a0.588 0.588 0 0 1 -0.082 -0.024 0.125 0.125 0 0 0 -0.155 0.063l-0.014 0.028a0.762 0.762 0 0 1 -0.166 -0.125 0.762 0.762 0 0 1 -0.125 -0.166l0.026 -0.018a0.125 0.125 0 0 0 0.063 -0.155 0.625 0.625 0 0 1 -0.024 -0.082c-0.003 -0.014 -0.006 -0.028 -0.007 -0.043a0.188 0.188 0 0 0 -0.188 -0.156h-0.188a0.188 0.188 0 0 0 -0.188 0.213 1.188 1.188 0 0 0 1.032 1.029h0.024a0.188 0.188 0 0 0 0.125 -0.048 0.188 0.188 0 0 0 0.063 -0.141v-0.188a0.188 0.188 0 0 0 -0.154 -0.181m0.031 0.375a0.063 0.063 0 0 1 -0.021 0.047 0.066 0.066 0 0 1 -0.051 0.016A1.063 1.063 0 0 1 0.254 0.326a0.069 0.069 0 0 1 0.016 -0.051 0.063 0.063 0 0 1 0.047 -0.021h0.188a0.063 0.063 0 0 1 0.063 0.049q0.004 0.026 0.009 0.051a0.688 0.688 0 0 0 0.029 0.097l-0.087 0.041a0.063 0.063 0 0 0 -0.031 0.083 0.906 0.906 0 0 0 0.438 0.438 0.063 0.063 0 0 0 0.048 0 0.063 0.063 0 0 0 0.036 -0.033l0.039 -0.087a0.875 0.875 0 0 0 0.099 0.029q0.025 0.006 0.051 0.009a0.063 0.063 0 0 1 0.049 0.063Z" />
                    </svg>
                    +989031456985
                </h1>
            </div>
        </div>
        {{-- end contact box component --}}

    </main>
@endsection

@section('add-scripts')
    <script>
        $(document).ready(function() {
            history.pushState(null, null, `/`);
        });
    </script>
@endsection
