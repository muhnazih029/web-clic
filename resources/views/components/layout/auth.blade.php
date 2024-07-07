<x-layout title="{{ $title }}">
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="w-full py-32 px-36 lg:px-20 lg:py-0 h-5/6" x-data={show:false}>
            <x-auth.icons />
            <nav class="w-full">
                <x-auth.back href="/" />
            </nav>
            <main class="flex flex-col items-center mt-20">
                <header class="mb-12">
                    <h1 class="text-6xl font-bold ">{{ $title }}</h1>
                </header>
                <div class="grid grid-rows-[1fr_1fr] md:grid-cols-[1fr_1fr] gap-4">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</x-layout>
