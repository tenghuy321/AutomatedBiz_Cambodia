@extends('layouts.app')
@section('content')
    <!--  home -->
    <section class="text-white flex flex-col justify-center content-center bg-[url(https://static.wixstatic.com/media/82fcd3_a1a4a4fd8e2b4b0295b547356b038220~mv2_d_6405_4048_s_4_2.jpg/v1/fill/w_640,h_744,al_t,q_85,usm_0.66_1.00_0.01,enc_auto/82fcd3_a1a4a4fd8e2b4b0295b547356b038220~mv2_d_6405_4048_s_4_2.jpg)] bg-cover bg-center h-[500px] md:h-[140vh] "
        id='home' >
        <div class='w-full pl-10 md:pl-32'>
            <h1 class='xl:text-6xl lg:text-5xl md:text-4xl text-3xl font-bold mt-2 md:mt-0 md:py-6 max-w-[900px]' data-aos="fade-right" data-aos-duration="1000">Empowering small and medium-sized enterprises (SMEs) through innovative solutions, expert training, and a strong support network.</h1>
        </div>
    </section>

    <!--   -->
    <section class="grid md:grid-cols-2 gap-4 max-w-screen-xl mx-auto lg:px-3 lg:py-20 px-3 xl:px-3" id="about">
        <div class="tracking-tighter mt-20 lg:mt-0">
            <div class="text-white" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-4xl md:text-6xl uppercase font-bold">Learn from the best, be your best.</h2>
                <p class="texl-lg md:text-xl">Unlock full potential of every SME to achieve profitable growth.</p>
                <hr class="h-[4px] w-6 my-8 bg-red-400 border-0 dark:bg-red-400">
            </div>

        </div>

        <div class="scroll-container body mt-20 lg:mt-0">
            <div class="scroll-content">
                <div class="grid grid-cols-2 gap-4">
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button id="toggle-animation" class="absolute top-4 left-4 px-4 py-2 bg-blue-500 text-white">Stop Animation</button> -->

        </div>

    </section>

    <!--   -->
    <section class="max-w-screen-xl lg:p-3 mx-auto">
        <div class="text-center py-10 md:py-20" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl lg:text-5xl font-bold py-5 px-2 text-white">Master your skills, meet the best trainers.</h2>
        </div>

        <div class="py-10">
            <div class="hidden lg:block">

                <div class="relative w-full bg-cover bg-center bg-image">
                    <div class="absolute inset-0 gradient-overlay">
                        <div class="xl:max-w-[400px] lg:max-w-[350px] mx-auto text-center float-end mt-80 md:mt-44 lg:pl-20 xl:pl-0"
                            data-aos="fade-up" data-aos-duration="1000">
                            <p
                                class="bg-white px-1 py-2 max-w-[200px] mx-auto rounded-[40px] capitalize font-bold text-black text-[10px]">
                                next episode aug 20</p>
                            <h3 class="text-2xl uppercase mt-10 text-white text-center">Orginal Series</h3>
                            <div class="w-[210px] mx-auto">
                                <img src="https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=16&quality=75&format=webp 16w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=32&quality=75&format=webp 32w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=48&quality=75&format=webp 48w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=64&quality=75&format=webp 64w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=96&quality=75&format=webp 96w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=128&quality=75&format=webp 128w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=256&quality=75&format=webp 256w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=384&quality=75&format=webp 384w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=640&quality=75&format=webp 640w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=750&quality=75&format=webp 750w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=828&quality=75&format=webp 828w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=1080&quality=75&format=webp 1080w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=1200&quality=75&format=webp 1200w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=1920&quality=75&format=webp 1920w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=2048&quality=75&format=webp 2048w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=3840&quality=75&format=webp 3840w"
                                    alt="">
                            </div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus
                                sequi expl...</p>
                            <div class="mt-10">
                                <a href="#" class="bg-white px-5 rounded-2xl py-3 text-black font-bold"><i
                                        class="fa-solid fa-play me-2"></i> Watch Trailer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block lg:hidden">
                <div
                    class="w-full h-[700px] bg-[url(https://www.masterclass.com/course-images/attachments/m9yeeu8irk3tlllk508jqjb1gno2?width=3840&quality=75&format=webp)] bg-cover bg-center ">
                    <div class="max-w-full mx-auto text-center h-full pt-64" style="background: rgba(0, 0, 0, 0.7)" data-aos="fade-up" data-aos-duration="1000">
                        <p
                            class="bg-white px-1 py-2 max-w-[200px] mx-auto rounded-[40px] capitalize font-bold text-black text-[10px]">
                            next episode aug 20</p>
                        <h3 class="text-2xl uppercase mt-10 text-white text-center">Orginal Series</h3>
                        <div class="w-[210px] mx-auto">
                            <img src="https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=16&quality=75&format=webp 16w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=32&quality=75&format=webp 32w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=48&quality=75&format=webp 48w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=64&quality=75&format=webp 64w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=96&quality=75&format=webp 96w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=128&quality=75&format=webp 128w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=256&quality=75&format=webp 256w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=384&quality=75&format=webp 384w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=640&quality=75&format=webp 640w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=750&quality=75&format=webp 750w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=828&quality=75&format=webp 828w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=1080&quality=75&format=webp 1080w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=1200&quality=75&format=webp 1200w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=1920&quality=75&format=webp 1920w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=2048&quality=75&format=webp 2048w, https://www.masterclass.com/course-images/attachments/ndxiai39k644ebftwo7atcibhpz1?width=3840&quality=75&format=webp 3840w"
                                alt="">
                        </div>
                        <p class="text-white lg:w-[200px] px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Necessitatibus sequi expl...</p>
                        <div class="mt-10">
                            <a href="#" class="bg-white px-5 rounded-2xl py-3 text-black font-bold hover:text-red-500"><i class="fa-solid fa-play me-2"></i> Watch Trailer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  inspiring -->
    <section>
        <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl lg:text-5xl font-bold py-5 px-2 text-white">Empowering you with inspiration, every step of the way.</h2>
        </div>
        <div>
            <div class="relative py-5">
                <div class="overflow-x-auto whitespace-nowrap md:whitespace-normal md:text-center scroll-smooth p-2 filter_buttons scrollbar-hidden">
                    <button
                        class="cursor-pointer inline-block w-24 h-10 bg-gray-800 m-1 text-center content-center rounded-2xl text-white tracking-[2px] active"
                        data-name="all">All</button>
                    <button
                        class="cursor-pointer inline-block w-24 h-10 bg-gray-800 m-1 text-center content-center rounded-2xl text-white tracking-[2px]"
                        data-name="business">Business</button>
                    <button
                        class="cursor-pointer inline-block w-40 h-10 bg-gray-800 m-1 text-center content-center rounded-2xl text-white tracking-[2px]"
                        data-name="leadership">Leadership</button>
                    <button
                        class="cursor-pointer inline-block w-32 h-10 bg-gray-800 m-1 text-center content-center rounded-2xl text-white tracking-[2px]"
                        data-name="sales">Sales</button>
                    <button
                        class="cursor-pointer nline-block w-32 h-10 bg-gray-800 m-1 text-center content-center rounded-2xl text-white tracking-[2px]"
                        data-name="marketing">Marketing</button>
                </div>
            </div>
            <div class="mt-5 ml-7 2xl:ml-32">
                <!-- <h2 class="font-bold text-white md:text-xl tracking-wider absolute">Show All </h2> -->

                <div class="filterable_cards">
                    <h2 class="card font-bold text-white md:text-xl absolute tracking-[2px]" data-name="all">All </h2>
                </div>
                <div class="filterable_cards">
                    <h2 class="card font-bold text-white md:text-xl absolute tracking-[2px] hidden" data-name="business">Business</h2>
                </div>
                <div class="filterable_cards">
                    <h2 class="card font-bold text-white md:text-xl absolute tracking-[2px] hidden" data-name="leadership">Leadership</h2>
                </div>
                <div class="filterable_cards">
                    <h2 class="card font-bold text-white md:text-xl absolute tracking-[2px] hidden" data-name="sales">Sales</h2>
                </div>
                <div class="filterable_cards">
                    <h2 class="card font-bold text-white md:text-xl absolute tracking-[2px] hidden" data-name="marketing">Marketing</h2>
                </div>
            </div>
            <div class="2xl:ml-32">
                <div class="relative px-4 py-8 mt-10">
                    <div class="relative overflow-x-auto whitespace-nowrap scroll-smooth scrollbar-hidden filterable_cards"
                        id="card-container">
                        <div data-name="business"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/jUoY2ZTfRkBnavUEiqCZ7rg2?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 1</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="marketing"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/j33vns82wjlfl0qsk2zxt1atbhkd?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 2</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="leadership"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/wfjbipfk8a8dxhz71sxtdqf0ymh4?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 3</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="sales"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/d2cf6y8gzvnau3et6lo99ydl1cvs?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 4</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="business"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/zgl8j8vjaiv2o1igc99dcelezt3w?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 5</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="business"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/jUoY2ZTfRkBnavUEiqCZ7rg2?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 6</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="sales"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/j33vns82wjlfl0qsk2zxt1atbhkd?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 7</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="marketing"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/wfjbipfk8a8dxhz71sxtdqf0ymh4?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 8</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="leadership"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/d2cf6y8gzvnau3et6lo99ydl1cvs?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 9</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                        <div data-name="marketing"
                            class="card testing w-56 h-96 relative overflow-hidden inline-block rounded-lg shadow-md m-2">
                            <div
                                class="img w-full h-full bg-[url(https://www.masterclass.com/course-images/attachments/zgl8j8vjaiv2o1igc99dcelezt3w?width=395&height=702&quality=75&dpr=1)] bg-cover bg-center">
                            </div>
                            <div class="w-full h-full absolute left-0 bottom-0 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7);">
                                <h2 class="text-5xl text-center font-light text-white mt-32 mb-2">Simone <br> biles 10</h2>
                                <hr class="h-[5px] w-[30px] block mx-auto my-4 bg-white border-0 dark:bg-white">
                                <p class="text-sm font-bold text-center text-white">This name</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:flex hidden">
                        <button class="control-button left" id="prev-btn"><i class="fa-solid fa-angle-left"></i></button>
                        <button class="control-button right" id="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>

                    <div class="indicator-container hidden">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- new -->
    <section class="my-10 text-center" data-aos="fade-up" data-aos-duration="2000">
        <a href="#"
            class="bg-gray-500 px-10 py-5 rounded-[40px] text-xl hover:tracking-widest duration-500">Subscription Now</a>
    </section>

    <!-- new start -->
    <section class="max-w-screen-xl mx-auto my-20">
        <div class="text-white text-center ">
            <h2 class="text-3xl md:text-5xl font-bold my-8" data-aos="fade-right" data-aos-duration="2000">Start your journey today?</h2>
            <p class="px-5 md:px-0">Choose from 3 plans.Starting at <span class="font-bold">$10/month</span>, billed
                annually.</p>

            <div class="mt-10 -px-2" data-aos="fade-up" data-aos-duration="1000">
                <a href="#"
                    class="bg-red-500 px-6 py-2 rounded-xl text-lg font-semibold uppercase hover:bg-red-700 hover:tracking-widest duration-500">Sign Up</a>
                <a href="#"
                    class="bg-gray-400 px-6 py-2 rounded-xl text-lg font-semibold uppercase ms-2 hover:bg-gray-500 hover:tracking-widest duration-500">Subscription Now</a>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg my-32 mx-4 md:mx-5">
            <div class="grid lg:grid-cols-2 lg:px-10 xl:px-44">
                <div class="mt-[-40px] lg:mb-[-40px]">
                    <img class="w-[300px] block mx-auto lg:w-full"
                        src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/maw_banner_image.png"
                        alt="">
                </div>
                <div class="lg:ml-10 mt-5 lg:mt-20 text-white text-center lg:text-start">
                    <h2 class="text-xl font-bold my-5 lg:my-0">MasterClass at work</h2>
                    <h3 class="uppercase font-bold text-4xl lg:text-3xl md:text-[40px] tracking-tighter my-5 px-2 md:px-0">Level Up Your
                        Team</h3>
                    <p>See why leading organizations rely on <br> MasterClass for learning & development.
                    </p>
                    <div class="mt-10 mb-10">
                        <a href="#" class="px-6 py-3 md:px-8 rounded-lg bg-red-500 font-bold hover:bg-red-700 hover:tracking-widest duration-500">Contact Us</a>
                        <a href="#" class="px-6 py-3 md:px-8 rounded-lg bg-transparent font-bold hover:tracking-widest duration-500">Learn More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="max-w-screen-xl mx-auto">
        <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl lg:text-5xl font-bold py-10 md:py-5 px-2 text-white">Testimonials</h2>
        </div>
        <div id="default-carousel" class="relative w-full hidden md:block py-32" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-[500px]">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex">
                        <div
                            class="z-[100] bg-gray-400 px-16 py-10 text-xl absolute md:left-[10%] lg:left-[15%] md:top-[20%] lg:top-[20%] rounded-lg">
                            <p class="md:max-w-[340px] md:h-[200px] lg:max-w-[500px]">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ducimus?
                                quis quibusdam quae rerum minima, vel </p>
                            <h2 class="mt-4 text-white">Robert <span class="text-gray-500 ms-2">Entertainer, USA</span>
                            </h2>
                        </div>
                        <img class="w-[350px] absolute right-[15%] bottom-0 z-[1] rounded-lg"
                            src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-taylor-3x4.jpeg"
                            alt="">
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex">
                        <div class="z-[100] bg-gray-400 px-16 py-10 text-xl absolute md:left-[10%] lg:left-[15%] md:top-[20%] lg:top-[20%] rounded-lg">
                            <p class="md:max-w-[340px] md:h-[200px] lg:max-w-[500px]">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ducimus?
                                quis quibusdam quae rerum minima, vel </p>
                            <h2 class="mt-4 text-white">Robert <span class="text-gray-500 ms-2">Entertainer, USA</span>
                            </h2>
                        </div>
                        <img class="w-[350px] absolute right-[15%] bottom-0 z-[1] rounded-lg"
                            src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-clarissa-3x4.jpeg"
                            alt="">
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex">
                        <div
                            class="z-[100] bg-gray-400 px-16 py-10 text-xl absolute md:left-[10%] lg:left-[15%] md:top-[20%] lg:top-[20%] rounded-lg">
                            <p class="md:max-w-[340px] md:h-[200px] lg:max-w-[500px]">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ducimus?
                                quis quibusdam quae rerum minima, vel </p>
                            <h2 class="mt-4 text-white">Robert <span class="text-gray-500 ms-2">Entertainer, USA</span>
                            </h2>
                        </div>
                        <img class="w-[350px] absolute right-[15%] bottom-0 z-[1] rounded-lg"
                            src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-mirko-3x4.jpeg"
                            alt="">
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex">
                        <div
                            class="z-[100] bg-gray-400 px-16 py-10 text-xl absolute md:left-[10%] lg:left-[15%] md:top-[20%] lg:top-[20%] rounded-lg">
                            <p class="md:max-w-[340px] md:h-[200px] lg:max-w-[500px]">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ducimus?
                                quis quibusdam quae rerum minima, vel </p>
                            <h2 class="mt-4 text-white">Robert <span class="text-gray-500 ms-2">Entertainer, USA</span>
                            </h2>
                        </div>
                        <img class="w-[350px] absolute right-[15%] bottom-0 z-[1] rounded-lg"
                            src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-wendi-3x4.jpeg"
                            alt="">
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex">
                        <div
                            class="z-[100] bg-gray-400 px-16 py-10 text-xl absolute md:left-[10%] lg:left-[15%] md:top-[20%] lg:top-[20%] rounded-lg">
                            <p class="md:max-w-[340px] md:h-[200px] lg:max-w-[500px]">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ducimus?
                                quis quibusdam quae rerum minima, vel </p>
                            <h2 class="mt-4 text-white">Robert <span class="text-gray-500 ms-2">Entertainer, USA</span>
                            </h2>
                        </div>
                        <img class="w-[350px] absolute right-[15%] bottom-0 z-[1] rounded-lg"
                            src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-mikaila-3x4.jpeg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="swiper mySwiper px-10 sm:px-20 flex md:hidden">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <div
                        class="w-full bg-gray-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full"
                                src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-taylor-16x9.jpeg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum, ducimus? quis quibusdam quae rerum minima, vel</p>
                            <div class="mt-20 text-white">
                                Robert Entertainer, USA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="w-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full"
                                src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-clarissa-16x9.jpeg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum, ducimus? quis quibusdam quae rerum minima, vel</p>
                            <div class="mt-20 text-white">
                                Robert Entertainer, USA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="w-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full"
                                src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-mirko-16x9.jpeg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum, ducimus? quis quibusdam quae rerum minima, vel</p>
                            <div class="mt-20 text-white">
                                Robert Entertainer, USA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="w-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full"
                                src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-wendi-16x9.jpeg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum, ducimus? quis quibusdam quae rerum minima, vel</p>
                            <div class="mt-20 text-white">
                                Robert Entertainer, USA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="w-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full"
                                src="https://www.masterclass.com/cdn-cgi/image/width=3840,quality=75,format=webp/https://static.masterclass.com/studentStories-mikaila-16x9.jpeg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Perferendis Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eum, ducimus? quis quibusdam quae rerum minima, vel</p>
                            <div class="mt-20 text-white">
                                Robert Entertainer, USA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div>  -->
        </div>
    </section>

    <!--  video  -->
    <section class="overflow-hidden mt-10">
        <div class="w-full relative h-[80vh] lg:h-[100vh] overflow-hidden">
            <video class="absolute top-0 left-0 w-full h-full object-cover z-[-1]" autoplay muted loop id="myVideo">
                <source src="https://player.vimeo.com/progressive_redirect/playback/887673049/rendition/1080p/file.mp4?loc=external&log_user=0&signature=d2fb16e953bceb3394adfc2bdb6da0705e4fcfd9e7e60047193939fd2a7a7e46" type="video/mp4">
            </video>

            <div class="text-white px-5 py-10 md:p-28">

                <div class="flex justify-between items-center content-center" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-xl md:text-4xl font-bold mb-5 capitalize">Choose a category to watch a class highlight</h1>
                    <button id="myBtn" class="px-5 py-3 bg-transparent border-2 border-gray-600 hover:bg-gray-600 rounded-full text-white"><i class="fa-solid fa-pause text-xl" id="stop-video"></i></button>
                </div>

                <div class="flex flex-col">
                    <a href="#" class="mt-5 text-xl font-bold hover:underline" data-aos="fade-up" data-aos-duration="1000">Acting & Performing Arts</a>
                    <a href="#" class="mt-5 text-xl font-bold hover:underline" data-aos="fade-up" data-aos-duration="1500">Business & Entrepreneurship</a>
                    <a href="#" class="mt-5 text-xl font-bold hover:underline" data-aos="fade-up" data-aos-duration="2000">Community & Government</a>
                    <a href="#" class="mt-5 text-xl font-bold hover:underline" data-aos="fade-up" data-aos-duration="2500">Acting & Performing Arts</a>
                    <a href="#" class="mt-5 text-xl font-bold hover:underline" data-aos="fade-up" data-aos-duration="3000">Acting & Performing Arts</a>
                </div>
            </div>

        </div>
    </section>

    <!--  contact  -->
    <section class="grid md:grid-cols-2 py-20 max-w-screen-xl mx-auto px-0 md:px-10">
        <div class="text-white text-center md:text-start mt-3" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-xl font-bold">Try some of our  classes</h1>
            <p class="px-5 md:px-0 mt-2 font-semibold text-gray-600 text-lg">Enter your emal and we'll send you samples of our favorites  classes.</p>
        </div>
        <div class="px-5 py-5 md:py-0">
            <div class="w-full rounded-lg shadow-md">
                <label for="message" class="block text-white text-sm font-medium mb-2">Email</label>
                <div class="flex justify-between items-center content-center">
                    <input type="email" id="email" placeholder="Enter Email Address ..."class="w-full bg-gray-800 px-3 py-3 rounded-md shadow-sm text-white focus:outline-none focus:ring-0"/>
                    <div class="ml-3 md:px-4 lg:px-14 items-center py-2 bg-transparent border-2 border-gray-600 rounded-md text-xl text-white hover:bg-gray-500 hidden md:flex">Submit</div>
                </div>
            </div>
            <div class="flex items-center mb-4 mt-2">
                <input id="default-checkbox" type="checkbox" value="" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-[13px] font-medium text-gray-200 dark:text-gray-300">I agree to receive email updates</label>

            </div>
            <p class="text-white text-[12px]">By sharing your email, you agree to our <a href="#" class="underline">Terms of Service</a> and <a href="#" class="underline">Privacy Policy</a></p>
        </div>

        <div class="px-5 md:hidden">
            <div class="px-14 items-center py-2 bg-transparent text-center border-2 border-gray-600 rounded-md text-xl text-white hover:bg-gray-500">Submit</div>
        </div>


    </section>


    {{-- message --}}
    <section>
        {{-- <div class="fixed bottom-6 right-6 tooltip-container">
            <button class="relative bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600 transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M7 10h6m-6 3h10" />
                </svg>
                <!-- Tooltip -->
                <div class="tooltip absolute bottom-full right-1 bg-gray-700 text-white text-sm rounded py-1 px-2 whitespace-no-wrap">
                    Send a message
                </div>
            </button>
        </div> --}}
    </section>

    <!--  feature -->
    <section class='w-full px-5 md:px-20 py-32 mt-[-20px] md:mt-[-10px]'>
        <h4 class='text-[#00df9a] text-2xl font-bold tracking-[5px] uppercase text-center md:text-start'
            data-aos="fade-right" data-aos-duration="1000">AS FEATURED IN</h4>

        <div class='max-w-screen-xl mx-auto grid md:grid-cols-4 gap-10 mt-16'>
            <div class='max-full mx-auto' data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="155.428 126.251 297.979 125.321"
                        viewBox="155.428 126.251 297.979 125.321" height="100" width="100"
                        xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
                        <defs></defs>
                        <g>
                            <path
                                d="M210 197l41.785 5 w-48 h-72253L193 209l-7 4-7.769 38.572h-22.803l22.049-125.321h22.802L188 189l-2 8 58.19-70.749h26.441L210 197z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M371.76 126.251l-3.392 19.976h-36.56L313.34 251.572h-22.991l18.656-105.345h-35.618l3.393-19.976h94.98z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path d="M388.333 126.251h22.991l-18.468 105.345H446l-3.581 19.976h-76.135l22.049-125.321z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path d="M166.483 196.441h286.924l-3.581 20.111H162.901l3.582-20.111z" fill="#A9A9A9"
                                data-color="1"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class='max-full mx-auto' data-aos="fade-up" data-aos-duration="1000">
                <a href="#">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="78 145.587 449 96" viewBox="78 145.587 449 96"
                        height="100" width="100" xmlns="http://www.w3.org/2000/svg" data-type="color"
                        role="presentation" aria-hidden="true">
                        <defs>
                            <style>
                                #comp-jtspqlt2 svg [data-color="1"] {
                                    fill: #757575;
                                }
                            </style>
                        </defs>
                        <g>
                            <path
                                d="M470.533 187.767c-3.627 0-4.367 4.367-4.367 14.652v3.85c0 10.434.889 12.877 4.07 12.877 2.146 0 5.107-2.072 5.107-7.623V195.39c.001-3.996-1.554-7.623-4.81-7.623z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M370.484 186.952c-4.514 0-4.734 5.773-4.734 14.135v5.773c0 8.584.148 14.135 4.66 14.135 4.219 0 4.441-4.367 4.441-13.986v-6.291c.001-7.992-.222-13.766-4.367-13.766z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M78 145.587v96h449v-96H78zm140.121 21.903c4.59 0 7.328 2.295 7.328 6.809 0 3.922-2.148 6.957-7.477 6.957-5.992 0-7.398-3.775-7.398-6.883 0-3.628 1.996-6.883 7.547-6.883zm-61.639 20.869c-3.996-12.062-6.291-17.021-13.025-17.021h-.887v48.695h6.289v1.555h-27.012v-1.555h6.291v-48.695h-.963c-6.734 0-9.25 5.551-13.023 17.021h-1.406l.738-18.574h43.664l.74 18.574h-1.406zm49.358 33.228h-20.943v-1.332h3.033v-24.051c0-6.291-.887-7.031-2.738-7.031-3.105 0-5.992 4.662-5.992 10.656v20.426h3.182v1.332h-21.018v-1.332h4.07v-52.84h-4.07v-1.332H179.2v27.086c1.258-3.701 3.699-7.549 11.025-7.549 6.883 0 11.471 3.404 11.471 12.359v22.275h4.145v1.333zm23.086 0h-21.979v-1.332h4.07v-32.562h-4.365v-1.332h18.129v33.895h4.145v1.331zm17.537.74c-3.553 0-6.068-.74-8.881-2.146-.443-.295-1.109-.592-1.406-.592-.961 0-1.996.666-3.182 2.738h-.889v-13.248h.889c2.738 9.029 7.252 11.619 13.322 11.619 5.477 0 7.547-1.998 7.547-4.811 0-3.33-3.625-4.07-9.25-5.623-5.922-1.629-12.508-3.922-12.508-12.137 0-7.549 5.18-12.508 13.025-12.508 3.256 0 5.477.814 7.475 1.703.889.369 1.184.592 2.072.592 1.111 0 1.627-.592 2.59-2.443h.814v11.324h-.887c-2.666-6.809-6.439-9.621-11.695-9.621-4.883 0-6.881 1.998-6.881 4.293 0 3.402 4.439 4.217 9.324 5.549 5.846 1.555 12.357 3.924 12.357 12.656.002 8.437-5.473 12.655-13.836 12.655zm103.307-51.138h-4.883l-13.617 51.139h-6.588l-10.951-33.451-9.621 33.451h-6.439l-18.65-51.139h-3.477v-1.404h24.051v1.404h-5.18l12.062 35.449 6.143-21.312-4.439-14.137h-4.219v-1.404h22.941v1.404h-4.367l11.027 35.006 8.881-35.006h-7.475v-1.404h14.801v1.404zm20.494 51.138c-12.434 0-18.725-6.66-18.725-18.205 0-12.137 7.254-18.502 19.168-18.502 12.434 0 18.354 5.848 18.354 17.836 0 12.137-5.623 18.871-18.797 18.871zm50.248-21.757c-4.959 0-7.328-3.107-5.773-8.363h2.664c1.48-3.033 0-3.773-1.555-3.773-3.551 0-6.883 5.328-6.883 11.988v19.834h5.256v1.332h-23.09v-1.332h4.07v-32.562h-4.07v-1.332h17.834v7.105c1.332-5.256 5.477-7.846 9.918-7.846 4.367 0 7.844 2.295 7.844 7.918 0 4.218-2.219 7.031-6.215 7.031zm29.226 21.017H427.76v-1.332h4.07v-52.84h-4.365v-1.332h18.129v54.172h4.145v1.332zm42.996 0h-16.43l-.812-5.18c-1.555 3.699-4.441 5.92-10.215 5.92-8.215 0-13.395-5.846-13.395-18.279 0-12.508 5.18-18.428 14.652-18.428 4.59 0 7.254 1.332 8.586 3.627v-21.832h-4.516v-1.332h18.504v54.172h3.625v1.332z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M78 145.587v96h449v-96H78zm140.121 21.903c4.59 0 7.328 2.295 7.328 6.809 0 3.922-2.148 6.957-7.477 6.957-5.992 0-7.398-3.775-7.398-6.883 0-3.628 1.996-6.883 7.547-6.883zm-61.639 20.869c-3.996-12.062-6.291-17.021-13.025-17.021h-.887v48.695h6.289v1.555h-27.012v-1.555h6.291v-48.695h-.963c-6.734 0-9.25 5.551-13.023 17.021h-1.406l.738-18.574h43.664l.74 18.574h-1.406zm49.358 33.228h-20.943v-1.332h3.033v-24.051c0-6.291-.887-7.031-2.738-7.031-3.105 0-5.992 4.662-5.992 10.656v20.426h3.182v1.332h-21.018v-1.332h4.07v-52.84h-4.07v-1.332H179.2v27.086c1.258-3.701 3.699-7.549 11.025-7.549 6.883 0 11.471 3.404 11.471 12.359v22.275h4.145v1.333zm23.086 0h-21.979v-1.332h4.07v-32.562h-4.365v-1.332h18.129v33.895h4.145v1.331zm17.537.74c-3.553 0-6.068-.74-8.881-2.146-.443-.295-1.109-.592-1.406-.592-.961 0-1.996.666-3.182 2.738h-.889v-13.248h.889c2.738 9.029 7.252 11.619 13.322 11.619 5.477 0 7.547-1.998 7.547-4.811 0-3.33-3.625-4.07-9.25-5.623-5.922-1.629-12.508-3.922-12.508-12.137 0-7.549 5.18-12.508 13.025-12.508 3.256 0 5.477.814 7.475 1.703.889.369 1.184.592 2.072.592 1.111 0 1.627-.592 2.59-2.443h.814v11.324h-.887c-2.666-6.809-6.439-9.621-11.695-9.621-4.883 0-6.881 1.998-6.881 4.293 0 3.402 4.439 4.217 9.324 5.549 5.846 1.555 12.357 3.924 12.357 12.656.002 8.437-5.473 12.655-13.836 12.655zm103.307-51.138h-4.883l-13.617 51.139h-6.588l-10.951-33.451-9.621 33.451h-6.439l-18.65-51.139h-3.477v-1.404h24.051v1.404h-5.18l12.062 35.449 6.143-21.312-4.439-14.137h-4.219v-1.404h22.941v1.404h-4.367l11.027 35.006 8.881-35.006h-7.475v-1.404h14.801v1.404zm20.494 51.138c-12.434 0-18.725-6.66-18.725-18.205 0-12.137 7.254-18.502 19.168-18.502 12.434 0 18.354 5.848 18.354 17.836 0 12.137-5.623 18.871-18.797 18.871zm50.248-21.757c-4.959 0-7.328-3.107-5.773-8.363h2.664c1.48-3.033 0-3.773-1.555-3.773-3.551 0-6.883 5.328-6.883 11.988v19.834h5.256v1.332h-23.09v-1.332h4.07v-32.562h-4.07v-1.332h17.834v7.105c1.332-5.256 5.477-7.846 9.918-7.846 4.367 0 7.844 2.295 7.844 7.918 0 4.218-2.219 7.031-6.215 7.031zm29.226 21.017H427.76v-1.332h4.07v-52.84h-4.365v-1.332h18.129v54.172h4.145v1.332zm42.996 0h-16.43l-.812-5.18c-1.555 3.699-4.441 5.92-10.215 5.92-8.215 0-13.395-5.846-13.395-18.279 0-12.508 5.18-18.428 14.652-18.428 4.59 0 7.254 1.332 8.586 3.627v-21.832h-4.516v-1.332h18.504v54.172h3.625v1.332z"
                                fill="#A9A9A9" data-color="1"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class='max-full mx-auto' data-aos="fade-up" data-aos-duration="1000">
                <a href="#">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="131.412 131.47 328.579 129.164"
                        viewBox="131.412 131.47 328.579 129.164" height="100" width="100"
                        xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
                        <defs>
                            <style>
                                #comp-jtspqlt51 svg [data-color="1"] {
                                    fill: #757575;
                                }
                            </style>
                        </defs>
                        <g>
                            <path
                                d="M221.984 133.758c0 .848-.324 1.366-.97 1.557-.647.191-1.479.286-2.495.286h-38.737v60.946c0 .626-.024 1.211-.069 1.753a4.233 4.233 0 0 1-.381 1.47 2.532 2.532 0 0 1-.866 1.033c-.37.25-.901.375-1.594.375-1.202 0-1.999-.47-2.391-1.408-.393-.938-.589-2.012-.589-3.223v-60.946h-38.807c-1.017 0-1.883-.095-2.599-.286-.717-.19-1.074-.709-1.074-1.557 0-.635.161-1.111.485-1.429a2.648 2.648 0 0 1 1.213-.668 6.585 6.585 0 0 1 1.663-.19h84.161c.6 0 1.12.063 1.559.19.438.127.797.35 1.074.668.279.317.417.794.417 1.429z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M261.207 198.111c4.389 0 8.223-.25 11.503-.751 3.28-.5 6.098-1.104 8.454-1.814 2.356-.709 4.285-1.439 5.787-2.189 1.5-.751 2.668-1.377 3.5-1.878.277-.083.461-.125.554-.125.508 0 .981.219 1.42.657.438.438.659.907.659 1.408 0 .459-.232.835-.693 1.126-.416.375-1.306.96-2.668 1.752-1.363.793-3.315 1.596-5.855 2.409-2.541.813-5.682 1.533-9.424 2.159-3.742.625-8.177.938-13.305.938-5.359 0-9.909-.605-13.651-1.814-3.742-1.21-6.791-2.899-9.147-5.069a18.94 18.94 0 0 1-5.128-7.821c-1.063-3.045-1.594-6.383-1.594-10.012 0-4.839.854-8.864 2.564-12.077 1.709-3.212 4.054-5.788 7.034-7.728 2.98-1.939 6.49-3.306 10.533-4.099 4.042-.792 8.396-1.188 13.062-1.188 9.608 0 16.805 1.639 21.586 4.914 4.782 3.274 7.172 7.962 7.172 14.061 0 .576-.046 1.216-.139 1.916-.093.7-.22 1.369-.381 2.008-.163.64-.347 1.176-.555 1.607-.208.433-.405.648-.589.648h-54.745c.092 3.823.658 7.06 1.698 9.711s2.564 4.81 4.574 6.474c2.009 1.665 4.492 2.877 7.449 3.638 2.955.76 6.397 1.139 10.325 1.139zm3.603-42.424c-4.296 0-8.108.334-11.434 1.001-3.326.668-6.156 1.742-8.489 3.223-2.333 1.481-4.147 3.39-5.44 5.726-1.294 2.337-2.033 5.193-2.217 8.572h52.25v-3.379c0-2.085-.428-4.046-1.282-5.882-.855-1.835-2.252-3.441-4.192-4.818-1.94-1.376-4.481-2.461-7.623-3.253-3.142-.793-6.999-1.19-11.573-1.19z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M345.056 155.687c-5.313 0-9.84.397-13.582 1.189-3.742.792-6.803 2.055-9.182 3.785-2.38 1.731-4.123 3.953-5.232 6.664-1.109 2.712-1.663 5.966-1.663 9.762 0 3.839.612 7.092 1.836 9.762 1.224 2.67 3.072 4.84 5.544 6.508 2.471 1.669 5.554 2.878 9.251 3.629 3.695.751 8.015 1.126 12.958 1.126 2.217 0 4.47-.146 6.756-.438a81.96 81.96 0 0 0 6.549-1.096 64.927 64.927 0 0 0 5.751-1.47c1.755-.542 3.188-1.064 4.296-1.564.693-.208 1.178-.313 1.455-.313.6 0 1.074.157 1.421.47.346.312.52.699.52 1.157 0 .335-.116.679-.346 1.033-.232.354-.601.656-1.109.907a49.505 49.505 0 0 1-12.612 3.91c-4.343.729-8.547 1.096-12.612 1.096-5.267 0-10.06-.376-14.379-1.127-4.32-.751-8.016-2.064-11.087-3.941a19.644 19.644 0 0 1-7.172-7.572c-1.709-3.169-2.564-7.195-2.564-12.076 0-4.839.785-8.864 2.356-12.077 1.57-3.212 3.856-5.788 6.86-7.728 3.002-1.939 6.687-3.306 11.053-4.099 4.366-.792 9.343-1.188 14.934-1.188 4.064 0 8.269.365 12.612 1.095a49.548 49.548 0 0 1 12.612 3.911c.508.25.877.553 1.109.907.23.354.346.699.346 1.032 0 .46-.173.845-.52 1.157-.347.313-.821.47-1.421.47-.277 0-.762-.104-1.455-.312-1.109-.501-2.541-1.022-4.296-1.564a65.006 65.006 0 0 0-5.751-1.471 82.421 82.421 0 0 0-6.549-1.095 52.596 52.596 0 0 0-6.687-.439z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M452.812 196.673c0 .542-.035 1.085-.104 1.627s-.197 1.022-.381 1.438a2.662 2.662 0 0 1-.797 1.033c-.347.271-.797.406-1.352.406-.693 0-1.225-.135-1.594-.406a2.812 2.812 0 0 1-.866-1.033 3.935 3.935 0 0 1-.381-1.438 19.242 19.242 0 0 1-.069-1.627v-21.651c0-3.254-.277-6.09-.832-8.51-.554-2.419-1.605-4.432-3.153-6.038-1.548-1.605-3.708-2.806-6.479-3.598-2.772-.792-6.375-1.189-10.811-1.189-2.68 0-5.567.198-8.662.595a43.227 43.227 0 0 0-8.835 2.064c-2.795.98-5.278 2.284-7.449 3.911-2.172 1.627-3.673 3.671-4.504 6.132v28.284c0 .542-.035 1.085-.104 1.627s-.197 1.022-.381 1.438c-.185.418-.45.762-.797 1.033-.346.271-.797.406-1.351.406-.647 0-1.167-.135-1.559-.406a2.697 2.697 0 0 1-.901-1.033 3.915 3.915 0 0 1-.381-1.438 19.242 19.242 0 0 1-.069-1.627v-60.822c0-.5.023-1.011.069-1.533.045-.521.173-.99.381-1.407s.508-.761.901-1.033c.392-.271.912-.406 1.559-.406.554 0 1.005.125 1.351.375.347.251.612.585.797 1.001.184.418.312.888.381 1.408.069.522.104 1.054.104 1.596v28.158a10.58 10.58 0 0 1 2.599-4.38c1.224-1.252 2.656-2.325 4.296-3.223 1.639-.896 3.453-1.627 5.44-2.19a55.28 55.28 0 0 1 5.994-1.345 59.552 59.552 0 0 1 5.89-.688 81.033 81.033 0 0 1 5.232-.188c4.989 0 9.193.386 12.612 1.157 3.418.772 6.179 2.055 8.281 3.849 2.102 1.794 3.614 4.161 4.539 7.102.923 2.941 1.386 6.581 1.386 10.919v21.65z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M175.002 245.548l21.626-29.356c.349-.482.703-.829 1.064-1.039.36-.21.715-.315 1.064-.315.441 0 .808.163 1.099.488.29.326.436.73.436 1.213v31.183c0 .609-.082 1.129-.245 1.56s-.582.646-1.255.646c-.582 0-.971-.215-1.169-.646s-.296-.95-.296-1.56v-27.97l-20.615 27.466c-.558.714-1.128 1.071-1.709 1.071-.628 0-1.198-.357-1.709-1.071l-20.615-27.466v27.97c0 .609-.099 1.129-.296 1.56-.198.431-.588.646-1.168.646-.675 0-1.094-.215-1.256-.646-.163-.431-.244-.95-.244-1.56v-31.183c0-.482.145-.887.436-1.213a1.412 1.412 0 0 1 1.099-.488c.325 0 .668.105 1.029.315s.727.557 1.099 1.039l21.625 29.356z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M228.127 227.027c-2.232 0-4.14.052-5.721.157a51.07 51.07 0 0 0-4.063.408 32.07 32.07 0 0 0-2.843.534c-.767.188-1.442.377-2.023.565-.279 0-.535-.125-.768-.377s-.349-.524-.349-.818c0-.272.14-.472.418-.598.186-.084.622-.22 1.308-.409.686-.188 1.651-.383 2.896-.582 1.244-.199 2.791-.373 4.639-.52s4.029-.22 6.541-.22c1.186 0 2.36.068 3.523.204 1.163.137 2.261.384 3.296.74 1.034.357 2 .851 2.895 1.48.895.63 1.663 1.444 2.302 2.441s1.145 2.205 1.518 3.622c.372 1.417.558 3.082.558 4.992v9.071c0 .252-.012.504-.035.756a2.077 2.077 0 0 1-.192.709c-.104.221-.25.399-.436.535-.186.137-.442.205-.767.205-.535 0-.901-.221-1.099-.661-.198-.441-.296-.997-.296-1.67v-2.173c-.465.524-1.07 1.07-1.814 1.638-.744.566-1.686 1.087-2.825 1.559-1.14.473-2.5.861-4.081 1.166-1.582.304-3.454.457-5.616.457-2.023 0-3.924-.136-5.703-.406-1.779-.271-3.326-.697-4.639-1.281-1.314-.583-2.349-1.338-3.104-2.265-.756-.927-1.134-2.046-1.134-3.358 0-1.521.354-2.785 1.064-3.795.709-1.011 1.691-1.823 2.947-2.438s2.727-1.046 4.413-1.296 3.506-.375 5.459-.375h4.413c1.477 0 2.878.097 4.204.29 1.325.194 2.54.434 3.645.718 1.104.285 2.028.621 2.773 1.008 0-2.142-.314-3.863-.942-5.165-.627-1.302-1.465-2.315-2.511-3.04s-2.25-1.207-3.61-1.449a24.504 24.504 0 0 0-4.241-.359zm-14.824 15.843c0 1.008.285 1.858.854 2.552.57.692 1.366 1.26 2.39 1.7 1.023.441 2.238.762 3.645.961 1.407.2 2.947.3 4.622.3 2.046 0 3.86-.131 5.441-.395 1.581-.262 2.965-.593 4.151-.992 1.186-.398 2.186-.834 3-1.307.813-.473 1.488-.93 2.023-1.37v-6.331c-2.326-.294-4.732-.572-7.221-.835s-5-.394-7.534-.394c-1.791 0-3.39.095-4.796.283-1.407.189-2.599.515-3.575.977-.977.462-1.722 1.087-2.233 1.874-.512.789-.767 1.781-.767 2.977z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M269.044 258.431c1.907 0 3.668-.153 5.285-.457 1.616-.305 3.011-.771 4.186-1.401 1.174-.631 2.093-1.434 2.755-2.41.663-.977.994-2.147.994-3.512v-3.748c-1 .63-2.07 1.16-3.209 1.59-1.14.431-2.308.772-3.505 1.024-1.198.252-2.407.436-3.628.551s-2.401.174-3.541.174c-2.651 0-5.012-.185-7.081-.552-2.07-.367-3.826-1.013-5.267-1.938-1.442-.923-2.541-2.188-3.296-3.795-.756-1.606-1.134-3.638-1.134-6.095s.43-4.499 1.291-6.127a10.013 10.013 0 0 1 3.663-3.905c1.581-.977 3.482-1.664 5.704-2.063 2.22-.398 4.691-.598 7.412-.598 2.395 0 4.366.204 5.913.613 1.546.41 2.791.914 3.732 1.513.942.598 1.627 1.255 2.058 1.969.43.714.727 1.365.889 1.952 0-.378-.017-.813-.052-1.307a20.673 20.673 0 0 1-.052-1.465c0-.714.075-1.333.227-1.858.151-.524.482-.787.994-.787.349 0 .627.068.837.204.209.137.378.311.506.52.127.211.215.447.262.709.046.263.07.52.07.771v22.647c0 3.317-1.39 5.812-4.168 7.48-2.779 1.67-6.727 2.504-11.843 2.504-1.674 0-3.168-.073-4.482-.22a29.141 29.141 0 0 1-3.488-.583 19.757 19.757 0 0 1-2.704-.835c-.791-.314-1.5-.63-2.128-.945-.256-.062-.558-.226-.907-.487-.349-.264-.523-.573-.523-.93 0-.399.157-.683.471-.851s.541-.252.68-.252c.209 0 .454.068.732.205.279.136.599.294.959.473.36.178.761.367 1.203.566.441.199.93.362 1.465.488.977.294 2.163.562 3.558.804 1.395.243 3.116.364 5.162.364zm.907-31.089c-2.768 0-5.134.185-7.099.551-1.965.368-3.575.967-4.831 1.796-1.256.83-2.175 1.916-2.756 3.26-.582 1.345-.872 2.982-.872 4.914s.244 3.57.732 4.913c.488 1.345 1.285 2.431 2.39 3.261 1.104.829 2.558 1.428 4.36 1.795 1.802.368 4.017.552 6.645.552a38.52 38.52 0 0 0 3.645-.174c1.221-.115 2.424-.304 3.61-.566s2.325-.594 3.418-.992a18.174 18.174 0 0 0 3.069-1.449v-11.78c-.163-.588-.459-1.233-.889-1.938-.431-.703-1.105-1.364-2.023-1.984-.919-.619-2.134-1.134-3.645-1.543-1.51-.411-3.429-.616-5.754-.616z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M312.891 227.027c-2.232 0-4.14.052-5.721.157a51.07 51.07 0 0 0-4.063.408 32.07 32.07 0 0 0-2.843.534c-.767.188-1.442.377-2.023.565-.279 0-.535-.125-.768-.377s-.349-.524-.349-.818c0-.272.14-.472.418-.598.186-.084.622-.22 1.308-.409.686-.188 1.651-.383 2.896-.582 1.244-.199 2.791-.373 4.639-.52s4.029-.22 6.541-.22c1.186 0 2.36.068 3.523.204 1.163.137 2.261.384 3.296.74 1.034.357 2 .851 2.895 1.48.895.63 1.663 1.444 2.302 2.441s1.145 2.205 1.518 3.622c.372 1.417.558 3.082.558 4.992v9.071c0 .252-.012.504-.035.756a2.077 2.077 0 0 1-.192.709c-.104.221-.25.399-.436.535-.186.137-.442.205-.767.205-.535 0-.901-.221-1.099-.661-.198-.441-.296-.997-.296-1.67v-2.173c-.465.524-1.07 1.07-1.814 1.638-.744.566-1.686 1.087-2.825 1.559-1.14.473-2.5.861-4.081 1.166-1.582.304-3.454.457-5.616.457-2.023 0-3.924-.136-5.703-.406-1.779-.271-3.326-.697-4.639-1.281-1.314-.583-2.349-1.338-3.104-2.265-.756-.927-1.134-2.046-1.134-3.358 0-1.521.354-2.785 1.064-3.795.709-1.011 1.691-1.823 2.947-2.438s2.727-1.046 4.413-1.296 3.506-.375 5.459-.375h4.413c1.477 0 2.878.097 4.204.29 1.325.194 2.54.434 3.645.718 1.104.285 2.028.621 2.773 1.008 0-2.142-.314-3.863-.942-5.165-.627-1.302-1.465-2.315-2.511-3.04s-2.25-1.207-3.61-1.449a24.512 24.512 0 0 0-4.241-.359zm-14.825 15.843c0 1.008.285 1.858.854 2.552.57.692 1.366 1.26 2.39 1.7 1.023.441 2.238.762 3.645.961 1.407.2 2.947.3 4.622.3 2.046 0 3.86-.131 5.441-.395 1.581-.262 2.965-.593 4.151-.992 1.186-.398 2.186-.834 3-1.307.813-.473 1.488-.93 2.023-1.37v-6.331c-2.326-.294-4.732-.572-7.221-.835s-5-.394-7.534-.394c-1.791 0-3.39.095-4.796.283-1.407.189-2.599.515-3.575.977-.977.462-1.722 1.087-2.233 1.874-.511.789-.767 1.781-.767 2.977z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M337.413 249.926c-.396 0-.738-.137-1.029-.409a1.326 1.326 0 0 1-.436-1.008c0-.546.302-1.061.907-1.544l23.895-19.056h-23.546c-.303 0-.57-.032-.803-.095a1.238 1.238 0 0 1-.558-.3c-.139-.136-.209-.33-.209-.582 0-.315.063-.552.192-.709.127-.157.308-.268.541-.331.232-.062.494-.094.785-.094h25.516c.558 0 .988.131 1.291.394.302.263.454.582.454.961 0 .524-.279 1.008-.837 1.448l-24.068 19.214h23.789c.302 0 .569.031.802.095.232.062.418.173.558.33.139.158.209.395.209.709 0 .252-.076.446-.227.583a1.374 1.374 0 0 1-.576.299 3 3 0 0 1-.785.095h-25.865z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M373.69 218.68c0-.482.174-.887.523-1.213.349-.325.791-.487 1.326-.487s.988.162 1.36.487c.372.326.558.73.558 1.213 0 .483-.187.872-.558 1.166-.372.294-.826.44-1.36.44-.535 0-.977-.146-1.326-.44-.348-.294-.523-.683-.523-1.166zm3.244 29.261c0 .273-.012.53-.035.771a1.966 1.966 0 0 1-.157.63.93.93 0 0 1-.401.426c-.187.105-.454.157-.802.157-.651 0-1.046-.178-1.186-.535s-.209-.84-.209-1.449V227.72c0-.524.082-.977.244-1.354s.57-.566 1.221-.566c.581 0 .947.188 1.099.566.151.378.227.809.227 1.292v20.283z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M419.456 247.658c0 .272-.023.546-.07.818-.047.273-.122.515-.227.725s-.25.384-.436.52c-.187.137-.418.205-.698.205-.349 0-.61-.068-.785-.205a1.326 1.326 0 0 1-.401-.52 1.971 1.971 0 0 1-.157-.725 18.603 18.603 0 0 1-.018-.818V236.76c0-1.638-.134-3.065-.401-4.284-.268-1.217-.791-2.23-1.57-3.039-.779-.809-1.861-1.412-3.244-1.812-1.384-.398-3.192-.598-5.424-.598-1.372 0-2.825.1-4.36.299-1.535.2-3 .546-4.396 1.039-1.395.494-2.628 1.15-3.697 1.969-1.07.819-1.814 1.849-2.232 3.087v14.237c0 .272-.012.546-.035.818a2.276 2.276 0 0 1-.174.725c-.093.21-.227.384-.401.52-.175.137-.401.205-.68.205-.326 0-.588-.068-.785-.205a1.35 1.35 0 0 1-.453-.52 2.22 2.22 0 0 1-.209-.725 6.418 6.418 0 0 1-.052-.818v-20.411c0-.356.081-.688.244-.992.162-.304.569-.456 1.221-.456.581 0 .947.142 1.099.425s.227.625.227 1.023v3.969c.651-1.344 1.558-2.42 2.721-3.229a13.21 13.21 0 0 1 3.82-1.826c1.383-.41 2.791-.678 4.221-.804s2.738-.188 3.924-.188c2.512 0 4.622.194 6.331.582 1.709.389 3.093 1.035 4.151 1.938 1.058.903 1.813 2.095 2.267 3.575s.68 3.312.68 5.496v10.898z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M443.699 248.383c2.209 0 4.139-.126 5.791-.378 1.651-.253 3.07-.557 4.256-.914 1.186-.356 2.156-.725 2.913-1.103a27.142 27.142 0 0 0 1.761-.944c.14-.042.232-.063.279-.063.255 0 .494.11.715.331.221.221.332.457.332.709 0 .23-.117.42-.349.566-.209.189-.658.483-1.343.882-.686.399-1.669.804-2.947 1.213-1.279.409-2.86.771-4.744 1.087-1.884.314-4.116.473-6.697.473-2.698 0-4.988-.305-6.872-.914-1.883-.608-3.418-1.459-4.604-2.551a9.542 9.542 0 0 1-2.582-3.938c-.535-1.532-.802-3.213-.802-5.04 0-2.436.43-4.462 1.291-6.079.86-1.616 2.041-2.913 3.541-3.89s3.267-1.664 5.302-2.063c2.035-.398 4.226-.598 6.575-.598 4.836 0 8.459.824 10.866 2.473s3.61 4.009 3.61 7.078a8.793 8.793 0 0 1-.262 1.976 4.343 4.343 0 0 1-.279.809c-.105.218-.204.327-.296.327h-27.557c.046 1.924.332 3.553.854 4.888.523 1.335 1.291 2.421 2.302 3.259 1.012.838 2.262 1.448 3.75 1.831 1.486.381 3.219.573 5.196.573zm1.814-21.356c-2.163 0-4.081.168-5.755.504s-3.099.877-4.273 1.622c-1.175.745-2.088 1.706-2.738 2.882-.651 1.176-1.024 2.614-1.116 4.315h26.301v-1.701c0-1.05-.215-2.036-.645-2.961-.431-.924-1.134-1.732-2.11-2.425-.977-.693-2.256-1.239-3.837-1.639-1.584-.397-3.525-.597-5.827-.597z"
                                fill="#A9A9A9" data-color="1"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class='max-full mx-auto' data-aos="fade-up" data-aos-duration="1000">
                <a href="#">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="147 132.166 302.986 116.726"
                        viewBox="147 132.166 302.986 116.726" height="100" width="100"
                        xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
                        <defs>
                            <style>
                                #comp-jtspqlt5 svg [data-color="1"] {
                                    fill: #757575;
                                }
                            </style>
                        </defs>
                        <g>
                            <path
                                d="M147 133.58c4.817-.416 9.685-.758 14.61-1.02a284 284 0 0 1 14.926-.394c5.235 0 10.549.526 15.943 1.573s10.265 3.012 14.613 5.891c4.345 2.882 7.877 6.887 10.603 12.017 2.723 5.133 4.086 11.782 4.086 19.953 0 8.168-1.363 14.793-4.086 19.872-2.726 5.081-6.231 9.086-10.524 12.017-4.296 2.933-9.089 4.925-14.375 5.969-5.289 1.05-10.5 1.573-15.633 1.573-1.36 0-2.645-.024-3.848-.078s-2.332-.132-3.376-.237v36.29a58.407 58.407 0 0 1-5.813.629 100.95 100.95 0 0 1-5.5.157c-1.676 0-3.511-.054-5.5-.157a64.456 64.456 0 0 1-6.126-.629V133.58zm22.938 58.127c1.255.21 2.434.316 3.532.316h4.007c2.618 0 5.184-.34 7.696-1.023 2.515-.68 4.739-1.805 6.679-3.376 1.935-1.573 3.478-3.64 4.633-6.207 1.152-2.566 1.727-5.734 1.727-9.504 0-3.872-.575-7.148-1.727-9.817-1.155-2.672-2.699-4.817-4.633-6.441-1.94-1.625-4.164-2.774-6.679-3.457a29.333 29.333 0 0 0-7.696-1.02 63.07 63.07 0 0 0-3.222.078c-.996.054-2.434.184-4.318.391v40.06z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M268.747 143.635c0 1.676.078 3.379.235 5.106.159 1.73.394 3.327.707 4.793h18.695v21.473c.039 0 .077-.006.116-.006 8.008 0 14.5 6.492 14.5 14.5s-6.492 14.5-14.5 14.5c-.039 0-.077-.006-.116-.006v9.705c0 3.77-.551 6.676-1.649 8.719-1.101 2.043-2.464 3.589-4.086 4.636-1.625 1.047-3.43 1.676-5.419 1.884a53.77 53.77 0 0 1-5.656.316c-1.468 0-2.882-.159-4.242-.472a85.326 85.326 0 0 0-3.77-.785c-1.781 4.82-2.672 9.636-2.672 14.453 0 .839.024 1.625.078 2.356.054.734.132 1.468.237 2.199a55.864 55.864 0 0 0 7.618 1.414c2.672.313 4.895.472 6.676.472 5.133 0 9.871-.578 14.219-1.73 4.345-1.15 8.115-3.009 11.31-5.575 3.195-2.566 5.707-5.867 7.542-9.898 1.83-4.032 2.75-8.927 2.75-14.688v-82.948h-41.633c-.624 3.038-.94 6.233-.94 9.582z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M376.937 133.11c-1.992 0-3.926.054-5.813.157a57.374 57.374 0 0 0-5.813.629v41.114c.063-.001.125-.01.188-.01 8.008 0 14.5 6.492 14.5 14.5s-6.492 14.5-14.5 14.5c-.064 0-.125-.009-.188-.01v43.171c1.989.316 3.926.524 5.813.629 1.886.103 3.77.156 5.656.156 1.884 0 3.77-.054 5.656-.156a57.529 57.529 0 0 0 5.813-.629V133.896a57.818 57.818 0 0 0-5.813-.629 100.915 100.915 0 0 0-5.499-.157z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M416.368 188.565l30.95-54.513a723.5 723.5 0 0 1-6.914-.629c-2.199-.208-4.191-.313-5.969-.313-1.676 0-3.535.054-5.578.157-2.043.105-4.269.367-6.676.785l-30.634 56.084 32.99 56.869c2.515.418 4.793.68 6.835.785 2.043.103 3.899.156 5.575.156 1.781 0 3.797-.105 6.05-.313 2.251-.21 4.579-.421 6.989-.629l-33.618-58.439z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M274 189.5c0 7.969 6.43 14.431 14.384 14.494v-28.988C280.43 175.069 274 181.531 274 189.5z"
                                fill="#A9A9A9" data-color="1"></path>
                            <path
                                d="M351 189.5c0 7.945 6.391 14.388 14.312 14.49v-28.98c-7.921.102-14.312 6.545-14.312 14.49z"
                                fill="#A9A9A9" data-color="1"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
