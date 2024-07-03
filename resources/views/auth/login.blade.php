<x-layout.auth title="Login">
    <nav class="w-full">
        <x-auth.back href="/" />
    </nav>
    <main class="flex flex-col items-center mt-20">
        <header class="mb-12">
            <h1 class="font-[Galyon%20Bold] text-6xl font-bold">Login</h1>
        </header>
        <div class="grid grid-rows-[1fr_1fr] md:grid-cols-[1fr_1fr] gap-4">
            <x-auth.asset-section />
            <x-auth.form-section action="">
                <x-auth.error-message name="formError" />
                <div class="flex flex-col space-y-3 ">
                    <x-auth.text-input type="text" name="login" placeholder="Username or NIM" id="login" />
                    <x-auth.text-input type="password" name="password" placeholder="Password" id="password" />
                    <div class="flex items-center font-[Galyon%20Book]">
                        <input type="checkbox" id="show-password" onclick="togglePassword()" class="mr-2">
                        <label for="show-password">Show Password</label>
                    </div>
                </div>
                <div class="mt-10 text-center ">
                    <x-auth.submit>Login</x-auth.submit>
                    <p class="font-[Galyon%20Book]">Don’t have account? <a href="{{ route('register') }}"
                            class="font-semibold text-primary">Join Us</a></p>
                </div>
            </x-auth.form-section>
        </div>
    </main>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var showPasswordCheckbox = document.getElementById('show-password');
            if (showPasswordCheckbox.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</x-layout.auth>
