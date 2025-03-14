<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    @livewireStyles

</head>



<body>

    @include('header')

    {{-- <section class="slide">
        <div class="container">
            <div>

            </div>
        </div>
    </section> --}}



    {{-- <div class="container">
        <div class="grid grid-cols-3 grid-rows-4 gap-4">
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">01
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">02
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">03
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white col-span-2 row-span-2">
                04</div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">05
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">06
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">07
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white col-span-2 row-span-2">
                08</div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ">
                09
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">10
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">11
            </div>
            <div class=" p-5 bg-red-500 rounded-[8.8px]  text-white ...">12
            </div>



        </div>
    </div> --}}
    <section class="blog card">
        {{-- <div class="line-clamp-3 ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.
        </div> --}}
        <div class="container">
            <div class="title mb-[128px]">
                <h2 class="text-center">
                    Blog Cards
                </h2>
            </div>
            <div class="list-cards">
                <div class="grid grid-cols-3 gap-y-[30px] gap-x-[30px]">
                    <div class="blog-card mb-[60px]">
                        <div
                            class="card relative border border-[#d1d9e6] box-shadowv3 hover:box-shadowv2 rounded-[8.8px]">
                            <div class="card-header">
                                <div class="profile-image box-shadowv2 bg-[#e6e7ee] rounded-[8.8px]  ">
                                    <img class="rounded-[8.8px]"
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/blog/blog-article-1.jpg"
                                        alt="avt">
                                </div>

                            </div>
                            <div class="card-body flex-col justify-center items-center ">
                                <span class="h6 icon-tertiary small"><span
                                        class="fas fa-medal mr-2"></span>Awards</span>
                                <h3 class="text-[1.25rem] font-medium card-title mt-3">We partnered up with Google
                                </h3>
                                <p class="card-text mb-4">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>

                                <a href="#"
                                    class="btn btn-primary hover:shadow-customInset hover:cursor-pointer border border-[#d1d9e6] p-2 inline-block rounded-[8.8px] box-shadow">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card mb-[60px]">
                        <div class="card relative  box-shadowv3 hover:box-shadowv2 rounded-[8.8px]">
                            <div class="card-header p-4">
                                <div class="profile-image box-shadowv2 bg-[#e6e7ee]  rounded-[8.8px]">
                                    <img class="rounded-[8.8px]"
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/blog/blog-article-2.jpg"
                                        alt="avt">
                                </div>

                            </div>
                            <div class="card-body flex-col justify-center items-center !pt-2">
                                <div class="flex justify-between items-center">
                                    <div class="flex">
                                        <a><img class="w-[1.5rem] h-[1.5rem] rounded-[50%] mr-2"
                                                src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-2.jpg"
                                                alt=""> </a>
                                        Jo J. Moore
                                    </div>
                                    <span class="small text-[80%]"><span class="far fa-calendar-alt mr-2"></span>15
                                        March
                                        2020</span>
                                </div>
                                <h3 class="text-[1.25rem] font-medium card-title mt-3">We partnered up with Google
                                </h3>
                                <p class="card-text mb-4">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#"
                                    class="btn btn-primary border border-[#d1d9e6] p-2 inline-block rounded-[8.8px] box-shadow hover:shadow-customInset hover:cursor-pointer">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-card mb-[60px]">
                        <div
                            class="card relative border border-[#d1d9e6] box-shadowv3 hover:shadow-customInset hover:cursor-pointer rounded-[8.8px]">
                            <div class="card-header px-6 py-5 text-center">
                                {{-- <div
                                    class="profile-image box-shadowv2 bg-[#e6e7ee] border border-[#d1d9e6] -mt-[80px]  rounded-circle p-4 w-[160px] h-[160px]">
                                    <img class="rounded-circle "
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-1.jpg"
                                        alt="avt">
                                </div> --}}
                                <span class="small text-[80%]"><span class="far fa-calendar-alt mr-2"></span>15
                                    March
                                    2020</span>
                            </div>
                            <div class="card-body flex-col justify-center items-center text-center ">
                                <h3 class="text-[1.25rem] font-medium card-title mt-3">We partnered up with Google
                                </h3>
                                <p class="card-text mb-4">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#"
                                    class="btn btn-primary border border-[#d1d9e6] p-2 inline-block rounded-[8.8px] box-shadow hover:shadow-customInset hover:cursor-pointer">Learn
                                    More</a>
                            </div>
                            <div class="card-footer flex justify-center items-center p-5">
                                <a><img class="w-[1.5rem] h-[1.5rem] rounded-[50%] mr-2"
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-2.jpg"
                                        alt=""> </a>
                                Jo J. Moore
                            </div>

                        </div>
                    </div>
                    <div class="profile-card mb-[60px]">
                        <div class="card relative border border-[#d1d9e6] box-shadowv3 rounded-[8.8px]">
                            <div class="card-header p-4">
                                <div class="profile-image box-shadowv2 bg-[#e6e7ee]  mx-[auto] rounded-[8.8px]   ">
                                    <img class="rounded-[8.8px]"
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-4.jpg"
                                        alt="avt">
                                </div>

                            </div>
                            <div class="card-body px-6 pt-6 pb-[48px] flex-col justify-center items-center ">
                                <h3 class="mb-2 text-xl font-normal">Christopher Wood</h3>
                                <span class="mb-4 font-normal text-[16px]">Co-Founder Themesberg</span>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <ul class="flex flex-wrap justify-start mt-4 mb-6  ">
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-facebook"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-twitter"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-slack-hash"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-dribbble"></span></a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
        </div>

    </section>


    <section class="profile card">
        {{-- <div class="line-clamp-3 ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.
        </div> --}}
        <div class="container">
            <div class="title mb-[128px]">
                <h2 class="text-center">
                    Profile Cards
                </h2>
            </div>
            <div class="list-cards">
                <div class="grid grid-cols-3 gap-y-[30px] gap-x-[30px]">
                    <div class="profile-card mb-[60px]">
                        <div
                            class="card relative border border-[#d1d9e6] box-shadowv3 hover:box-shadowv2 rounded-[8.8px]">
                            <div class="card-header px-6 py-5">
                                <div
                                    class="profile-image box-shadowv2 bg-[#e6e7ee] border border-[#d1d9e6] -mt-[80px] mx-[auto] rounded-[8.8px] p-4 w-[160px] h-[160px]">
                                    <img class="rounded-[8.8px]"
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-4.jpg"
                                        alt="avt">
                                </div>

                            </div>
                            <div class="card-body !pb-[72px] flex-col justify-center items-center text-center">
                                <h3 class="mb-2 text-xl font-normal">Jose Leos</h3>
                                <span class="h6 font-weight-normal text-gray mb-3">Co-Founder</span>
                                {{-- <span class="mb-4 font-normal text-[16px]">Co-Founder</span> --}}
                                <ul class="flex flex-wrap justify-center mt-4 mb-6  ">
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-facebook"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-twitter"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-slack-hash"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-dribbble"></span></a>
                                    </li>

                                </ul>
                                <a href="#"
                                    class=" font-normal hover:shadow-customInset hover:cursor-pointer mr-4 text-sm border border-[#d1d9e6] box-shadow rounded-[8.8px] px-2 py-[7.2px]">
                                    <span class="fas fa-user-plus mr-1"></span>
                                    Follow
                                </a>
                                <a class="font-normal hover:shadow-customInset hover:cursor-pointer text-sm border border-[#d1d9e6] box-shadow rounded-[8.8px] px-2 py-[7.2px]"
                                    href="#">Message</a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-card mb-[60px]">
                        <div
                            class="card relative border border-[#d1d9e6] box-shadowv3 hover:box-shadowv2 rounded-[8.8px]">
                            <div class="card-header px-6 py-5">
                                <div
                                    class="profile-image box-shadowv2 bg-[#e6e7ee] border border-[#d1d9e6] -mt-[80px]  rounded-[8.8px] p-4 w-[160px] h-[160px]">
                                    <img class="rounded-[8.8px]"
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-3.jpg"
                                        alt="avt">
                                </div>

                            </div>
                            <div class="card-body flex-col justify-center items-center ">
                                <h3 class="mb-2 text-xl font-normal">Bonnie Green</h3>
                                <span class="mb-4 font-normal text-[16px]">Web Designer</span>
                                <ul class="flex flex-wrap mt-4 mb-6  ">
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-facebook"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-twitter"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-slack-hash"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-dribbble"></span></a>
                                    </li>

                                </ul>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="profile-card mb-[60px]">
                        <div
                            class="card relative border border-[#d1d9e6] box-shadowv3 hover:box-shadowv2 rounded-[8.8px]">
                            <div class="card-header px-6 py-5">
                                <div
                                    class="profile-image box-shadowv2 bg-[#e6e7ee] border border-[#d1d9e6] -mt-[80px]  rounded-circle p-4 w-[160px] h-[160px]">
                                    <img class="rounded-circle "
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-1.jpg"
                                        alt="avt">
                                </div>

                            </div>
                            <div class="card-body flex-col justify-center items-center  ">
                                <h3 class="mb-2 text-xl font-normal">Christopher Wood</h3>
                                <span class="mb-4 font-normal text-[16px]">Marketing</span>
                                <ul class="flex flex-wrap justify-start mt-4 mb-6  ">
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-facebook"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-twitter"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-slack-hash"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-dribbble"></span></a>
                                    </li>

                                </ul>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="profile-card mb-[60px]">
                        <div class="card relative border border-[#d1d9e6] box-shadowv3 rounded-[8.8px]">
                            <div class="card-header p-4">
                                <div class="profile-image box-shadowv2 bg-[#e6e7ee]  mx-[auto] rounded-[8.8px]   ">
                                    <img class="rounded-[8.8px]"
                                        src="https://demo.themesberg.com/neumorphism-ui/assets/img/team/profile-picture-4.jpg"
                                        alt="avt">
                                </div>

                            </div>
                            <div class="card-body px-6 pt-6 pb-[48px] flex-col justify-center items-center ">
                                <h3 class="mb-2 text-xl font-normal">Christopher Wood</h3>
                                <span class="mb-4 font-normal text-[16px]">Co-Founder Themesberg</span>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <ul class="flex flex-wrap justify-start mt-4 mb-6  ">
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-facebook"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-twitter"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-slack-hash"></span></a>
                                    </li>
                                    <li><a class="mr-4" href="#"><span
                                                class=" text-xl fab fa-dribbble"></span></a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
        </div>

    </section>

    <section class="features">
        <div class="container">
            <div class="titile flex justify-center  -mx-[15px] text-[#31344b]  ">
                <div class=" text-center w-full h-[140px] px-[15px]">
                    <h1 class="mb-2 h-[52px] text-[40px]">
                        Notable <span class="font-semibold">features</span>
                    </h1>
                    <p class="mb-4 h-[64px] text-xl font-light">
                        You get all Bootstrap components fully customized. Besides, you receive numerous plugins out of
                        the box and ready to use
                    </p>
                </div>
            </div>
            <div class="item mt-[80px]  ">
                <div class="grid grid-cols-2 gap-x-[30px] gap-y-[48px]">
                    <div class="col-item">
                        <div class="text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fab fa-bootstrap ">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Latest Bootstrap
                            </h2>
                            <p class="mb-4">
                                A responsive and mobile-first theme built with the world's most popular CSS framework
                            </p>
                        </div>

                    </div>
                    <div class="col-item">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fab fa-sass">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Build with Sass
                            </h2>
                            <p class="mb-4">
                                Change one variable and the theme adapts. Colors, fonts, sizes, buttons... you name it
                            </p>
                        </div>

                    </div>
                    <div class="col-item ">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fab fa-mobile-alt">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Responsive Design
                            </h2>
                            <p class="mb-4">
                                Did you know 53% of the world web traffic is mobile? Neumorphism UI is fully responsive
                                and mobile first </p>
                        </div>

                    </div>
                    <div class="col-item ">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fas fa-puzzle-piece">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Modular approach
                            </h2>
                            <p class="mb-4">
                                Nicely customized components that can be reused anytime and anywhere in your project
                            </p>
                        </div>

                    </div>
                    <div class="col-item ">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fab fa-gulp">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Gulp & BrowserSync
                            </h2>
                            <p class="mb-4">
                                With our custom Gulp commands & BrowserSync we offer a seemless and fast workflow for
                                your project </p>
                        </div>

                    </div>
                    <div class="col-item ">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fas fa-file-alt">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Well documented
                            </h2>
                            <p class="mb-4">
                                Our kit is delivered with very detailed documentation, describing all components, styles
                                and usages </p>
                        </div>

                    </div>
                    <div class="col-item ">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fas fa-tachometer-alt">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Google PageSpeed
                            </h2>
                            <p class="mb-4">
                                Neumorphism UI has 80+ scores on Google PageSpeed Insights to offer you and your clients
                                a fast website </p>
                        </div>

                    </div>
                    <div class="col-item ">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fas fa-image">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                SVG illustrations </h2>
                            <p class="mb-4">
                                Photography and Illustration SVGs are included in the download package and are free to
                                use </p>
                        </div>

                    </div>
                    <div class="col-item ">
                        <div class="   text-center icon ">
                            <div
                                class="w-[72px] h-[72px] flex justify-center items-center rounded-[50%] box-shadow text-[28px] font-light border border-[#d1d9e6] mx-auto ">
                                <span class="fa-brands fa-twitter">

                                </span>
                            </div>

                            <h2 class="my-4 font-normal text-xl ">
                                Neumorphic design
                            </h2>
                            <p class="mb-4">
                                We crafted each component with great care so it represents the latest neumorphic design
                                trend </p>
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <section class="What indside text-[#31344b]">
        <div class="container">
            <div class="  flex-wrap title -mx-[15px] mb-[80px]">
                <div class="text flex flex-wrap justify-center px-[15px]">
                    <h2 class=" w-full text-center h-[52px] text-[40px] mb-2 font-normal px-[48px]">
                        What's inside?
                    </h2>
                    <p class=" flex flex-wrap h-[96px] px-[160px] mb-2 font-light leading-8 text-center text-xl">
                        We have carefully crafted the perfect folder structure to ensure that finding the files you're
                        looking for are easily reachable and well organized.
                    </p>
                </div>
            </div>
            <div class="Explorer w-full flex flex-wrap flex-col-2 justify-center items-center -mx[15px] leading-8 ">
                <div class=" flex flex-wrap justify-center folder px-[15px] w-[50%]">
                    <ul class=" w-full h-[431px] text-[19px] font-light text-[#525480] leading-8">
                        <li><span class="fas fa-folder mr-2"></span>src</li>
                        <ul class="ml-6">
                            <li><span class="fas fa-folder mr-2"></span>assets</li>
                            <li><span class="fas fa-folder mr-2"></span>html</li>
                            <li><span class="fas fa-folder mr-2"></span>partials</li>
                            <li><span class="fas fa-folder mr-2"></span>scss</li>
                            <li><span class="fab fa-html5 mr-2 text-[#2D4CC8]"></span>index.html</li>
                        </ul>
                        <li><span class="fas fa-folder mr-2"></span>html&css</li>
                        <li><span class="fas fa-folder mr-2"></span>.temp</li>
                        <li><span class="fas fa-folder mr-2"></span>dist</li>
                        <li><span class="fas fa-folder mr-2"></span>node_modules</li>
                        <li><span class="fab fa-js-square mr-2 text-[#F0B400]"></span>gulpfile.js</li>
                        <li><span class="fas fa-file-code mr-2"></span>package.json</li>
                        <li><span class="fas fa-file-code mr-2"></span>README.md</li>
                        <li><span class="fas fa-file-code mr-2"></span>.gitignore</li>
                    </ul>
                </div>
                <div class="descriptin w-[50%] mb-6 px-[15px]">
                    <div class=" mt-[48px] ">
                        <h3 class="mb-2 text-2xl leading-8 text-left font-normal">
                            You need only HTML, CSS and Javascript?
                        </h3>
                        <p class="mb-6 text-xl font-light leading-8">
                            Don't worry, we got you covered. We have a folder called
                            <strong class="text-[#a91e2c] font-mono text-[17.5px] font-light">html&css</strong>
                            which includes only the basic HTML5, CSS3 and Javascript technologies.
                        </p>
                    </div>

                    <a
                        class=" text-[18px] font-normal leading-8 hover:cursor-pointer hover:shadow-customInset border border-[#d1d9e6] rounded-[8.8px] box-shadow py-[8.8px] px-[15.2px] ">
                        <span class="fas fa-book mr-2">

                        </span>
                        Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="color">
        <div class="container">
            <div class=" flex flex-wrap justify-center -mx-[15px] text-[#31344b] ">
                <div class="dis w-full h-[156px] px-[15px] ">
                    <h2 class=" mb-6 text-[40px] w-full h-[52px] font-light leading-[51.7px] text-center">WCAG 2.1
                        accessible
                        <strong class="font-semibold">color scheme</strong>
                    </h2>
                    <p class="mb-4 text-[20px] w-full h-[64px] text-center">
                        We've enhanced the color settings <br>
                        to comply with the latest accessibility standards
                    </p>

                </div>
                <div class=" w-full h-[633px] mt-[80px] text-xl leading-[26px] font-normal ">
                    <div class="grid grid-rows-2 grid-flow-col ">
                        <div class="px-[15px] w-full h-[316px] ">
                            <div
                                class="mb-6 bg-[#d1d9e6] rounded-[8.8px] p-[48px] w-full h-[292px] box-shadowv3 font-light text-center border border-[#d1d9e6] ">
                                <div class="  card shadow-soft flex flex-wrap justify-center">
                                    <div class="color-shape w-full h-[112px] rounded-[8.8px] border border-[#d1d9e6] bg-[#e6e7ee]"
                                        data-metatip="true"></div>
                                    <div class="mt-4">
                                        <h2 class="h5 text-dark">Primary:</h2><span
                                            class="font-weight-bold text-dark">#174F84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] w-full h-[316px]">
                            <div
                                class="mb-6 rounded-[8.8px] p-[48px] w-full h-[292px] box-shadowv3 font-light text-center border border-[#d1d9e6]  ">
                                <div class="  card shadow-soft flex flex-wrap justify-center">
                                    <div class="color-shape w-full h-[112px] rounded-[8.8px] border border-[#d1d9e6] bg-[#2d4cc8] "
                                        data-metatip="true"></div>
                                    <div class="mt-4">
                                        <h2 class="h5 text-dark">Secondary:</h2><span
                                            class="font-weight-bold text-dark">#174F84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] w-full h-[316px]">
                            <div
                                class="mb-6 rounded-[8.8px] p-[48px] w-full h-[292px] box-shadowv3 font-light text-center border border-[#d1d9e6] ">
                                <div class="  card shadow-soft flex flex-wrap justify-center">
                                    <div class="color-shape w-full h-[112px] rounded-[8.8px] border border-[#d1d9e6] bg-[#0056B3]"
                                        data-metatip="true"></div>
                                    <div class="mt-4">
                                        <h2 class="h5 text-dark">Info:</h2><span
                                            class="font-weight-bold text-dark">#174F84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] w-full h-[316px]">
                            <div
                                class="mb-6 rounded-[8.8px] p-[48px] w-full h-[292px] box-shadowv3 font-light text-center border border-[#d1d9e6] ">
                                <div class="  card shadow-soft flex flex-wrap justify-center">
                                    <div class="color-shape w-full h-[112px] rounded-[8.8px] border border-[#d1d9e6] bg-[#F0B400]"
                                        data-metatip="true"></div>
                                    <div class="mt-4">
                                        <h2 class="h5 text-dark">Warning:</h2><span
                                            class="font-weight-bold text-dark">#174F84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] w-full h-[316px]">
                            <div
                                class="mb-6 rounded-[8.8px] p-[48px] w-full h-[292px] box-shadowv3 font-light text-center border border-[#d1d9e6] ">
                                <div class="  card shadow-soft flex flex-wrap justify-center">
                                    <div class="color-shape w-full h-[112px] rounded-[8.8px] border border-[#d1d9e6] bg-[#18634B]"
                                        data-metatip="true"></div>
                                    <div class="mt-4">
                                        <h2 class="h5 text-dark">Success:</h2><span
                                            class="font-weight-bold text-dark">#174F84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] w-full h-[316px]">
                            <div
                                class="mb-6 rounded-[8.8px] p-[48px] w-full h-[292px] box-shadowv3 font-light text-center border border-[#d1d9e6] ">
                                <div class="  card shadow-soft flex flex-wrap justify-center">
                                    <div class="color-shape w-full h-[112px] rounded-[8.8px] border border-[#d1d9e6] bg-[#A91E2C] "
                                        data-metatip="true"></div>
                                    <div class="mt-4">
                                        <h2 class="h5 text-dark">Danger:</h2><span
                                            class="font-weight-bold text-dark">#174F84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] w-full h-[316px]">
                            <div
                                class="mb-6 rounded-[8.8px] p-[48px] w-full h-[292px] box-shadowv3 font-light text-center border border-[#d1d9e6] ">
                                <div class="  card shadow-soft flex flex-wrap justify-center">
                                    <div class="color-shape w-full h-[112px] rounded-[8.8px] border border-[#d1d9e6] bg-[#31344B]"
                                        data-metatip="true"></div>
                                    <div class="mt-4">
                                        <h2 class="h5 text-dark">Dark:</h2><span
                                            class="font-weight-bold text-dark">#2A354F</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dowload">
        <div class="container">

            <div class="-mx-[15px] mb-[48px]">

                <div class="text-[#31344b] px-[15px] flex flex-wrap justify-center">


                    <h2 class=" w-full h-[52px] text-center mb-4 text-[40px] font-light leading-[52px]">Less
                        <strong class="font-semibold">work</strong>,
                        more <strong class="font-semibold">
                            flow</strong>.
                    </h2>


                    <p class="w-full h-[66px] text-center text-xl font-light leading-8 mb-4">
                        Boost productivity with BrowserSync. SCSS changes are reflected instantly and pages scroll
                        and
                        refresh on devices as you work.
                    </p>

                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <div
                    class=" p-6 w-full h-[274px] border border-[#d1d9e6] bg-[#e6e7ee] rounded-[8.8px] box-shadowv3 font-light leading-6 text-left">
                    <div class="mb-3">
                        <div class="font-normal">&gt; $ npm install</div>
                        <div class="text-muted">Everything’s installed!</div>
                    </div>
                    <div class="mb-3">
                        <div class="font-normal">&gt; $ gulp</div>
                        <div class="text-muted">SCSS watching</div>
                        <div class="text-muted">LiveReload started</div>
                        <div class="text-muted">Opening localhost:3000</div>
                    </div>
                    <div>
                        <div class="font-normal">&gt; $ that's it?</div>
                        <div class="text-muted">It's that simple!</div>
                    </div>
                </div>
                <div
                    class="flex w-full h-[55px] m-6 flex border box-shadowv3 rounded-[8.8px] border-[#d1d9e6] my-[6] py-4 px-6">
                    <p>
                        <span class="fas fa-question-circle mr-2">
                        </span> Looks unfamiliar? Don’t worry! Our <a class="font-medium underline">documentation</a>
                        has got you
                        covered.
                    </p>


                </div>
            </div>

        </div>
    </section>

    <section class="github">
        <div class="container">
            <div class="text-[#31344b] -mx-[15px]">
                <div class="flex flex-wrap  ">
                    <div class="flex ">
                        <div class="w-full px-[15px]">
                            <h2 class="font-light text-[40px] mb-2 "> <Strong class="font-semibold">Open source
                                </Strong> project
                            </h2>
                            <p class="font-light text-xl mb-6">
                                Neumorphism UI is an open source UI Kit that is licensed under the MIT License. Consider
                                giving
                                us a
                                star on the official Github repository to spread the news!


                            </p>
                            <div class="flex items-center ">
                                <div class=" githubLink ">
                                    <a href="#"
                                        class=" hover:cursor-pointer hover:shadow-customInset px-[15.2px] py-[8.8px] bg-[#e6e7ee] border border-[#d1d9e6] mr-6 box-shadow  rounded-[8.8px]">
                                        <span class="fab fa-github"></span>
                                        View on Github
                                    </a>
                                </div>
                                <div class="star flex  ">
                                    <div
                                        class=" hover:bg-[#e5eaee] leading-4 rounded-[4px] rounded-r-[0] flex items-center border border-[#d1d9e6] py-[5px] px-[10px] bg-[#ebf0f4]">
                                        <svg viewBox="0 0 16 16" width="16" height="16"
                                            class="octicon octicon-star" aria-hidden="true">
                                            <path
                                                d="M8 .25a.75.75 0 0 1 .673.418l1.882 3.815 4.21.612a.75.75 0 0 1 .416 1.279l-3.046 2.97.719 4.192a.751.751 0 0 1-1.088.791L8 12.347l-3.766 1.98a.75.75 0 0 1-1.088-.79l.72-4.194L.818 6.374a.75.75 0 0 1 .416-1.28l4.21-.611L7.327.668A.75.75 0 0 1 8 .25Zm0 2.445L6.615 5.5a.75.75 0 0 1-.564.41l-3.097.45 2.24 2.184a.75.75 0 0 1 .216.664l-.528 3.084 2.769-1.456a.75.75 0 0 1 .698 0l2.77 1.456-.53-3.084a.75.75 0 0 1 .216-.664l2.24-2.183-3.096-.45a.75.75 0 0 1-.564-.41L8 2.694Z">
                                            </path>
                                        </svg>
                                        &nbsp;
                                        <span class="text-[12px] leading-4 font-semibold  ">
                                            Star</span>
                                    </div>
                                    <div
                                        class="hover:text-[#0969da] rounded-[4px] rounded-l-[0] flex items-center border border-[#d1d9e6] border-l-0 py-[5px] px-[10px] bg-white ]">
                                        <span class="text-[12px] leading-4 font-semibold">847</span>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="relative flex justify-start w-full px-[15px]">
                            <div class="text-[800px]  ">
                                <span class="z-0 absolute opacity-10 -right-[113px] top-[75px]  fab fa-github "></span>

                            </div>
                        </div>
                    </div>



                </div>


            </div>
            <div class=" items-center flex flex-wrap mt-20 -mx-[15px] ">
                <div class=" freedemo px-[15px]">

                    <div
                        class="rounded-[8.8px] w-full h-[554px] box-shadowv3 p-6 border border-[#d1d9e6] text-start bg-[e#6e7ee] font-light">
                        <div class="w-full flex ">

                            <span class=" w-full px-6 pt-5 font-semibold text-[32px]">Free Demo</span>
                        </div>
                        <div class="card-body p-6">
                            <ul>
                                <li class="border-b border-b-[#d1d9e6] py-4 p">200 Components</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 p">5 Example Pages</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 p"><span class="text-[#a91e2c]"><span
                                            class="fas fa-times-circle w-5 "></span></span>Uncoventional
                                    cards
                                </li>
                                <li class="border-b border-b-[#d1d9e6] py-4 p"><span class="text-[#a91e2c]"><span
                                            class="fas fa-times-circle w-5 "></span></span>Timelines</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 p"><span class="text-[#a91e2c]"><span
                                            class="fas fa-times-circle w-5 "></span></span>E-commerce</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 p"><span class="text-[#a91e2c]"><span
                                            class="fas fa-times-circle w-5 "></span></span>Widgets</li>
                                <li class="border-b border-b-[#d1d9e6] border-b-0 py-4 p"><span
                                        class="text-[#a91e2c]"><span
                                            class="fas fa-times-circle w-5 "></span></span>Prenium Support
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="proVersion px-[15px] relative z-10 ">
                    <div
                        class=" z-50 rounded-[8.8px] w-full h-[619px] box-shadowv3 p-6 border border-[#d1d9e6] bg-[#e6e7ee] text-start bg-[e#6e7ee] font-light">
                        <div class="w-full flex">

                            <span class=" w-full px-6 pt-5 font-semibold text-[32px]">Free Demo</span>
                        </div>
                        <div class="card-body p-6 w-full">
                            <ul>
                                <li class="border-b border-b-[#d1d9e6] py-4 pr-4">200 Components</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 pr-4">5 Example Pages</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 pr-4"><span class="text-[#18634b]"><span
                                            class="fas fa-check-circle w-5 "></span></span>Uncoventional
                                    cards
                                </li>
                                <li class="border-b border-b-[#d1d9e6] py-4 pr-4"><span class="text-[#18634b]"><span
                                            class="fas fa-check-circle w-5 "></span></span>Timelines</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 pr-4"><span class="text-[#18634b]"><span
                                            class="fas fa-check-circle w-5 "></span></span>E-commerce</li>
                                <li class="border-b border-b-[#d1d9e6] py-4 pr-4"><span class="text-[#18634b]"><span
                                            class="fas fa-check-circle w-5 "></span></span>Widgets</li>
                                <li class="border-b border-b-[#d1d9e6] border-b-0 py-4 pr-4"><span
                                        class="text-[#18634b]"><span
                                            class="fas fa-check-circle w-5 "></span></span>Prenium Support
                                </li>

                            </ul>

                            <a
                                class=" hover:shadow-customInset hover:cursor-pointer flex items-center justify-center box-shadow rounded-[8.8px] w-full h-[44px] mt-6 mr-4 border border-[#d1d9e6] text-[#2d4cc8] text-[16px] font-normal  "><i
                                    class="far fa-paper-plane mr-2"></i> Update to PRO</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @include('footer')
    @livewireScripts

</body>

</html>
