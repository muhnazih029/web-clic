<x-layouts.auth title="Login">
    <x-auth.asset-section />
    <x-auth.form-section action="">
        <x-toast name="formError" />
        <x-toast name="info" />
        <x-toast name="success" />
        <div class="flex flex-col space-y-3 ">
            <x-auth.text-input type="text" name="userAuth" placeholder="Username or NIM" id="userAuth" />
            <x-auth.text-input type="password" name="password" placeholder="Password" id="password" />
        </div>
        <div class="mt-10 text-center ">
            <x-auth.submit>Login</x-auth.submit>
            <p class="font-[Galyon%20Book]">Don’t have account? <a href="{{ route('register') }}"
                    class="font-semibold text-primary">Join Us</a></p>
        </div>
    </x-auth.form-section>
</x-layouts.auth>
