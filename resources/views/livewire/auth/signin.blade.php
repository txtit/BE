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
</head>



<body>
    <section class="signin">
        <div class="container">
            <div class="-mx-[15px] w-full">
                <div class="px-[15px] mx-auto w-[50%] text-[#44476a]  ">
                    <div
                        class=" p-6 border border-[#d1d9e6] box-shadow rounded-[8.8px] flex justify-center flex-col w-full">
                        <div>
                            <h2 class="text-center">Sign in to our platform</h2>
                        </div>
                        <div class="card-body flex flex-col justify-center items-center ">
                            <form class="items-center w-full">
                                <label class="text-sm" for="Email">Your email</label>
                                <div class=" mb-6 w-full flex">
                                    <div
                                        class="py-[9.6px] px-3 border border-[#d1d9e6] rounded-[8.8px] rounded-r-[0]  ">
                                        <span>
                                            <span class="fas fa-envelope">

                                            </span>
                                        </span>
                                    </div>
                                    <input
                                        class=" text-[#44476a] py-[9.6px] px-3 flex-1 border border-[#d1d9e6] bg-[#e6e7ee] box-shadowv2 rounded-[8.8px] rounded-l-[0]"
                                        type="text" class="w-full" placeholder="example@company.com">
                                </div>

                                <label class="text-sm" for="Email">Password</label>
                                <div class=" mb-6 w-full flex">
                                    <div
                                        class="py-[9.6px] px-3 border border-[#d1d9e6] rounded-[8.8px] rounded-r-[0]  ">
                                        <span>
                                            <span class="fas fa-unlock-alt">

                                            </span>
                                        </span>
                                    </div>
                                    <input
                                        class=" text-[#44476a]  py-[9.6px] px-3 flex-1 border border-[#d1d9e6] bg-[#e6e7ee] box-shadowv2 rounded-[8.8px] rounded-l-[0]"
                                        type="text" class="w-full" placeholder="Password">
                                </div>
                                <div class="flex justify-between text-sm">
                                    <div class="form-check">
                                        <input class="border border-[#d1d9e6] rounded-[50%]" type="checkbox">
                                        <label for="form-check">Remember me</label>
                                    </div>
                                    <div>
                                        <a>Lost password</a>
                                    </div>
                                </div>

                            </form>
                            <div>
                                <span>
                                    or login with
                                </span>
                            </div>
                            <div>
                                <button>

                                </button>
                            </div>
                            <div>
                                Not registered? Create account
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</body>

</html>
