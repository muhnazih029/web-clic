<x-layouts.auth title="Register">
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
</x-layouts.auth>
