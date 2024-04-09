<div class="w-full px-8">

    @if (session('success'))
        <div class="bg-green-400 text-c_black border border-green-400 px-4 py-3 rounded relative capitalize kill-alert"
            role="alert">
            <strong class="font-bold handlee text-2xl">success</strong>
            <span class="block inter text-md font-bold">{{ session('success') }}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-300 text-red-800 border border-red-800 px-4 py-3 rounded relative capitalize kill-alert"
            role="alert">
            <strong class="font-bold handlee text-2xl">error</strong>
            <span class="block inter text-md font-bold">{{ session('error') }}</span>
        </div>
    @endif

</div>
