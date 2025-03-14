<section>

    <div class="container">
        <div class="-mx-[15px]">
            <div class="px-[15px]">
                <div class="p-[48px] border border-[#d1d9e6] box-shadowv3 rounded-[8.8px]">
                    <div class="card-header py-5 px-6">
                        <div class="w-full -mx-[15px]">
                            <div class="px-[15px]">
                                <div class="p-6 border border-[#d1d9e6] box-shadowv2 rounded-[8.8px] mb-[48px]">
                                    <iframe class="filter grayscale map rounded-[8.8px] h-[500px] w-full" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=san%20francisco&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=&amp;output=embed">
                                    </iframe>
                                </div>
                            </div>
                            <div class="px-[15px] mb-[48px] max-w-[66%] mx-auto text-center">
                                <h1 class="mb-3 text-[56px] font-normal">Get in touch today </h1>
                                <p class="lead">Have a new project in mind? Need help with an ongoing one? Drop us
                                    a line about your project needs, we answer same day.</p>
                            </div>
                        </div>
                        <div class="row flex justify-center -mx-[15px] mb-[48px]">
                            <div class="w-full col-md-4 col-lg-4 text-center px-[15px] max-w-[33.3%]">
                                <div class="icon-box mb-4 flex flex-col">
                                    <div
                                        class="icon w-[88px] h-[88px] text-4xl flex justify-center items-center border border-[#d1d9e6] rounded-[50%] mb-4 mx-auto box-shadowv3">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <h2 class="h5 icon-box-title font-medium mb-2">Visit us</h2>
                                    <span class="font-light text-[16px] leading-6">27 Silicon Valley<br>USA,
                                        California</span>
                                </div>
                            </div>
                            <div class="w-full col-md-4 col-lg-4 text-center px-[15px] max-w-[33.3%]">
                                <div class="icon-box mb-4 flex flex-col">
                                    <div
                                        class="icon w-[88px] h-[88px] text-4xl flex justify-center items-center border border-[#d1d9e6] rounded-[50%] mb-4 mx-auto box-shadowv3">
                                        <span class="fas fa-headphones-alt"></span>
                                    </div>
                                    <h2 class="h5 icon-box-title font-medium mb-2">Call</h2>
                                    <span class="font-light text-[16px] leading-6">+3912345678</span>
                                    <div class="text-small text-gray font-light text-[16px] leading-6">Mon - Fri, 8am -
                                        4pm
                                    </div>
                                </div>
                            </div>
                            <div class="w-full col-md-4 col-lg-4 text-center px-[15px] max-w-[33.3%]">
                                <div class="icon-box mb-4 flex flex-col">
                                    <div
                                        class="icon w-[88px] h-[88px] text-4xl flex justify-center items-center border border-[#d1d9e6] rounded-[50%] mb-4 mx-auto box-shadowv3">
                                        <span class="far fa-paper-plane"></span>
                                    </div>
                                    <h2 class="h5 icon-box-title font-medium mb-2">Email</h2>
                                    <a href="#">example@company.com</a><br><a href="#">name@company.com</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <form wire:submit.prevent="handleSubmit" class="col-12 col-md-8 mx-auto max-w-[66.6%]">
                        <div class="form-group">
                            <label for="nameInputIcon2" class="block mb-2">Your Name</label>
                            @if ($errors->has('name'))
                                <div class=" text-right text-red-600 alert text-sm font-light">
                                    <span class="fa-solid fa-circle-xmark"></span>
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <div class="input-group mb-4 flex justify-center items-center">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text border border-[#d1d9e6] py-[9.6px] px-3 bg-[#e6e7ee] rounded-[8.8px] rounded-r-[0px]">
                                        <span class="far fa-user-circle "></span>
                                    </span>
                                </div>
                                <input type="text"
                                    class="flex-1 form-control border border-[#d1d9e6] bg-[#e6e7ee] py-[9.6px] box-shadowv2 px-3 rounded-[8.8px] rounded-l-[0px]"
                                    id="nameInputIcon2" placeholder="e.g. Bonnie Green" wire:model="name"
                                    aria-label="contact name input">

                            </div>

                        </div>

                        <div class="form-group">
                            <label for="emailInput" class="block mb-2">Your Email</label>
                            @if ($errors->has('email'))
                                <div class=" text-right text-red-600 alert text-sm font-light">
                                    <span class="fa-solid fa-circle-xmark"></span>
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <div class="input-group mb-4 flex justify-center items-center">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text border border-[#d1d9e6] py-[9.6px] px-3 bg-[#e6e7ee] rounded-[8.8px] rounded-r-[0px]">
                                        <span class="far fa-envelope "></span>
                                    </span>
                                </div>
                                <input type="text"
                                    class="flex-1 form-control border border-[#d1d9e6] bg-[#e6e7ee] py-[9.6px] box-shadowv2 px-3 rounded-[8.8px] rounded-l-[0px]"
                                    id="emailInput" placeholder="e.g. Bonnie Green" wire:model="email"
                                    aria-label="contact email input">
                            </div>
                        </div>

                        <div class="form-group flex flex-col">
                            <label for="contentInput" class="block mb-2">Your Message</label>
                            @if ($errors->has('content'))
                                <div class=" text-right text-red-600 alert text-sm font-light">
                                    <span class="fa-solid fa-circle-xmark"></span>
                                    {{ $errors->first('content') }}
                                </div>
                            @endif
                            <textarea class="form-control border border-[#d1d9e6] bg-[#e6e7ee] py-[9.6px] box-shadowv2 px-3 rounded-[8.8px]"
                                wire:model="content" placeholder="Enter your message..." id="contentInput" rows="4"></textarea>
                        </div>

                        <div class="card-footer py-5 text-center">
                            <button type="submit"
                                class="  border border-[#d1d9e6] rounded-[8.8px] box-shadow hover:cursor-pointer hover:shadow-customInset py-[8.8px] px-[15.2px] text-sm leading-6 font-normal">
                                <span wire:loading.remove>Send message</span>
                                <span wire:loading>

                                    <svg class="animate-spin h-5 w-5 mr-2 inline-block" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            fill="currentColor" />
                                        <path class="opacity-75" fill="currentColor"
                                            d="M14.7 2.3a10.052 10.052 0 0 0-5.4 0A10.063 10.063 0 0 0 3 12c0 2.8 1.1 5.3 2.9 7.1a10.062 10.062 0 0 0 5.4 2.2c5.5 0 10-4.5 10-10S20.2 2.3 14.7 2.3zm0 1.4c4.8 0 8.6 3.9 8.6 8.6s-3.9 8.6-8.6 8.6a8.55 8.55 0 0 1-4.7-1.4A8.6 8.6 0 0 1 5 12a8.6 8.6 0 0 1 4.5-7.6A8.55 8.55 0 0 1 14.7 3.7z" />
                                    </svg>
                                    Processing...

                                </span>
                            </button>
                        </div>
                        @if (session()->has('message'))
                            <div class=" text-center alert alert-success text-sm font-light">
                                <span class="fa-solid fa-circle-check mr-2"></span>
                                {{ session('message') }}
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
