<x-layouts title="Test">
    <x-navbar />
    <div class="relative">
        {{-- Home Section --}}
        <section class="bg-cover bg-bottom h-[900px] md:h-screen" style="background-image:url(img/bg-image-home.png)">
            <div class="w-11/12 mx-auto pt-28 md:flex md:w-3/4">
                <div class="flex py-auto">
                    <div class="w-12 h-12 container-xs md:w-fit md:h-fit">
                        <img class=""src="img/logo-CLIC.png" alt="" srcset="">
                    </div>
                    <div class="pt-1 pl-3 md:py-auto">
                        <h2 class="text-xl font-semibold md:text-4xl md:pt-2">CLIC UNNES</h2>
                        <p class="text-xs md:text-base">Club Leissure d'Images Chasseurs</p>
                    </div>
                </div>
                <div class="pt-3 ml-auto text-xs md:text-base md:text-right">
                    <p>UKM Fotografi & Sinematografi UNNES</p>
                    <p>Since 2004 | Komunitas Pemburu Foto</p>
                    <p>Belajar & berburu foto bersama | #clicunnes</p>
                </div>
            </div>
        </section>
        {{-- gradient --}}
        <div class="bg-gradient-to-t from-white from-5% to-40% absolute w-screen top-0 z-10 h-[900px] md:h-screen">
        </div>
        {{-- About Section --}}
        <section class="w-screen h-screen pt-32 -mt-32 lg:pt-40" id="about">
            <x-heading title="About" color="text-black" />
            <x-icons.24-px />
            <div class="flex flex-row justify-center mt-10 ">
                <x-about-widget text="Hunting" />
                <x-about-widget text="Pameran" />
                <x-about-widget text="Event" />
                <x-about-widget text="Belajar" />
            </div>
            <div class="flex flex-col justify-center mx-auto h-fit bg-slate md:flex-row md:w-3/5 md:gap-10">
                <div class="w-8/12 pt-10 mx-auto">
                    <img src="img/images-stack.png" alt="">
                </div>
                <div class="w-11/12 pt-10 mx-auto text-center md:text-left md:text-base md:py-10 md:w-3/4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque repudiandae voluptas esse
                        asperiores. Aliquam temporibus adipisci eum incidunt reprehenderit veniam.</p>
                </div>
            </div>
        </section>
    </div>
    <div class="relative">
        {{-- Gallery Section --}}
        <section id="gallery" class="flex flex-col w-screen h-screen pt-32 -mt-16 bg-secondary md:pt-20 lg:pt-40">
            <x-heading title="Galeri" color="text-white" />
            <x-horizontal-image-scroll />
            <x-horizontal-image-scroll />
            <x-horizontal-image-scroll />
            <button class="relative z-20 px-10 py-3 mx-auto text-center text-white rounded-full bottom-20 bg-primary ">More ></button>
        </section>
        {{-- gradient --}}
        <div class="bg-gradient-to-t from-white from-5% to-40% absolute top-0 w-screen z-10 h-[900px] md:h-screen"></div>
        <section id="events" class="flex flex-col w-screen h-screen pt-32 -mt-16 bg- md:pt-20 lg:pt-40">
            <x-heading title="Events" color="text-black" />

        </section>
    </div>

</x-layouts>
