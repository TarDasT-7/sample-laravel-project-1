@extends('web.layout')
@section('content')
    <main class="p-8">

        {{-- start category box component --}}
        <div class="flex flex-col w-full h-auto mb-10">
            <div class="flex w-full h-[75px] items-center justify-start">
                <div class="flex items-center capitalize gap-1 font-bold inter text-lg w-1/3 h-full">
                    <a href="/">
                        <h1>home</h1>
                    </a>
                    <h1>/</h1>
                    <h1>categories</h1>
                </div>
            </div>
            <div class="flex flex-col w-full h-auto bg-c_black rounded">
                <div class="grid grid-cols-6 w-full h-full gap-4 px-4 py-4">
                    {{-- start category card component --}}
                    <a href="{{ route('categories.slug', 'mystery') }}">
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
                    <a href="{{ route('categories.slug', 'horror') }}">
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
                    <a href="{{ route('categories.slug', 'fiction') }}">
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
                    <a href="{{ route('categories.slug', 'fantasy') }}">
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
                    <a href="{{ route('categories.slug', 'historical-fiction') }}">
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
                    <a href="{{ route('categories.slug', 'mystery') }}">
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
                    {{-- start category card component --}}
                    <a href="{{ route('categories.slug', 'mystery') }}">
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
                    <a href="{{ route('categories.slug', 'mystery') }}">
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
                    <a href="{{ route('categories.slug', 'mystery') }}">
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
                    <a href="{{ route('categories.slug', 'mystery') }}">
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
                    <a href="{{ route('categories.slug', 'mystery') }}">
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

                </div>
            </div>
        </div>
        {{-- end box component --}}


    </main>
@endsection

@section('add-scripts')
@endsection
