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

                    <h1 class="text-center text-6xl font-light mb-6">Our <span class="font-semibold">Pricing</span></h1>
                    <p class="text-xl">Our pricing isn’t one-size-fits-all. We calculate your personalized quote by
                        looking
                        at your specific
                        needs, as well as the monthly activity of your website.</p>
                </div>
            </div>
            <div class="title mb-[128px]">
                <h1 class="text-center text-3xl">
                    Our Products
                </h1>
            </div>
            <div class="list-cards">
                <div class="grid grid-cols-2 gap-y-[30px] gap-x-[30px]">
                    @foreach (\App\Models\Product::all() as $product)
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
                                    <div class="flex justify-between items-center">
                                        <span class="h6 icon-tertiary small"><span
                                                class="fas fa-medal mr-2"></span>Awards</span>
                                        <span class="d-block"><span class="display-1 font-bold text-2xl"><span
                                                    class="align-top text-xs">$</span>39 </span><span
                                                class="font-small">/
                                                month</span></span>
                                    </div>
                                    <h3 class="text-[1.25rem] font-medium card-title mt-3">We partnered up with Google
                                    </h3>
                                    <p class="card-text mb-4">Some quick example text to build on the card title and
                                        make up
                                        the
                                        bulk of the card's content.</p>
                                    <div class="flex justify-between items-center">

                                        <a href="/detail"
                                            class="btn btn-primary hover:shadow-customInset hover:cursor-pointer border border-[#d1d9e6] p-2 inline-block rounded-[8.8px] box-shadow">
                                            <span class="mr-2 btn-inner-icon">
                                                <span class="fas fa-eye"></span>
                                            </span>
                                            <span class="font-semibold">See
                                                detail</span>
                                        </a>
                                        <button
                                            wire:click="$emit('addToCart', { id: {{ $product['id'] }}, name: '{{ $product['name'] }}', price: {{ $product['price'] }} })"
                                            class="btn btn-primary hover:shadow-customInset hover:cursor-pointer border border-[#d1d9e6] p-2 inline-block rounded-[8.8px] box-shadow">
                                            <span class="mr-2 btn-inner-icon">
                                                <span class="fas fa-cart-plus mr-2"></span>
                                            </span>
                                            <span class=" addToCart font-semibold">Add to cart
                                            </span>
                                        </button>
                                        <button
                                            wire:click="$emit('addhehe', { id: 1, name: 'Sản phẩm A', price: 100000 })"
                                            class="btn btn-primary">
                                            Thêm vào giỏ hàng
                                        </button>
                                        @if (session()->has('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif

                                        <button wire:click="addhehe(1)" class="btn btn-primary">Thêm vào giỏ
                                            hàng</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>


            </div>
        </div>
        </div>
        </div>

    </section>
    <script>
        function addToCart() {
            let product = {
                id: 1,
                name: 'Sản phẩm HEHE',
                price: 100000
            };
            console.log("Sản phẩm thêm vào giỏ:", product);
            Livewire.dispatch('addhehe', {
                id: product.id,
                name: product.name,
                price: product.price
            });
        }
    </script>
    @include('footer')

    @livewireScripts

</body>


</html>
