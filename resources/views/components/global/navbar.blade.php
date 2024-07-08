<nav class="rounded-full bg-[#333333] w-11/12 text-white p-5 mt-5 fixed transform -translate-x-1/2 left-1/2 z-20 h-14 md:w-3/4 md:h-fit">
    <ul class="flex justify-evenly font-bold text-xs md:text-xl">
        @auth 
            <x-global.navbarNav text="Dashboard" link="#"></x-global.navbarNav>
            <x-global.navbarNav text="Forum" link="#"></x-global.navbarNav>
            <x-global.navbarNav text="Event" link="#"></x-global.navbarNav>
            <a href="#">
                <x-global.userIconName user="user"></x-global.userIconName>
            </a>
        @endauth
        @guest
            <x-global.navbarNav text="Home" link="#"></x-global.navbarNav>
            <x-global.navbarNav text="About Us" link="#"></x-global.navbarNav>
            <x-global.navbarNav text="Gallery" link="#"></x-global.navbarNav>
            <x-global.navbarNav text="Events" link="#"></x-global.navbarNav>
            <x-global.navbarNav text="Login" link="#"></x-global.navbarNav>
        @endguest
    </ul>
</nav>