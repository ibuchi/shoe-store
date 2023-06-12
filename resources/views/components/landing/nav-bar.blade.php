<nav class="px-4 py-4 bg-white">
    <div class="flex justify-between items-center font-bold">
        <div class="flex-1 text-3xl">
            <h1 class="emart">emart</h1>
        </div>

        <div class="flex-1 text-lg font-bold">
            <div class="flex flex-row justify-between items-center">
                <div>
                    <a href="#" id="demoDropdown" data-dropdown-toggle="demo" data-dropdown-trigger="hover" class="mx-2 rounded-lg px-4 py-2.5 text-center inline-flex items-center">
                        <span>Demo</span>
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <div id="demo" class="hidden bg-white text-sm font-normal border w-full transition-all duration-700 ease-in-out" aria-labelledby="demoDropdown">
                        <div class="flex justify-between mx-auto w-5/6">
                            <div class="basis-1/2 pt-8 pb-8">
                                <figure id="shoe" class="transition duration-700 p-2">
                                    <img src="{{ cloudinary_url('cld-sample-3', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="h-[400px] w-full mb-2">
                                    <figcaption class="font-bold text-lg">New Products on the market</figcaption>
                                    <button class="font-bold text-black-900">Shop Now</button>
                                </figure>
                            </div>
                            <div class="border-r basis-1/4 pt-8 pb-8">
                                <div class="leading-loose my-4 pt-4 pl-8">
                                    <h1 class="font-bold text-xl mb-4">Product Styles</h1>
                                    <p>4 Columns</p>
                                    <p>4 Columns + Sidebar</p>
                                    <p>5 COlumns</p>
                                    <p>5 Columns + Sidebar</p>
                                </div>
                            </div>
                            <div class="leading-loose border-r basis-1/4 pt-8 pb-8 pl-8">
                                <h1 class="font-bold text-xl my-4">Product Gallery</h1>
                                <p>Product Filter at Top</p>
                                <p>Product Filter at Left</p>
                                <p>Product Filter Right</p>
                            </div>
                            <div class="leading-loose basis-1/4 pt-8 pb-8 pl-8">
                                <h1 class="font-bold text-xl my-4">Product Type</h1>
                                <p>Shop Style One</p>
                                <p>Shop Style Two</p>
                                <p>Shop Style Three</p>
                                <p>Shop Style Four</p>
                            </div>
                        </div>
                        <div class="border-t">
                            <p class="float-right py-4 mr-60">Summer Sales 65% off <button>Shop Now</button></p>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="#" id="productDropdown" data-dropdown-toggle="product" data-dropdown-trigger="hover" class="mx-2 rounded-lg px-4 py-2.5 text-center inline-flex items-center">
                        <span>Product</span>
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <div id="product" class="hidden bg-white text-sm font-normal border w-full transition-all duration-700 ease-in-out" aria-labelledby="productDropdown">
                        <div class="flex justify-between mx-auto w-5/6">
                            <div class="flex basis-1/2 pt-8 pb-8">
                                <figure id="shoe" class="transition duration-700 p-2">
                                    <img src="{{ cloudinary_url('cld-sample-3', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="h-[400px] w-full mb-2">
                                    <figcaption>Each product has a number for easy identification.</figcaption>
                                </figure>
                                <figure id="shoe" class="transition duration-700 p-2">
                                    <img src="{{ cloudinary_url('cld-sample', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="h-[400px] w-full mb-2">
                                    <figcaption>It's just a product of your fevered imagination!</figcaption>
                                </figure>
                            </div>
                            <div class="border-r basis-1/4 pt-8 pb-8">
                                <div class="leading-loose my-4 pt-4 pl-8">
                                    <h1 class="font-bold text-xl mb-4">Product Styles</h1>
                                    <p>4 Columns</p>
                                    <p>4 Columns + Sidebar</p>
                                    <p>5 COlumns</p>
                                    <p>5 Columns + Sidebar</p>
                                </div>
                            </div>
                            <div class="leading-loose border-r basis-1/4 pt-8 pb-8 pl-8">
                                <h1 class="font-bold text-xl my-4">Product Gallery</h1>
                                <p>Product Filter at Top</p>
                                <p>Product Filter at Left</p>
                                <p>Product Filter Right</p>
                            </div>
                            <div class="leading-loose basis-1/4 pt-8 pb-8 pl-8">
                                <h1 class="font-bold text-xl my-4">Product Type</h1>
                                <p>Shop Style One</p>
                                <p>Shop Style Two</p>
                                <p>Shop Style Three</p>
                                <p>Shop Style Four</p>
                            </div>
                        </div>
                        <div class="border-t">
                            <p class="float-right py-4 mr-60">Summer Sales 65% off <button>Shop Now</button></p>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="#" id="shopDropdown" data-dropdown-toggle="shop" data-dropdown-trigger="hover" class="mx-2 rounded-lg px-4 py-2.5 text-center inline-flex items-center">
                        <span>Shop</span>
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <div id="shop" class="hidden bg-white text-sm font-normal border w-full transition-all duration-700 ease-in-out" aria-labelledby="shopDropdown">
                        <div class="flex justify-between mx-auto w-5/6">
                            <div class="basis-1/4">
                                <div class="leading-loose my-4 pt-4 pl-8">
                                    <h1 class="font-bold text-xl mb-4">Listing Layout</h1>
                                    <p>4 Columns</p>
                                    <p>4 Columns + Sidebar</p>
                                    <p>5 COlumns</p>
                                    <p>5 Columns + Sidebar</p>
                                </div>
                                <div class="leading-loose pl-8">
                                    <h1 class="font-bold text-xl my-4">Shop Pages</h1>
                                    <p>whishlist</p>
                                    <p>Cart</p>
                                    <p>Chekout</p>
                                </div>
                            </div>
                            <div class="leading-loose border-x basis-1/4 pt-4 pl-8">
                                <h1 class="font-bold text-xl my-4">Sidebar Widget</h1>
                                <p>Product Filter at Top</p>
                                <p>Product Filter at Left</p>
                                <p>Product Filter Right</p>
                            </div>
                            <div class="leading-loose border-r basis-1/4 pt-4 pl-8">
                                <h1 class="font-bold text-xl my-4">Shop Box Style</h1>
                                <p>Shop Style One</p>
                                <p>Shop Style Two</p>
                                <p>Shop Style Three</p>
                                <p>Shop Style Four</p>
                            </div>
                            <div class="leading-loose basis-1/2 pt-4">
                                <figure id="shoe" class="transition duration-700">
                                    <img src="{{ cloudinary_url('mainn_shoe', ['crop' => 'fill', 'gravity' => 'face']) }}" alt="Nike Shoee" class="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="#" id="blogDropdown" data-dropdown-toggle="blog" data-dropdown-trigger="hover" class="mx-2 rounded-lg px-4 py-2.5 text-center inline-flex items-center">
                        <span>Blog</span>
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <div id="blog" class="z-10 hidden bg-white  w-[250px] transition duration-700">
                        <ul class="py-2 px-4 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="blogDropdown">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Default blog</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Blog One</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Blog Two</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Blog Three</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div>
                    <a href="#" id="contactDropdown" data-dropdown-toggle="contact" data-dropdown-trigger="hover" class="mx-2 rounded-lg px-4 py-2.5 text-center inline-flex items-center">
                        <span>Contact</span>
                        <i class='bx bx-chevron-down'></i>
                    </a>
                    <div id="contact" class="hidden bg-white w-[250px] transition-all duration-700 ease-in-out">
                        <ul class="py-2 px-4 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="contactDropdown">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Contact One</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">COntact Two</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1">

            <div class="flex justify-end items-center">
                <svg width="24" height="24" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)">
                    <path id="Vector" d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z" stroke="#000000" stroke-width="0.7800000000000001" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>

                <svg width="24" height="24" class="ml-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <path d="M17,21V19a4,4,0,0,0-4-4H5a4,4,0,0,0-4,4v2" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.7800000000000001">
                    </path>
                    <circle cx="9" cy="7" fill="none" r="4" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.7800000000000001">
                    </circle>
                </svg>

                <svg width="24" height="24" class="ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M19.2373 6.23731C20.7839 7.78395 20.8432 10.2727 19.3718 11.8911L11.9995 20.0001L4.62812 11.8911C3.15679 10.2727 3.21605 7.7839 4.76269 6.23726C6.48961 4.51034 9.33372 4.66814 10.8594 6.5752L12 8.00045L13.1396 6.57504C14.6653 4.66798 17.5104 4.51039 19.2373 6.23731Z" stroke="#000000" stroke-width="0.7800000000000001" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>

                <svg width="24px" height="24px" class="ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 7H19V17C19 18.6569 17.6569 20 16 20H8C6.34315 20 5 18.6569 5 17V7Z" stroke="#000000" stroke-width="0.7800000000000001" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M9 10L9 11C9 12.6569 10.3431 14 12 14V14C13.6569 14 15 12.6569 15 11L15 10" stroke="#000000" stroke-width="0.7800000000000001" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M7 4H17L19 7H5L7 4Z" stroke="#000000" stroke-width="0.7800000000000001" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </div>
        </div>
    </div>


</nav>

