<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main class="min-h-screen bg-background px-14 text-white">
        
        <!-- Navbar -->
        @include('navbar')
        <!-- Navbar END -->

        <!-- Hero -->
        <section class="mt-[40px] md:mt-[80px]">
            <div class="flex flex-wrap justify-center lg:justify-between">
                <div class="flex flex-col items-center">
                    <h1 class="mb-5 leading-tight text-center font-bold text-primary text-3xl md:text-[64px] md:w-[600px]">Premium Web Hosting</h1>
                    <p class="text-[10px] md:text-base md:leading-7">Blazing fast web hosting for individuals and <br> businesses of all sizes backed by 24x7x365 Support.</p>
                </div>
                <div>
                    <img src="images/landingPage/element-hero.svg" alt="" class="w-[280px] mt-10 md:w-[450px] lg:w-[500px]">
                </div>
            </div>
        </section>
        <!-- Hero END -->

        <!-- product logo  -->
        <section class="flex flex-wrap justify-between mt-32">
            <img class="w-[70px] lg:w-[150px]" src="images/landingPage/logo_product/softaculous.svg" alt="softaculous logo">
            <img class="w-[70px] lg:w-[150px]" src="images/landingPage/logo_product/wordpress.svg" alt="wordpress logo">
            <img class="w-[70px] lg:w-[150px]" src="images/landingPage/logo_product/cloudflare.svg" alt="cloudflare logo">
            <img class="w-[70px] lg:w-[150px]" src="images/landingPage/logo_product/cpanel.svg" alt="cpanel logo">
            <img class="w-[70px] lg:w-[150px]" src="images/landingPage/logo_product/imunify.svg" alt="imunify logo">
            <img class="w-[70px] lg:w-[150px]" src="images/landingPage/logo_product/litespeed.svg" alt="litespeed logo">
        </section>
        <!-- product logo END -->

        <!-- why us -->
        <section class="mt-20 px-14 flex flex-wrap justify-between">
            <div class="w-[250px] flex flex-col text-center items-center">
                <img src="images/landingPage/logo/timer.svg" alt="" class="w-20">
                <h1 class="text-xl font-bold">99.9% Uptime</h1>
                <p class="text-xs mt-1 mb-3">We Keep Your Web build Online 24x7x365. Downtime not only costs you lost visitors but also damages your reputation and search engine rankings.</p>
            </div>
            <div class="w-[250px] flex flex-col text-center items-center">
                <img src="images/landingPage/logo/cloud.svg" alt="" class="w-20">
                <h1 class="text-xl font-bold">Blazing Fast Web Hosting</h1>
                <p class="text-xs mt-1 mb-3">We Keep Your Web build Online 24x7x365. Downtime not only costs you lost visitors but also damages your reputation and search engine rankings.</p>
            </div>
            <div class="w-[250px] flex flex-col text-center items-center">
                <img src="images/landingPage/logo/logo_ssl.svg" alt="" class="w-20">
                <h1 class="text-xl font-bold">Free SSL Certificates</h1>
                <p class="text-xs mt-1 mb-3">We Keep Your Web build Online 24x7x365. Downtime not only costs you lost visitors but also damages your reputation and search engine rankings.</p>
            </div>
            <div class="w-[250px] flex flex-col text-center items-center">
                <img src="images/landingPage/logo/cs_logo.svg" alt="" class="w-20">
                <h1 class="text-xl font-bold">24x7 Friendly Support</h1>
                <p class="text-xs mt-1 mb-3">We Keep Your Web build Online 24x7x365. Downtime not only costs you lost visitors but also damages your reputation and search engine rankings.</p>
            </div>
        </section>
        <!-- why us END -->

        <!-- Hosting Plan -->
        <section class="flex flex-col justify-center items-center lg:mt-28 mt-20">
            <h1 class="text-xl lg:text-3xl font-semibold text-primary bg-secondary bg-opacity-[15%] lg:pb-2 pb:3 px-6 rounded-full">Hosting plan</h1>
            <p class="text-xs lg:text-2xl text-center mt-3">Choose The Perfect Web Hosting <br> Package For You</p>
            <div class="flex mt-14">
                <div class="flex items-center mx-3">
                    <p class="text-xl lg:text-2xl mr-8">Monthly</p>
                    <input type="checkbox" class="toggle toggle-secondary" checked />
                </div>
                <div class="flex items-center mx-3">
                    <p class="text-xl lg:text-2xl mr-6">Yearly</p>
                    <p class="bg-[#FFE87A] text-xs lg:text-sm py-2 px-4 rounded-lg">20% discount</p>
                </div>
            </div>
            <div class="flex lg:mt-20 mt-19">
                <p class="text-xl lg:text-3xl font-semibold px-44 border-b-8 border-primary">Basic</p>
                <p class="text-xl lg:text-3xl font-semibold px-44 border-b-8">Premium</p>
            </div>
        </section>
        <!-- Hosting plan END -->

        <!-- Card -->
        <div class="flex flex-wrap justify-center items-center px-36 mt-14 lg:gap-20 gap-15">
            <div class="w-64 text-black bg-white p-6 pb-10 rounded-xl mb-3 mx-3">
                <div>
                    <h1 class="text-3xl font-semibold">Starter</h1>
                    <p class="text-sm mt-2">with all your customers via all conversation channels in one central dashboard.</p>
                </div>
                <div class="mt-5">
                    <p class="text-4xl font-semibold">$2.80</p>
                    <p>per month</p>
                </div>
                <button class="mt-5 font-semibold w-full border-2 border-black py-2 rounded-xl">Choose this Plan</button>
                <div class="mt-5 flex flex-col gap-y-3">
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>2GB SSD</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>10GB Bandwidth</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>15 Email Accounts</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Unlimited Database</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>4 Subdomains</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>1 Parked Domain</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>2 Websites</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Free SSL</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Softaculous</p>
                    </div>
                </div>
            </div>

            <div class="w-64 text-black bg-white p-6 pb-10 rounded-xl mx-3">
                <div>
                    <h1 class="text-3xl font-semibold">Standard</h1>
                    <p class="text-sm mt-2">with all your customers via all conversation channels in one central dashboard.</p>
                </div>
                <div class="mt-5">
                    <p class="text-4xl font-semibold">$4.20</p>
                    <p>per month</p>
                </div>
                <button class="mt-5 font-semibold w-full border-2 border-black py-2 rounded-xl">Choose this Plan</button>
                <div class="mt-5 flex flex-col gap-y-3">
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>2GB SSD</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>10GB Bandwidth</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>15 Email Accounts</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Unlimited Database</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>4 Subdomains</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>1 Parked Domain</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>2 Websites</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Free SSL</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Softaculous</p>
                    </div>
                </div>
            </div>

            <div class="w-64 text-black bg-white p-6 pb-10 rounded-xl mx-3">
                <div>
                    <h1 class="text-3xl font-semibold">Suprem</h1>
                    <p class="text-sm mt-2">with all your customers via all conversation channels in one central dashboard.</p>
                </div>
                <div class="mt-5">
                    <p class="text-4xl font-semibold">$7.00</p>
                    <p>per month</p>
                </div>
                <button class="mt-5 font-semibold w-full border-2 border-black py-2 rounded-xl">Choose this Plan</button>
                <div class="mt-5 flex flex-col gap-y-3">
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>2GB SSD</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>10GB Bandwidth</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>15 Email Accounts</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Unlimited Database</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>4 Subdomains</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>1 Parked Domain</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>2 Websites</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Free SSL</p>
                    </div>
                    <div class="flex items-center gap-x-5">
                        <i class="fa-solid fa-check text-primary"></i>
                        <p>Softaculous</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card END -->

        <!-- Other Features -->
        <section class="flex flex-col justify-center items-center lg:mt-28 mt-20">
            <h1 class="text-xl lg:text-3xl font-semibold text-primary bg-secondary bg-opacity-[15%] lg:pb-2 pb:3 px-6 rounded-full">Other Features</h1>
            <p class="text-xs lg:text-2xl text-center mt-3">The most complete features in Open cpanel</p>
        </section>
        <!-- Other Features END -->

        <!-- List other features -->
        <div class="flex justify-between flex-wrap mt-36">
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Cpanel Control Panel</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited Database</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited FTP</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited SSD Disk Space</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited Domain</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited Sub Domain</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited Bandwidth</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited Email</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Unlimited Traffic</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Auto SSL</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Cloudlinux</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Nodejs</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Softaculous</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Litespeed</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Python</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Jet Backup</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Imunify360</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-x-5 w-[450px] my-5">
                <i class="fa-solid fa-check text-primary"></i>
                <div class="flex flex-col items-start">
                    <p class="text-xs lg:text-2xl text-center mt-3 text-primary font-bold">Ruby</p>
                    <p class="text-xs mt-1 font-bold max-w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, modi.</p>
                </div>
            </div>
        </div>
        <!-- List other features END -->


    </main>

    <script>
        const hamburger = document.querySelector('#hamburger');
        const navMenu = document.querySelector('#nav-menu');

        hamburger.addEventListener('click', function(){
            hamburger.classList.toggle('hamburger-active')
            navMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>