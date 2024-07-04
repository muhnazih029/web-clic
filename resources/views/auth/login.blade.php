<x-layout.auth title="Login">
    <nav class="w-full">
        <x-auth.back href="/" />
    </nav>
    <main class="flex flex-col items-center mt-20">
        <header class="mb-12">
            <h1 class="text-6xl font-bold ">Login</h1>
        </header>
        <div class="grid grid-rows-[1fr_1fr] md:grid-cols-[1fr_1fr] gap-4">
            <x-auth.asset-section />
            <x-auth.form-section action="">
                <x-auth.error-message name="formError" />
                <div class="flex flex-col space-y-3 ">
                    <x-auth.text-input type="text" name="key" placeholder="Username or NIM" id="key" />
                    <x-auth.text-input type="password" name="password" placeholder="Password" id="password" />
                </div>
                <div class="mt-10 text-center ">
                    <x-auth.submit>Login</x-auth.submit>
                    <p class="font-[Galyon%20Book]">Don’t have account? <a href="{{ route('register') }}"
                            class="font-semibold text-primary">Join Us</a></p>
                </div>
            </x-auth.form-section>
        </div>
    </main>
</x-layout.auth>
