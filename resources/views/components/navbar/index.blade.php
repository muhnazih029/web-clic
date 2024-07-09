<nav class="fixed z-20 w-11/12 p-5 mt-5 text-white transform -translate-x-1/2 rounded-full shadow-xl bg-secondary left-1/2 h-14 md:w-3/4 md:h-fit">
    <ul class="flex text-xs font-bold justify-evenly md:text-xl"
        x-data="{
            section:'',
            fn(id){
                if (id === '#') return this.section = '';
                if (id === '') return this.section = '';
                this.section = id;
            }
            }"
            >
        @auth
            <x-navbar.list text="Dashboard" link="#"/>
            <x-navbar.list text="Forum" link="#"/>
            <x-navbar.list text="Event" link="#"/>
            <a href="#">
                <x-navbar.user user="user"/>
            </a>
        @endauth
        @guest
            <x-navbar.list text="Home" link="#"/>
            <x-navbar.list text="About Us" link="#about"/>
            <x-navbar.list text="Gallery" link="#gallery"/>
            <x-navbar.list text="Events" link="#events"/>
            <x-navbar.list text="Login" link="/login"/>
        @endguest
    </ul>
</nav>
