<x-layouts title="Test">
    <x-navbar />
    <div class="relative w-screen">
        {{-- Home Section --}}
        <section class="bg-cover bg-bottom h-[900px] md:h-[1200px]" style="background-image:url(img/bg-image-home.png)">
            <div class="w-11/12 mx-auto pt-28 md:flex md:w-3/4">
                <div class="flex">
                    <div class="w-12 h-12 container-xs md:w-fit md:h-fit">
                        <img class=""src="img/logo-CLIC.png" alt="" srcset="">
                    </div>
                    <div class="pt-1 pl-3">
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
        <div class="bg-gradient-to-t from-white from-5% to-40% absolute w-full top-0 z-10 h-[900px] md:h-[1200px]"></div>
        {{-- About Section --}}
        <section class="w-screen h-screen pt-40 -mt-32" id="about">
            <x-heading title="About" color="text-black" />
            <div class="flex flex-row justify-center mt-10">
                <div class="px-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f37e1f" class="size-14">
                        <path d="M12 9a3.75 3.75 0 1 0 0 7.5A3.75 3.75 0 0 0 12 9Z" />
                        <path fill-rule="evenodd"
                            d="M9.344 3.071a49.52 49.52 0 0 1 5.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 0 1-3 3h-15a3 3 0 0 1-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 0 0 1.11-.71l.822-1.315a2.942 2.942 0 0 1 2.332-1.39ZM6.75 12.75a5.25 5.25 0 1 1 10.5 0 5.25 5.25 0 0 1-10.5 0Zm12-1.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Hunting</p>
                </div>
                <div class="px-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f37e1f" class="size-14">
                        <path fill-rule="evenodd"
                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Pameran</p>
                </div>
                <div class="px-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f37e1f" class="size-14">
                        <path
                            d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                        <path fill-rule="evenodd"
                            d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Event</p>
                </div>
                <div class="px-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f37e1f" class="size-14">
                        <path
                            d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                    </svg>
                    <p>Belajar</p>
                </div>
            </div>
            <div class="flex flex-col justify-center mx-auto h-fit bg-slate md:flex-row md:w-3/5">
                <div class="w-8/12 pt-10 mx-auto">
                    <img src="img/images-stack.png" alt="">
                </div>
                <div class="w-11/12 pt-10 mx-auto text-center md:text-left md:text-2xl md:pt-24 md:w-8/12">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque repudiandae voluptas esse
                        asperiores. Aliquam temporibus adipisci eum incidunt reprehenderit veniam.</p>
                </div>
            </div>
        </section>
    </div>
    {{-- Gallery Section --}}
    <section id="gallery" class="w-screen h-screen pt-40 -mt-16 bg-secondary">
        <x-heading title="Galeri" color="text-white" />
    </section>
</x-layouts>
