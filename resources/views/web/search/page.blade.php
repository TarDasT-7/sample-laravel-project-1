@extends('web.layout')
@section('add-styles')
@endsection
@section('content')
    <main class="p-8">
        <div class="flex flex-col w-full min-h-[500px] h-auto">
            <div class="relative flex items-center justify-center w-5/6 h-[100px] mx-auto">
                <input type="text" class="outline-none w-full h-1/2 rounded-full pl-8 pr-12 text-lg"
                    placeholder="search anything you want">
                <span class="absolute right-1 bg-c_red px-2 py-2 rounded-full">
                    <svg width="20" height="20" viewBox="0 0 30 30" fill="white" class="icon"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m26.341 25.477-1.553-8.953h.525a.76.76 0 0 0 .762-.762v-5.625a.76.76 0 0 0-.762-.762h-7.208V4.043a.76.76 0 0 0-.762-.762h-4.687a.76.76 0 0 0-.762.762v5.332H4.688a.76.76 0 0 0-.762.762v5.625c0 .422.34.762.762.762h.524l-1.553 8.953a.76.76 0 0 0 .75.891h21.182a.758.758 0 0 0 .75-.891M5.977 11.426h7.969V5.332h2.109v6.094h7.969v3.047H5.977zm13.711 12.891v-4.571a.234.234 0 0 0-.234-.234h-1.406a.234.234 0 0 0-.234.234v4.57h-5.626v-4.57a.234.234 0 0 0-.234-.234h-1.406a.234.234 0 0 0-.234.234v4.57H5.941l1.321-7.617h15.472l1.321 7.617z" />
                    </svg>
                </span>
            </div>
            {{-- start search box component --}}
            <div class="flex flex-col w-5/6 h-auto mb-10 mx-auto">
                <div class="flex w-full h-[40px] items-start">
                    <div class="flex capitalize gap-1 font-bold inter text-lg w-full h-full justify-start">
                        <h1>resualt: <strong>99 items</strong></h1>
                    </div>
                </div>
                <div class="flex flex-col w-full h-auto bg-c_black rounded">
                    <div class="grid grid-cols-6 w-full h-auto gap-4 px-4 py-4">

                        {{-- start product card component --}}
                        <div class="flex flex-col w-full h-full bg-c_light rounded overflow-hidden group">
                            <div class="w-full h-[200px] bg-c_black overflow-hidden">
                                <a href="{{route("books.slug", "title-of-book")}}">
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
