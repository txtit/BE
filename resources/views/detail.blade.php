<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @livewireStyles
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    @include('header')
    <section class="blog card">
        {{-- <div class="line-clamp-3 ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.
        </div> --}}
        <div class="container">
            <div class=" text-center flex justify-center items-center">
                <div class="title mb-[128px] max-w-[66%] ">

                    <h1 class="text-center text-6xl font-medium mb-6">We are Themesberg </h1>
                    <p class="text-xl">Themesberg is an independent branding & experience design company working at the
                        intersection of culture, design, and technology.</p>
                </div>
            </div>
            <div class="title mb-[128px] items-center flex justify-center ">

                <a href="#"
                    class="btn-primary btn text-center text-xl box-shadow hover: cursor-pointer hover:shadow-customInset">
                    <span class="fas fa-book-reader mr-2"></span>
                    Our works
                </a>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="row border border-[#d1d9e6] box-shadowv3 rounded-[8.8px]">
                            <div class="flex-[0_0_33.333%] max-w-[33.333%] px-6 py-12">
                                <div class="card-body flex-row justify-center items-center text-center ">
                                    <div
                                        class="icon icon-shape shadow-customInset text-4xl border-light rounded-circle mb-3">
                                        <span class="fas fa-eye"></span>
                                    </div>
                                    <h2 class="text-2xl mr-2 mb-2">Audience</h2>
                                    <p class="mb-0">At Themesberg, we use human, brand, and cultural insights to
                                        unlock strategic business opportunities for clients.</p>
                                </div>

                            </div>
                            <div class="flex-[0_0_33.333%] max-w-[33.333%] px-6 py-12">
                                <div class="card-body flex-row justify-center items-center text-center ">
                                    <div
                                        class="icon icon-shape shadow-customInset text-4xl border-light rounded-circle mb-3">
                                        <span class="fas fa-medal"></span>
                                    </div>
                                    <h2 class="text-2xl mr-2 mb-2">Branding</h2>
                                    <p class="mb-0">Despite being cautioned not to judge a book by its cover, we all
                                        do it every day. We making your site looks better.

                                    </p>
                                </div>

                            </div>
                            <div class="flex-[0_0_33.333%] max-w-[33.333%] px-6 py-12">
                                <div class="card-body flex-row justify-center items-center text-center ">
                                    <div
                                        class="icon icon-shape shadow-customInset text-4xl border-light rounded-circle mb-3">
                                        <span class="fas fa-puzzle-piece"></span>
                                    </div>
                                    <h2 class="text-2xl mr-2 mb-2">Production</h2>
                                    <p class="mb-0">Today, truly creative sells. Get innovative ideas and polished
                                        finish pieces from our creative agency.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
        </div>

    </section>
    <section class="detail ">
        <div class="container">
            <div class="row items-center justify-content-around   ">
                <div class="col-md-6  ">
                    <div class="card ">
                        <img class="organic-radius box-shadowv3 border border-[rgba(243,247,250,0.05)] p-4"
                            src="https://demo.themesberg.com/neumorphism-ui/assets/img/about-us-1.jpg" />
                    </div>
                </div>
                <div class=" col-xl-5 flex-[0_0_41.67%] max-w-[41.67%]">
                    <h2 class="text-[2.5rem] mb-6 font-medium text-[#31344b] text-start">Design with us, Develop
                        Anything.</h2>
                    <p class="text-xl font-light mb-6">Themesberg is an experienced and passionate group of designers,
                        developers,
                        project managers,
                        writers and artists. Every client we work with becomes a part of the team. Together we face the
                        challenges and celebrate the victories.</p>
                    <p class="text-xl font-light mb-6">Our small team is active in the creative community, endlessly
                        interested in what’s next, and
                        generally pleasant to be around.</p>
                    <img src="https://demo.themesberg.com/neumorphism-ui/assets/img/signature.svg" alt="signature"
                        class="mt-4" width="150">
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    @livewireScripts

</body>

</html>
