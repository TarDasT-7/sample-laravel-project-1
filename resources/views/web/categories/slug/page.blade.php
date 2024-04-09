@extends('web.layout')
@section('add-styles')
@endsection
@section('content')
    <main class="p-8">

        <div class="flex w-full h-full relative">
            <div class="w-1/6 h-[300px] px-2" style="position: sticky; top:25px">
                <div class="flex flex-col w-full h-full border-2 bg-[#FFF6E9] rounded px-2">
                    <div class="w-full h-[50px] flex items-center px-4 border-b-2 border-c_yellow">
                        <h1 class="handlee font-bold text-3xl capitalize">
                            filter by
                        </h1>
                    </div>
                    <div class="w-full h-[200px] flex flex-col items-start py-2">
                        <div class="w-full px-2 mb-5">
                            <input type="search"
                                class="bg-[#FFF6E9]  w-full h-[30px] border-b-2 border-c_dark outline-none px-2 py-4"
                                placeholder="search books...">
                        </div>
                        <div class="w-full px-2 flex flex-col justify-start items-start mb-5">
                            <ul>
                                <li class="font-medium inter text-lg hover:opacity-75 duration-200">
                                    <button>all</button>
                                </li>
                                <li class="font-medium inter text-lg hover:opacity-75 duration-200">
                                    <button>popular</button>
                                </li>
                                <li class="font-medium inter text-lg hover:opacity-75 duration-200">
                                    <button>recently added</button>
                                </li>
                                <li class="font-medium inter text-lg hover:opacity-75 duration-200">
                                    <button>most viewed</button>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="w-full h-[50px] flex items-center">
                        <h1 class="inter font-medium text-md capitalize text-c_red">
                            clear filter
                        </h1>
                    </div>
                </div>
            </div>
            {{-- start category slug box component --}}
            <div class="flex flex-col w-5/6 h-auto mb-10">
                <div class="flex w-full h-[40px] items-start justify-start">
                    <div class="flex capitalize gap-1 font-bold inter text-lg w-1/3 h-full">
                        <a href="/">
                            <h1>home</h1>
                        </a>
                        <h1>/</h1>
                        <a href="/categories">
                            <h1>categories</h1>
                        </a>
                        <h1>/</h1>
                        <h1>mystery</h1>
                    </div>
                </div>
                <div class="flex flex-col w-full h-auto bg-c_black rounded">
                    <div class="grid grid-cols-6 w-full h-auto gap-4 px-4 py-4">
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
                </div>

            </div>
            {{-- end box component --}}
        </div>



    </main>
@endsection

@section('add-scripts')
@endsection
