<x-layout title="{{ $title }}">
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="w-full px-20 h-5/6">
            {{ $slot }}
        </div>
    </div>
</x-layout>
