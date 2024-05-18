<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adnan Bayu</title>
 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">
    <style>
        .gradient{
            background: linear-gradient(90deg,#000000 0%, #000000 100%);
        }
        

header{
    z-index: 10001 !important;
}

.swiper {
  width: 100%;
  height: 100%;
}
.swiper-slide {
  text-align: center;
  font-size: 18px;
  /* background: #fff; */
  border: 1px solid indigo;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
}

.swiper-slide img {
  display: block;
  width: 88px;
  height: 88px;
  object-fit: cover;
  margin: 8px auto;
}


    </style>
      <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

<script ype="text/tailwindcss">
    tailwind.config = {
      theme: {
    fontFamily: {
      sans: ['Open Sans', 'sans-serif'],
      inter: ['Inter', 'sans-serif'],
      montserrat: ['Montserrat', 'sans-serif']
    },

        extend: {
     colors: {
        primary: "#0872BF",
        background:"#141A1A"
      }, 
      dropShadow: {
        '3xl': '0 4px 20px rgba(93, 173, 236, 0.23)',
      }
          
        }
      }
    }
  </script>

</head>
<body class="gradient leading-normal tracking-normal text-white" style="font-family: 'Source Sans Pro',sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 ">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a href="#" class="toggleColour  no-underline hover:no-underline font-bold text-2xl lg:text-4xl  text-cyan-400">Bayu</a>
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    <!--Icon from: http://www.potlabicons.com/ -->

                    .ID
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-blue-700 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-blue-600 -4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-gray-800 hover:text-underline py-2 px-4" href="#home">HOME</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-gray-800 hover:text-underline py-2 px-4" href="#about">ABOUT</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-gray-800 hover:text-underline py-2 px-4" href="#service">SERVICES</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-gray-800 hover:text-underline py-2 px-4" href="#porto">POROTOFOLIO</a>
                    </li>
                   
                </ul>
                <a href="#contact"><button id="Contact" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:bg-black hover:text-amber-400">
                   CONTACT ME
                </button></a>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
      <!--Hero-->
    <div id="home" class="pt-24">
        <div class="container px-10 mx-auto flex flex-wrap flex-col md:flex-row items-center ">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left px-10">
                <p class="uppercase tracking-loose w-full"></p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                   MY NAME IS ADNAN BAYU SETIAWAN
                </h1>
                <p class="leading-normal text-2xl mb-8">
                   I'M AUI DEVELOPER
                </p>
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    CONTACTME
                </button>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50  shadow-lg shadow-white " src="{{ asset('img/pp.jpeg')}}" />
            </div>
        </div>
    </div>
    
   <section id="about" class="max-w-7xl mx-auto px-5 my-6 text-white" id="Services">
  <div class="text-center">
    <h2 class="text-primary text-3xl font-bold mb-16">ABOUT ME</h2>
  </div>

  <div class="pt-24">
    <div class="container px-10 mx-auto flex flex-wrap md:flex-nowrap items-center">
      <!-- Left Col -->
      <div class="w-full md:w-3/5 flex justify-center items-center mb-10 md:mb-0">
        <div class="w-[300px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl">
          <img src="{{ asset('img/foto.jpeg')}}"  alt="" class="w-[230px] mx-auto" />
        </div>
      </div>

      <!-- Right Col -->
      <div class="w-full md:w-2/5">
        <h1 class="text-5xl font-bold mb-4">
          Hello, I'm Adnan Bayu Setiawan
        </h1>
        <p class="text-2xl leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- service section -->
    <section id="service" class="max-w-7xl mx-auto px-5 my-6 text-white" id="Services">
      <div class="text-center">
       
        <h3 class="text-primary text-3xl font-bold mb-16">MY SERVICES</h3>
      </div>
      <!-- service cards -->
      <div
        class="my-16 flex flex-col md:flex-row justify-around items-center gap-12"
      >
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
           src="{{ asset('img/graphic-design.svg')}}"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">Web Development</h5>
          <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
           src="{{ asset('img/graphic-design.svg')}}"
            alt="grafik"
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">Graphic Designing</h5>
          <p class="text-justify">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
           src="{{ asset('img/graphic-design.svg')}}"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">Digital Branding</h5>
          <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
          </p>
        </div>
      </div>
    </section>

    <!-- projects -->
    <section id="porto" class="px-5 my-32 mx-auto max-w-7xl" id="projects">
      <div class="text-center text-white">
        <h3 class="text-3xl font-bold mb-5">
           <span class="text-primary">PORTOFOLIO</span>
        </h3>
       
      </div>
      <div
        class="flex md:flex-row flex-col items-center justify-between gap-8 my-20"
      >
        <div
          class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0"
        >
          <img src="{{ asset('img/project.png')}}" alt="" class="p-5 w-full" />
        </div>
        <div
          class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5"
        >
          <img src="{{ asset('img/project.png')}}" alt="" class="w-full p-5" />
        </div>
      </div>
    </section>
    <section id="contact" class="bg-black h-42 w-full">
      <div class="py-8 lg:py-10 px-20 mx-auto max-w-screen-md">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-center text-white">Contact <span class="text-primary">Me</span></h2>
          <form method='POST' class="space-y-8">
            @csrf
              <div>
                  <label for="text" class="block mb-2 text-sm font-medium text-white">Nama</label>
                  <input type="text" id="nama" name="nama" class="shadow-sm bg-gray-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nama..." value="{{ (isset($bukutamu)) ? $bukutamu->nama:"" }}" required>
              </div>
              <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                  <input type="email" id="email" name="email" class="block p-3 w-full text-sm text-white bg-gray-800 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Email..." value="{{ (isset($bukutamu)) ? $bukutamu->email:"" }}" required>
              </div>
              <div class="sm:col-span-2">
                  <label for="pesan" class="block mb-2 text-sm font-medium text-white">Pesan</label>
                  <textarea id="pesan" rows="4" name="pesan" class="block p-2.5 w-full text-sm text-white bg-gray-800 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..." value="{{ (isset($bukutamu)) ? $bukutamu->pesan:"" }}"></textarea>
              </div>
              <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-800 sm:w-fit hover:bg-blue-900">Send message</button>
          </form>
      </div>
     
        <div class="bg-blue-800">
          <p class="text-center">Copyright ©2024 Designed By <span class="font-extralight">Abayyu</span></p>
        </div>
    </section>

   {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-[#00000]");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-blue-700");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });

    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

    </script>
    
    <!-- script tags -->
    <script src="src/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="src/review.js"></script>
  </body>
</html>
