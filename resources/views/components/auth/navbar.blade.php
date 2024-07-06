<nav class="mx-auto rounded-full bg-[#333333] w-3/4 h-2/3 text-white p-5">
    <ul class="flex justify-evenly font-bold text-xl">
        @auth 
            <a href="#"><li class="hover:text-[#f37e1f]">Dashboard</li></a>
            <a href="#"><li class="hover:text-[#f37e1f]">Events</li></a>
            <a href="#"><li class="hover:text-[#f37e1f]">Forums</li></a>
            <a href="#">
                <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f37e1f" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>  
                    <li class="text-[#f37e1f] hover:text-white">User</li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                    </svg>  
                </div>
            </a>
        @endauth
        @guest
            <a href="#"><li class="hover:text-[#f37e1f]">Home</li></a>
            <a href="#"><li class="hover:text-[#f37e1f]">About Us</li></a>
            <a href="#"><li class="hover:text-[#f37e1f]">Gallery</li></a>
            <a href="#"><li class="hover:text-[#f37e1f]">Events</li></a>
            <a href="#"><li class="hover:text-[#f37e1f]">Login</li></a>
        @endguest
    </ul>
</nav>