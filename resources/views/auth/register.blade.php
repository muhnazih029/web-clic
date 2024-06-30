<x-layout title="Register">
    <div class="bg-white rounded-lg py-5">
        <div class="container flex flex-col mx-auto bg-white rounded-lg pt-12 my-5">
            <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
                <div class="flex items-center justify-center w-full lg:p-12">
                    <div class="flex items-center xl:p-10">
                        <form action="{{ route('register') }}" method="POST"
                            class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl">
                            @csrf
                            <h3 class="mb-3 text-4xl font-extrabold text-dark-grey-900">Register</h3>
                            <p class="mb-4 text-grey-700">Enter your username and password</p>
                            <label for="username" class="mb-2 text-sm text-start text-grey-900">Username</label>
                            <input id="username" name="username" type="text" placeholder="jordi1234"
                                class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"
                                required />
                            <label for="nim" class="mb-2 text-sm text-start text-grey-900">NIM</label>
                            <input id="nim" name="nim" type="text" placeholder="12345678"
                                class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"
                                required />
                            <label for="password" class="mb-2 text-sm text-start text-grey-900">Password*</label>
                            <input id="password" name="password" type="password" placeholder="Enter a password"
                                class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"
                                required />
                            <div class="flex flex-row justify-between mb-8">
                                <label class="relative inline-flex items-center mr-3 cursor-pointer select-none">
                                    <input type="checkbox" checked value="" class="sr-only peer">
                                    <div
                                        class="w-5 h-5 bg-white border-2 rounded-sm border-grey-500 peer peer-checked:border-0 peer-checked:bg-purple-blue-500">
                                        <img class=""
                                            src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/icons/check.png"
                                            alt="tick">
                                    </div>
                                    <span class="ml-3 text-sm font-normal text-grey-900">Keep me logged in</span>
                                </label>
                                <a href="javascript:void(0)"
                                    class="mr-4 text-sm font-medium text-purple-blue-500">Forget password?</a>
                            </div>
                            <button
                                class="w-full px-6 py-5 mb-5 text-sm font-bold leading-none text-white transition duration-300 md:w-96 rounded-2xl hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 bg-purple-blue-500">Sign
                                In</button>
                            <p class="text-sm leading-relaxed text-grey-900">
                                Do you already have an account?<a href="/login" class="font-bold text-grey-700">
                                    Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
