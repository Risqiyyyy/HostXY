        <!-- Navbar -->
        <nav class="flex py-5 justify-between items-center">
            <img src="images/landingPage/logo_xy.svg" alt="Logo XY" class="w-[70px] md:w-[120px] lg:w-[150px]">
            <button>
                <img src="images/landingPage/toogle.svg" alt="Toogle Menu Icon" class="visible w-5 md:w-10 lg:invisible">
            </button>

            <div class="hidden items-center lg:flex gap-x-[80px]">
                <ul class="flex font-semibold text-base gap-x-5 ">
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Hosting</li></a>
                    <a href=""><li>Promo</li></a>
                    <a href=""><li>Layanan</li></a>
                    <a href=""><li>Kontak</li></a>
                </ul>
                <div class="flex items-center md:gap-x-3 lg:gap-x-10">
                    <a href="{{route('login')}}"><button class="bg-primary py-2 px-5 rounded-xl">
                        <p class="font-semibold text-sm">Login</p>
                    </button></a>
                    <p>|</p>
                    <div class="flex items-center">
                        <img src="images/landingPage/phone.svg" alt="Phone Icon" class="md:w-4">
                        <p class="font-semibold ml-2 text-base">+6283117060631</p>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar END -->