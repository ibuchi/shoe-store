@extends('layouts.landing')

@section('body')
<div class="">
    <x-landing.nav-bar />

    <!-- heros section -->
    <div class="">
        <div class="flex flex-row justify-between h-screen items-center w-5/6 mx-auto">
            <div class="flex-auto w-32 mr-10">
                <h1 class="font-bold text-6xl mb-8">A power that runs you</h1>
                <p class="leading-loose text-lg">Base wheel zoom adoption open manage future-proof for. Start what's status cost food caught.</p>
                <button class="bg-black text-white px-8 py-4 border border-solid border-black transition duration-300 hover:bg-white hover:text-black hover:border-black mt-8">SHOP NOW</button>
            </div>
            <div class="flex-auto w-96 overflow-hidden">
                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="shoe -rotate-45">
            </div>
        </div>
    </div>


    <!-- Best selling Section -->
    <div class="mt-20">
        <div class="mx-auto w-5/6">
            <div>
                <div class="mx-auto w-4/6 text-center">
                    <h1 class="text-4xl font-bold mb-6">Best selling products</h1>
                    <p class="leading-loose mb-6">Base wheel zoom adoption open manage future-proof for cost food cost.</p>
                </div>

                <div class="grid sm:grid-cols-4 sm:grid-rows-2 grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Walking-tennis shoes</p>
                            <p>$330.00 - $510.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Alpha Bounce Lux Shoes</p>
                            <p>$230.00 - $250.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Swift Run Shoe</p>
                            <p>$530.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Foam Cruz White Shoe</p>
                            <p>$240.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Deerupt Shoes</p>
                            <p>$510.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>White Sports Shoes</p>
                            <p>$420.00 - $450.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Red & White Top Sneaker</p>
                            <p>$450.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Light Blue Running Shoe</p>
                            <p>$310.00 - $350.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Collection of running shoes -->
    <div class="grid sm:grid-cols-3 grid-cols-1 gap-4 bg-[#e1e5eb] mt-20 py-32 px-20">
        <div class=" h-[50em]">
            <h1 class="text-4xl mb-14">New collections of running shoes</h1>
            <div class="">
                <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-full">
            </div>
        </div>
        <div class=" h-[50em]">
            <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-full">
        </div>
        <div class=" h-[50em]">
            <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-[80%]">
            <div>
                <p class="my-8">Base wheel zoom adoption open manage future-proof for cost food caught</p>
                <button class="bg-black text-2xl text-white px-8 py-2 border border-solid border-black transition duration-300 hover:bg-transparent hover:text-black hover:border-black">SHOP NOW</button>
            </div>
        </div>
    </div>

    <!-- another section -->

    <div class="flex justify-between items-center text-center leading-loose mx-auto py-20 border-b border-gray-400 w-5/6">
        <div>
            <i class='bx bx-cart text-6xl'></i>
            <h1 class="text-2xl font-bold py-4">Free Shipping</h1>
            <p>On the other hand, we denounce with righteous indignation and dislike men.</p>
        </div>
        <div>
            <i class='bx bx-gift text-6xl'></i>
            <h1 class="text-2xl font-bold py-4">Gift Card</h1>
            <p>On the other hand, we denounce with righteous indignation and dislike men.</p>
        </div>
        <div>
            <i class='bx bx-award text-6xl'></i>
            <h1 class="text-2xl font-bold py-4">100% Original Products</h1>
            <p>On the other hand, we denounce with righteous indignation and dislike men.</p>
        </div>
    </div>

    <!-- Another section -->

    <div class="grid sm:grid-cols-4 gap-20 py-32">
        <div class="col-span-2">
            <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-[80%] w-full">
        </div>
        <div class="col-span-2">
            <div>
                <h1 class="mx-auto text-center text-4xl font-bold py-6 w-3/6">Best deals on running shoes</h1>
                <div class="grid sm:grid-cols-2 gap-8">
                    <div>
                        <div>
                            <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-full w-full">
                            <p>Light Blue Running Shoe</p>
                            <p>$310.00 - $350.00</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-full w-full">
                            <p>Light Blue Running Shoe</p>
                            <p>$310.00 - $350.00</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-full w-full">
                            <p>Light Blue Running Shoe</p>
                            <p>$310.00 - $350.00</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="{{ cloudinary_url('run_shoe2', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded object-cover h-full w-full">
                            <p>Light Blue Running Shoe</p>
                            <p>$310.00 - $350.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- shoe background section -->
    <div class="relative bg-[url('https://res.cloudinary.com/digmtdarl/image/upload/v1685822554/shoe_background.jpg')] bg-cover bg-no-repeat h-[60em]">
        <div class="absolute right-[25%] top-[25%] w-[25%] px-20 py-32 rounded-bl-0 rounded-br-full rounded-tr-full rounded-tl-full bg-slate-100/75">
            <h1 class="text-4xl font-bold mb-8">Ultralight comfort canvas solo</h1>
            <p class="font-bold mb-4">OFFER PRICE</p>
            <span class="font-bold text-gray-900 text-xl line-through pr-2">$5999.00</span>
            <span class="font-bold text-red-700 text-2xl">$3125.00</span>
            <button class="bg-black text-lg mt-8 text-white px-8 py-2 border border-solid border-black transition duration-300 hover:bg-transparent hover:text-black hover:border-black">SHOP NOW</button>
        </div>
    </div>

    <!-- Second Best selling section -->
    <div class="py-32">
        <div class="mx-auto w-5/6">
            <div>
                <div class="">
                    <h1 class="text-4xl font-bold mb-6">Best selling products</h1>
                    <p class="leading-loose mb-6">Base wheel zoom adoption open manage future-proof for cost food cost.</p>
                </div>

                <div class="grid sm:grid-cols-4 sm:grid-rows-2 grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Walking-tennis shoes</p>
                            <p>$330.00 - $510.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Alpha Bounce Lux Shoes</p>
                            <p>$230.00 - $250.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Swift Run Shoe</p>
                            <p>$530.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Foam Cruz White Shoe</p>
                            <p>$240.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Deerupt Shoes</p>
                            <p>$510.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>White Sports Shoes</p>
                            <p>$420.00 - $450.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Red & White Top Sneaker</p>
                            <p>$450.00</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-[#e5e7eb]">
                            <figure class="-rotate-45 scale-3 transition duration-700">
                                <img src="{{ cloudinary_url('main_shoeee', ['width' => 800, 'height' => 1000, 'crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="img-rounded">
                            </figure>
                        </div>
                        <div class="py-4">
                            <p>Light Blue Running Shoe</p>
                            <p>$310.00 - $350.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <x-landing.footer />
</div>


<button x-data="playApp" @click="toast">Click Me</button>


@endsection
