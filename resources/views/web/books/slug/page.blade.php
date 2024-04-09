@extends('web.layout')
@section('add-styles')
    <link rel="stylesheet" href="{{ asset('css/input-num.css') }}">
@endsection
@section('content')
    <main class="p-8">
        <div class="w-full h-auto">
            <div class="flex flex-col w-3/5 h-auto justify-center mx-auto mb-10">
                <div class="flex gap-2 w-full h-[75px] p-2">
                    <div class="flex capitalize gap-1 font-bold inter text-md w-1/2 h-full items-center">
                        <a href="/">
                            <h1>home</h1>
                        </a>
                        <h1>/</h1>
                        <h1>books</h1>
                        <h1>/</h1>
                        <h1>title of book</h1>
                    </div>
                    <div
                        class="flex capitalize gap-4 font-bold inter text-md w-1/2 h-full items-center text-end justify-end">
                        <a href="/">
                            <h1>
                                < prev</h1>
                        </a>
                        <h1>|</h1>
                        <a href="/">
                            <h1>next ></h1>
                        </a>
                    </div>
                </div>
                <div class="flex w-full h-auto relative">
                    <div class="w-2/5 h-auto p-2">
                        <div class="w-[400px] h-[550px] bg-c_light group overflow-hidden rounded-lg mx-auto"
                            style="position: sticky; top:100px;">
                            <img src="https://mockupboard.com/wp-content/uploads/2020/05/Book_Cover_Free_MockUp_mockupboard.com_-1024x682.jpg"
                                class="w-full h-full group-hover:scale-125 duration-200 "
                                style="object-fit: cover; object-position: center" alt="test">
                        </div>
                    </div>
                    <div class="flex flex-col gap-6 w-3/5 h-auto ">
                        <div class="w-full h-auto px-4">
                            <div>
                                <h1 class="handlee font-bold text-4xl capitalize">Name of book for test</h1>
                            </div>
                            <div>
                                <h1 class="inter font-bold text-md capitalize">#mystery</h1>
                            </div>
                        </div>
                        <div class="w-full h-auto inter px-4">
                            <h1 class="font-bold text-2xl">overview</h1>
                            <p class="font-medium text-md">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus hic dignissimos tempora
                                fugit explicabo, atque ad natus. Nisi cum esse rem officiis omnis deleniti blanditiis magnam
                                vero accusamus, unde temporibus.
                            </p>
                            <p class="font-medium text-md">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus hic dignissimos tempora
                                fugit explicabo, atque ad natus. Nisi cum esse rem officiis omnis deleniti blanditiis magnam
                                vero accusamus, unde temporibus.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus hic dignissimos tempora
                                fugit explicabo, atque ad natus. Nisi cum esse rem officiis omnis deleniti blanditiis magnam
                                vero accusamus, unde temporibus...
                            </p>
                            <p class="font-medium text-md">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus hic dignissimos tempora
                                fugit explicabo, atque ad natus. Nisi cum esse rem officiis omnis deleniti blanditiis magnam
                                vero accusamus, unde temporibus.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus hic dignissimos tempora
                                fugit explicabo, atque ad natus. Nisi cum esse rem officiis omnis deleniti blanditiis magnam
                                vero accusamus, unde temporibus...
                            </p>
                            <p class="font-medium text-md">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus hic dignissimos tempora
                                fugit explicabo, atque ad natus. Nisi cum esse rem officiis omnis deleniti blanditiis magnam
                                vero accusamus, unde temporibus.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus hic dignissimos tempora
                                fugit explicabo, atque ad natus. Nisi cum esse rem officiis omnis deleniti blanditiis magnam
                                vero accusamus, unde temporibus...
                            </p>

                        </div>

                        <div class="w-full h-auto inter px-4">
                            <h1 class="font-bold mb-4">
                                <span class="line-through text-c_red text-sm mr-2">$29.50</span> <span
                                    class="text-2xl">$25.99</span>
                            </h1>
                            <div class="flex flex-col font-bold inter gap-2">
                                <label for="quantity" class="text-2xl">Quantity:</label>
                                <div class="input-spinner-container">
                                    <button class="input-spinner-btn decrease bg-c_yellow">-</button>
                                    <input class="input-spinner-field" type="text" value="1" readonly>
                                    <button class="input-spinner-btn increase bg-c_yellow">+</button>
                                </div>
                            </div>
                            <div class="bg-c_yellow w-[300px] h-[50px] flex items-center justify-center rounded mt-5">
                                <form action="" class="flex items-center">
                                    <button class="hover:opacity-75 duration-200 w-full h-full flex items-center">
                                        <h1 class="font-bold text-lg inter">
                                            Add To Cart
                                        </h1>
                                        <svg width="35px" height="35px" viewBox="0 0 30 30"
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
            </div>

            {{-- start similar box component --}}
            <div class="flex flex-col w-full min-h-[500px]">
                <div class="flex flex-col gap-3 w-full h-[100px] items-center justify-center">
                    <h1 class="handlee font-bold text-5xl capitalize">similar books</h1>
                </div>
                <div class="flex flex-col w-full h-auto bg-c_black rounded">
                    <div class="grid grid-cols-7 w-full h-auto gap-4 px-4 py-4">
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
                </div>
            </div>
            {{-- end best discount box component --}}
        </div>

    </main>
@endsection

@section('add-scripts')
    <script src="{{ asset('js/input-num.js') }}"></script>
@endsection
