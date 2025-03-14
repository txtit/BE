<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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
    <section class="contact">
        <div class="container">
            <div class="-mx-[15px] ">
                <div class="px-[15px]  ">
                    <div class="p-[48px] border border-[#d1d9e6] box-shadowv3 rounded-[8.8px]">
                        <div class="card-header py-5 px-6">
                            <div class=" w-full -mx-[15px] ">
                                <div class="px-[15px] ">
                                    <div class="p-6 border border-[#d1d9e6] box-shadowv2 rounded-[8.8px] mb-[48px]">
                                        <iframe class=" filter grayscale map rounded-[8.8px] h-[500px] w-full"
                                            id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=san%20francisco&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=&amp;output=embed">
                                        </iframe>
                                    </div>
                                </div>
                                <div class="px-[15px] mb-[48px] max-w-[66%] mx-auto text-center">
                                    <h1 class=" mb-3 text-[56px] font-normal">Get in touch today </h1>
                                    <p class="lead">Have a new project in mind? Need help with an ongoing one? Drop us
                                        a
                                        line about your project needs, we answer same day.</p>

                                </div>
                            </div>
                            <div class="row flex justify-center -mx-[15px] mb-[48px]">
                                <div class=" w-full col-md-4 col-lg-4 text-center px-[15px] max-w-[33.3%] ">
                                    <div class="icon-box mb-4 flex flex-col  ">
                                        <div
                                            class="icon w-[88px] h-[88px]  text-4xl flex justify-center items-center  border border-[#d1d9e6] rounded-[50%] mb-4 mx-auto box-shadowv3">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <h2 class="h5 icon-box-title font-medium mb-2">Visit us</h2>
                                        <span class="font-light text-[16px] leading-6">27
                                            Silicon
                                            Valley<br>USA,
                                            California</span>
                                    </div>
                                </div>
                                <div class=" w-full col-md-4 col-lg-4 text-center px-[15px] max-w-[33.3%] ">
                                    <div class="icon-box mb-4 flex flex-col  ">
                                        <div
                                            class="icon w-[88px] h-[88px]  text-4xl flex justify-center items-center  border border-[#d1d9e6] rounded-[50%] mb-4 mx-auto box-shadowv3">
                                            <span class="fas fa-headphones-alt"></span>
                                        </div>
                                        <h2 class="h5 icon-box-title font-medium mb-2">Call</h2>
                                        <span class="font-light text-[16px] leading-6">+3912345678</span>
                                        <div class="text-small text-gray font-light text-[16px] leading-6">Mon - Fri,
                                            8am - 4pm</div>
                                    </div>
                                </div>
                                <div class=" w-full col-md-4 col-lg-4 text-center px-[15px] max-w-[33.3%] ">
                                    <div class="icon-box mb-4 flex flex-col  ">
                                        <div
                                            class="icon w-[88px] h-[88px]  text-4xl flex justify-center items-center  border border-[#d1d9e6] rounded-[50%] mb-4 mx-auto box-shadowv3">
                                            <span class="far fa-paper-plane"></span>
                                        </div>
                                        <h2 class="h5 icon-box-title font-medium mb-2">Email</h2>
                                        <a href="#">example@company.com</a><br><a
                                            href="#">name@company.com</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <form class="col-12 col-md-8 mx-auto max-w-[66.6%]">
                            <div class="form-group"><label for="nameInputIcon2" class="block mb-2">Your Name</label>
                                <div class="input-group mb-4 flex justify-center items-center">
                                    <div class="input-group-prepend">
                                        <span
                                            class="input-group-text border border-[#d1d9e6] py-[9.6px] px-3 bg-[#e6e7ee] rounded-[8.8px] rounded-r-[0px]">
                                            <span class="far fa-user-circle ">
                                            </span>
                                        </span>
                                    </div>
                                    <input
                                        class=" flex-1 form-control border border-[#d1d9e6]  bg-[#e6e7ee]  py-[9.6px] box-shadowv2 px-3 rounded-[8.8px] rounded-l-[0px] "
                                        id="nameInputIcon2" placeholder="e.g. Bonnie Green" type="text"
                                        aria-label="contact name input">
                                </div>
                            </div>
                            <form action="" wire:submit="handleSubmit"
                                class="col-12 col-md-8 mx-auto max-w-[66.6%]">
                                <div class="form-group"><label for="nameInputIcon2" class="block mb-2">Your
                                        Email</label>
                                    <div class="input-group mb-4 flex justify-center items-center">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text border border-[#d1d9e6] py-[9.6px] px-3 bg-[#e6e7ee] rounded-[8.8px] rounded-r-[0px]">
                                                <span class="far fa-envelope ">
                                                </span>
                                            </span>
                                        </div>
                                        <input
                                            class=" flex-1 form-control border border-[#d1d9e6]  bg-[#e6e7ee]  py-[9.6px] box-shadowv2 px-3 rounded-[8.8px] rounded-l-[0px] "
                                            id="nameInputIcon2" placeholder="e.g. Bonnie Green" type="text"
                                            aria-label="contact name input">
                                    </div>
                                </div>
                                <div class="form-group flex flex-col "><label for="exampleFormControlTextarea2"
                                        class="block mb-2">Your
                                        Email</label>
                                    <textarea class="form-control border border-[#d1d9e6]  bg-[#e6e7ee]  py-[9.6px] box-shadowv2 px-3 rounded-[8.8px]"
                                        placeholder="Enter your message..." id="exampleFormControlTextarea2" rows="4"></textarea>
                                </div>
                                <div class="card-footer py-5 text-center">
                                    <button wire:click="handleSumbit" type="submit"
                                        class="border border-[#d1d9e6] rounded-[8.8px] box-shadow hover:cursor-pointer hover:shadow-customInset py-[8.8px] px-[15.2px] text-sm leading-6 font-normal">Send
                                        message</button>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    @livewireScripts

</body>

</html>
