<x-layout.auth title="Login">
    <nav class="w-full">
        <x-auth.back href="/" />
    </nav>
    <main class="flex flex-col items-center mt-20">
        <header class="mb-12">
            <h1 class="text-6xl font-bold ">Register</h1>
        </header>
        <div class="grid grid-rows-[1fr_1fr] md:grid-cols-[1fr_1fr] gap-4">
            <x-auth.asset-section class="block md:hidden" />
            <x-auth.form-section action="">
                <div class="flex flex-col space-y-3 ">
                    <x-auth.text-input type="text" name="username" placeholder="Username" id="username" />
                    <x-auth.text-input type="text" name="nim" placeholder="NIM" id="nim" />
                    <x-auth.text-input type="password" name="password" placeholder="Password" id="password" />
                    <x-auth.text-input type="text" name="token" placeholder="Registration Token" id="token" />
                </div>
                <div class="mt-10 text-center ">
                    <x-auth.submit>Register</x-auth.submit>
                    <p>Already have account? <a href="{{ route('login') }}"
                            class="font-[Galyon%20Book] font-semibold text-primary">Login</a></p>
                </div>
            </x-auth.form-section>
            <x-auth.asset-section class="hidden md:block" />
        </div>
    </main>
</x-layout.auth>
