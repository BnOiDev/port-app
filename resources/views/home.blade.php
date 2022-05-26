<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="\img\mushroom.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

  {{-- <x-layout.navbar>
  </x-layout.navbar> --}}
  
 <!-- ====== Navbar -->
 <header x-data="{navbarOpen: false}" class="bg-white w-full flex items-center">
  <div class="container">
      <div class="flex -mx-4 items-center justify-between relative">
          <div class="px-4 w-70 max-w-full">
              <a href="javascript:void(0);" class="w-full block py-5 text-center"> Almeida
                  <img src="/img/logo-izi.png " alt="logo" class="w-20"/>
              </a>
          </div>
          <div class="flex px-4 justify-between items-center w-full">
              <div>
                  <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler" class="
              block
              absolute
              right-4
              top-1/2
              -translate-y-1/2
              lg:hidden
              focus:ring-2
              ring-primary
              px-3
              py-[6px]
              rounded-lg
            ">
                      <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                      <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                      <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                  </button>
                  <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                      class="
              absolute
              py-5
              px-6
              bg-white
              shadow
              rounded-lg
              max-w-[250px]
              w-full
              lg:max-w-full lg:w-full
              right-4
              top-full
              lg:block lg:static lg:shadow-none
            ">
                      <ul class="blcok lg:flex">
                          <li>
                              <a href="javascript:void(0)"
                                  class="
                    text-base
                    font-medium
                    text-dark
                    hover:text-primary
                    py-2
                    lg:inline-flex
                    flex
                    lg:ml-12
                  ">
                                  Sobre

                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)"
                                  class="
                    text-base
                    font-medium
                    text-dark
                    hover:text-primary
                    py-2
                    lg:inline-flex
                    flex
                    lg:ml-12
                  ">
                                  Projetos

                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)"
                                  class="
                    text-base
                    font-medium
                    text-dark
                    hover:text-primary
                    py-2
                    lg:inline-flex
                    flex
                    lg:ml-12
                  ">
                                  Contato
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
              <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                  <a href="javascript:void(0)"
                      class=" text-base font-medium text-dark hover:text-primary py-3 px-7">
                      Tutoriais
                  </a>
                  <a href="javascript:void(0)"
                      class=" text-base font-medium text-white bg-primary rounded-lg py-3 px-7 hover:bg-opacity-90">
                        
                      Entre em contato
                  </a>
              </div>
          </div>
      </div>
  </div>
</header>
<!-- ====== Navbar Section End -->


<!-- ====== Hero -->
<div class="relative pt-[120px] lg:pt-[150px] pb-[110px] bg-white">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-5/12 px-4">
        <div class="hero-content">
          <h1
            class="
              text-dark
              font-bold
              text-4xl
              sm:text-[42px]
              lg:text-[40px]
              xl:text-[42px]
              leading-snug
              mb-3
            "
          >
           
           Oi, Sou Bruno Almeida <br />
            Desenvolvedor.
          </h1>
          <p class="text-base mb-8 text-body-color max-w-[480px]">
            Tenho como ideal o crescimento profissional, intelectual e humano. Sou uma pessoa criativa, comunicativa, colaboradora e persistente nos objetivos.
          </p>
          <ul class="flex flex-wrap items-center">
            <li>
              <a
                href="javascript:void(0)"
                class="
                  py-4
                  px-6
                  sm:px-10
                  lg:px-8
                  xl:px-10
                  inline-flex
                  items-center
                  justify-center
                  text-center text-white text-base
                  bg-primary
                  hover:bg-opacity-90
                  font-normal
                  rounded-lg
                "
              >
                CV
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="
                  py-4
                  px-6
                  sm:px-10
                  lg:px-8
                  xl:px-10
                  inline-flex
                  items-center
                  justify-center
                  text-center text-base
                  font-normal
                  text-body-color
                  hover:text-primary
                "
              >
                <span class="mr-2">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="11" cy="11" r="11" fill="#3056D3" />
                    <rect
                      x="6.90906"
                      y="13.3636"
                      width="8.18182"
                      height="1.63636"
                      fill="white"
                    />
                    <rect
                      x="10.1818"
                      y="6"
                      width="1.63636"
                      height="4.09091"
                      fill="white"
                    />
                    <path
                      d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z"
                      fill="white"
                    />
                  </svg>
                </span>
                Download
              </a>
            </li>
          </ul>
         
        </div>
      </div>
      <div class="hidden lg:block lg:w-1/12 px-4"></div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="lg:text-right lg:ml-auto">
          <div class="relative inline-block z-10 pt-11 lg:pt-0">
            <img
              src="\img\foto.jpeg"
              alt="hero"
              class="max-w-full lg:ml-auto w-96"
            />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
              <svg
                width="93"
                height="93"
                viewBox="0 0 93 93"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Hero Section End -->


    <!-- ====== Portfolio -->
    <section
      x-data="
        {
          showCards: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
      class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
    >
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] max-w-[510px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                Trabalhos
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                "
              >
              Projetos recentes
              </h2>
              <p class="text-base text-body-color">
                Minha meta é desenvolver meu potencial de trabalho, crescer profissionalmente, visando somar meus conhecimentos à equipe e adquirir novos.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4">
            <ul class="flex flex-wrap justify-center mb-12 space-x-1">
              <li class="mb-1">
                <button
                  @click="showCards = 'all' "
                  :class="showCards == 'all' ? activeClasses : inactiveClasses "
                  class="
                    inline-block
                    py-2
                    md:py-3
                    px-5
                    lg:px-8
                    rounded-lg
                    text-base
                    font-semibold
                    text-center
                    transition
                  "
                >
                  Todos projetos
                </button>
              </li>
              <li class="mb-1">
                <button
                  @click="showCards = 'branding' "
                  :class="showCards == 'branding' ? activeClasses : inactiveClasses "
                  class="
                    inline-block
                    py-2
                    md:py-3
                    px-5
                    lg:px-8
                    rounded-lg
                    text-base
                    font-semibold
                    text-center
                    transition
                  "
                >
                 Front-End
                </button>
              </li>
              <li class="mb-1">
                <button
                  @click="showCards = 'design' "
                  :class="showCards == 'design' ? activeClasses : inactiveClasses "
                  class="
                    inline-block
                    py-2
                    md:py-3
                    px-5
                    lg:px-8
                    rounded-lg
                    text-base
                    font-semibold
                    text-center
                    transition
                  "
                >
                Design UX/UI
                </button>
              </li>
              <li class="mb-1">
                <button
                  @click="showCards = 'development' "
                  :class="showCards == 'development' ? activeClasses : inactiveClasses "
                  class="
                    inline-block
                    py-2
                    md:py-3
                    px-5
                    lg:px-8
                    rounded-lg
                    text-base
                    font-semibold
                    text-center
                    transition
                  "
                >
                  Desenvolvimento
                </button>
              </li>
            </ul>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <div
            :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
            class="w-full md:w-1/2 xl:w-1/3 px-4"
          >
            <div class="relative mb-12">
              <div class="rounded-lg overflow-hidden">
                <img
                  src="\img\projetos\modinha.png"
                  alt="portfolio"
                  class="w-full"
                />
              </div>
              <div
                class="
                  text-center
                  bg-white
                  relative
                  z-10
                  py-9
                  px-3
                  rounded-lg
                  shadow-lg
                  mx-7
                  -mt-20
                "
              >
                <span class="text-sm text-primary font-semibold block mb-2">
                  Modinha
                </span>
                <h3 class="font-bold text-xl text-dark mb-4">
                 www.modinha.com.br
                </h3>
                <a
                  href="javascript:void(0)"
                  class="
                    text-body-color text-sm
                    font-semibold
                    py-3
                    px-7
                    inline-block
                    border
                    rounded-md
                    hover:bg-primary hover:border-primary hover:text-white
                    transition
                  "
                >
                Ver detalhes
                </a>
              </div>
            </div>
          </div>
          <div
            :class="showCards == 'all' || showCards == 'marketing' ? 'block' : 'hidden' "
            class="w-full md:w-1/2 xl:w-1/3 px-4"
          >
            <div class="relative mb-12">
              <div class="rounded-lg overflow-hidden">
                <img
                  src="\img\projetos\modinha fig.png"
                  alt="portfolio"
                  class="w-full"
                />
              </div>
              <div
                class="
                  text-center
                  bg-white
                  relative
                  z-10
                  py-9
                  px-3
                  rounded-lg
                  shadow-lg
                  mx-7
                  -mt-20
                "
              >
                <span class="text-sm text-primary font-semibold block mb-2">
                  UX/UI
                </span>
                <h3 class="font-bold text-xl text-dark mb-4">
                 Figma
                </h3>
                <a
                  href="javascript:void(0)"
                  class="
                    text-body-color text-sm
                    font-semibold
                    py-3
                    px-7
                    inline-block
                    border
                    rounded-md
                    hover:bg-primary hover:border-primary hover:text-white
                    transition
                  "
                >
                Ver detalhes
                </a>
              </div>
            </div>
          </div>
          <div
            :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden' "
            class="w-full md:w-1/2 xl:w-1/3 px-4"
          >
            <div class="relative mb-12">
              <div class="rounded-lg overflow-hidden">
                <img
                  src="\img\projetos\pw novo.png"
                  alt="portfolio"
                  class="w-full"
                />
              </div>
              <div
                class="
                  text-center
                  bg-white
                  relative
                  z-10
                  py-9
                  px-3
                  rounded-lg
                  shadow-lg
                  mx-7
                  -mt-20
                "
              >
                <span class="text-sm text-primary font-semibold block mb-2">
                  MelhoriaPW
                </span>
                <h3 class="font-bold text-xl text-dark mb-4">
                 Front-end
                </h3>
                <a
                  href="javascript:void(0)"
                  class="
                    text-body-color text-sm
                    font-semibold
                    py-3
                    px-7
                    inline-block
                    border
                    rounded-md
                    hover:bg-primary hover:border-primary hover:text-white
                    transition
                  "
                >
                Ver detalhes
                </a>
              </div>
            </div>
          </div>
          <div
            :class="showCards == 'all' || showCards == 'design' ? 'block' : 'hidden' "
            class="w-full md:w-1/2 xl:w-1/3 px-4"
          >
            <div class="relative mb-12">
              <div class="rounded-lg overflow-hidden">
                <img
                  src="\img\projetos\megasimples.png"
                  alt="portfolio"
                  class="w-full"
                />
              </div>
              <div
                class="
                  text-center
                  bg-white
                  relative
                  z-10
                  py-9
                  px-3
                  rounded-lg
                  shadow-lg
                  mx-7
                  -mt-20
                "
              >
                <span class="text-sm text-primary font-semibold block mb-2">
                  megasimples
                </span>
                <h3 class="font-bold text-xl text-dark mb-4">
                  Mega Moda App
                </h3>
                <a
                  href="javascript:void(0)"
                  class="
                    text-body-color text-sm
                    font-semibold
                    py-3
                    px-7
                    inline-block
                    border
                    rounded-md
                    hover:bg-primary hover:border-primary hover:text-white
                    transition
                  "
                >
                  Ver detalhes
                </a>
              </div>
            </div>
          </div>
         
         
        </div>
      </div>
    </section>
    <!-- ====== Portfolio Section End -->


<!-- ====== Footer -->
<footer class="bg-white pt-20 lg:pt-[120px] pb-10 lg:pb-20 relative z-10">
  <div class="container">
     <div class="flex flex-wrap -mx-4">
        <div class="w-full sm:w-2/3 lg:w-3/12 px-4">
           <div class="w-full mb-10">
              <a
                 href="javascript:void(0)"
                 class="inline-block max-w-[160px] mb-6"
                 >
              <img
                 src="\img\mushroom.png"
                 alt="logo"
                 class="max-w-full"
                 />
              </a>
              <p class="text-base text-body-color mb-7">
                 Tu se torna eternamente responsavel por aquilo que cativas...
              </p>
              <p class="flex items-center text-sm text-dark font-medium">
                 <span class="text-primary mr-3">
                    <svg
                       width="19"
                       height="21"
                       viewBox="0 0 19 21"
                       class="fill-current"
                       >
                       <path
                          d="M17.8076 11.8129C17.741 11.0475 17.1088 10.5151 16.3434 10.5151H2.16795C1.40261 10.5151 0.803643 11.0808 0.703816 11.8129L0.00502514 18.8008C-0.0282506 19.2001 0.104853 19.6327 0.371059 19.9322C0.637265 20.2317 1.03657 20.398 1.46916 20.398H17.0755C17.4748 20.398 17.8741 20.2317 18.1736 19.9322C18.4398 19.6327 18.5729 19.2334 18.5396 18.8008L17.8076 11.8129ZM17.2751 19.1668C17.2419 19.2001 17.1753 19.2667 17.0422 19.2667H1.46916C1.36933 19.2667 1.2695 19.2001 1.23623 19.1668C1.20295 19.1336 1.1364 19.067 1.16968 18.9339L1.86847 11.9127C1.86847 11.7463 2.00157 11.6465 2.16795 11.6465H16.3767C16.5431 11.6465 16.6429 11.7463 16.6762 11.9127L17.375 18.9339C17.3417 19.0337 17.3084 19.1336 17.2751 19.1668Z"
                          />
                       <path
                          d="M9.25704 13.1106C7.95928 13.1106 6.92773 14.1422 6.92773 15.4399C6.92773 16.7377 7.95928 17.7693 9.25704 17.7693C10.5548 17.7693 11.5863 16.7377 11.5863 15.4399C11.5863 14.1422 10.5548 13.1106 9.25704 13.1106ZM9.25704 16.6046C8.6248 16.6046 8.09239 16.0722 8.09239 15.4399C8.09239 14.8077 8.6248 14.2753 9.25704 14.2753C9.88928 14.2753 10.4217 14.8077 10.4217 15.4399C10.4217 16.0722 9.88928 16.6046 9.25704 16.6046Z"
                          />
                       <path
                          d="M0.802807 6.05619C0.869358 7.52032 2.16711 8.11928 2.83263 8.11928H5.16193C5.19521 8.11928 5.19521 8.11928 5.19521 8.11928C6.19348 8.05273 7.19175 7.38722 7.19175 6.05619V5.25757C8.28985 5.25757 10.8188 5.25757 11.9169 5.25757V6.05619C11.9169 7.38722 12.9152 8.05273 13.9135 8.11928H13.9467H16.2428C16.9083 8.11928 18.206 7.52032 18.2726 6.05619C18.2726 5.95636 18.2726 5.59033 18.2726 5.25757C18.2726 4.99136 18.2726 4.75843 18.2726 4.72516C18.2726 4.69188 18.2726 4.6586 18.2726 4.6586C18.1727 3.72688 17.84 2.96154 17.2743 2.36258L17.241 2.3293C16.4091 1.56396 15.4109 1.13138 14.6455 0.865169C12.416 0 9.62088 0 9.48778 0C7.52451 0.0332757 6.26003 0.199654 4.36331 0.865169C3.63125 1.0981 2.63297 1.53068 1.80108 2.29603L1.7678 2.3293C1.20212 2.92827 0.869359 3.69361 0.769531 4.62533C0.769531 4.6586 0.769531 4.69188 0.769531 4.69188C0.769531 4.75843 0.769531 4.95809 0.769531 5.22429C0.802807 5.52377 0.802807 5.92308 0.802807 6.05619ZM2.5997 3.12792C3.26521 2.52896 4.09711 2.16292 4.7959 1.89672C6.52624 1.26448 7.65761 1.13138 9.55433 1.0981C9.68743 1.0981 12.2829 1.13138 14.2795 1.89672C14.9783 2.16292 15.8102 2.49568 16.4757 3.12792C16.8417 3.52723 17.0746 4.05964 17.1412 4.69188C17.1412 4.79171 17.1412 4.95809 17.1412 5.22429C17.1412 5.55705 17.1412 5.92308 17.1412 6.02291C17.1079 6.78825 16.3759 6.95463 16.276 6.95463H13.98C13.6472 6.92135 13.1148 6.78825 13.1148 6.05619V4.69188C13.1148 4.42567 12.9485 4.22602 12.7155 4.12619C12.5159 4.05964 6.69262 4.05964 6.49296 4.12619C6.26003 4.19274 6.09365 4.42567 6.09365 4.69188V6.05619C6.09365 6.78825 5.56124 6.92135 5.22848 6.95463H2.93246C2.83263 6.95463 2.10056 6.78825 2.06729 6.02291C2.06729 5.92308 2.06729 5.55705 2.06729 5.22429C2.06729 4.95809 2.06729 4.82498 2.06729 4.72516C2.00073 4.05964 2.23366 3.52723 2.5997 3.12792Z"
                          />
                    </svg>
                 </span>
                 <span>+55 (62) 98242-8369</span>
              </p>
           </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-2/12 px-4">
           
        </div>
        <div class="w-full sm:w-1/2 lg:w-2/12 px-4">
          
        </div>
        <div class="w-full sm:w-1/2 lg:w-2/12 px-4">
           <div class="w-full mb-10">
              <h4 class="text-dark text-lg font-semibold mb-9">Links</h4>
              <ul>
                 <li>
                    <a
                       href="javascript:void(0)"
                       class="
                       inline-block
                       text-base text-body-color
                       hover:text-primary
                       leading-loose
                       mb-2
                       "
                       >
                    Sobre
                    </a>
                 </li>
                 <li>
                    <a
                       href="javascript:void(0)"
                       class="
                       inline-block
                       text-base text-body-color
                       hover:text-primary
                       leading-loose
                       mb-2
                       "
                       >
                    Projetos
                    </a>
                 </li>
                 <li>
                    <a
                       href="javascript:void(0)"
                       class="
                       inline-block
                       text-base text-body-color
                       hover:text-primary
                       leading-loose
                       mb-2
                       "
                       >
                   CV
                    </a>
                 </li>
                 <li>
                    <a
                       href="javascript:void(0)"
                       class="
                       inline-block
                       text-base text-body-color
                       hover:text-primary
                       leading-loose
                       mb-2
                       "
                       >
                    Contato
                    </a>
                 </li>
              </ul>
           </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-3/12 px-4">
           <div class="w-full mb-10">
              <h4 class="text-dark text-lg font-semibold mb-9">SIGA AS NOSSAS REDES SOCIAIS</h4>
              <div class="flex items-center mb-6">
                 <a
                    href="javascript:void(0)"
                    class="
                    w-8
                    h-8
                    flex
                    items-center
                    justify-center
                    rounded-full
                    border border-[#E5E5E5]
                    text-dark
                    hover:text-white hover:bg-primary hover:border-primary
                    mr-3
                    sm:mr-4
                    lg:mr-3
                    xl:mr-4
                    "
                    >
                    <svg
                       width="8"
                       height="16"
                       viewBox="0 0 8 16"
                       class="fill-current"
                       >
                       <path
                          d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z"
                          />
                    </svg>
                 </a>
                 <a
                    href="javascript:void(0)"
                    class="
                    w-8
                    h-8
                    flex
                    items-center
                    justify-center
                    rounded-full
                    border border-[#E5E5E5]
                    text-dark
                    hover:text-white hover:bg-primary hover:border-primary
                    mr-3
                    sm:mr-4
                    lg:mr-3
                    xl:mr-4
                    "
                    >
                    <svg
                       width="16"
                       height="12"
                       viewBox="0 0 16 12"
                       class="fill-current"
                       >
                       <path
                          d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z"
                          />
                    </svg>
                 </a>
                 <a
                    href="javascript:void(0)"
                    class="
                    w-8
                    h-8
                    flex
                    items-center
                    justify-center
                    rounded-full
                    border border-[#E5E5E5]
                    text-dark
                    hover:text-white hover:bg-primary hover:border-primary
                    mr-3
                    sm:mr-4
                    lg:mr-3
                    xl:mr-4
                    "
                    >
                    <svg
                       width="14"
                       height="14"
                       viewBox="0 0 14 14"
                       class="fill-current"
                       >
                       <path
                          d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"
                          />
                    </svg>
                 </a>
              </div>
              <p class="text-base text-body-color">&copy; 2022 @Almeida</p>
           </div>
        </div>
     </div>
  </div>
  <div>
     <span class="absolute left-0 bottom-0 z-[-1]">
        <svg
           width="217"
           height="229"
           viewBox="0 0 217 229"
           fill="none"
           xmlns="http://www.w3.org/2000/svg"
           >
           <path
              d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
              fill="url(#paint0_linear_1179_5)"
              />
           <defs>
              <linearGradient
                 id="paint0_linear_1179_5"
                 x1="76.5"
                 y1="281"
                 x2="76.5"
                 y2="1.22829e-05"
                 gradientUnits="userSpaceOnUse"
                 >
                 <stop stop-color="#3056D3" stop-opacity="0.08" />
                 <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
              </linearGradient>
           </defs>
        </svg>
     </span>
     <span class="absolute top-10 right-10 z-[-1]">
        <svg
           width="75"
           height="75"
           viewBox="0 0 75 75"
           fill="none"
           xmlns="http://www.w3.org/2000/svg"
           >
           <path
              d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
              fill="url(#paint0_linear_1179_4)"
              />
           <defs>
              <linearGradient
                 id="paint0_linear_1179_4"
                 x1="-1.63917e-06"
                 y1="37.5"
                 x2="75"
                 y2="37.5"
                 gradientUnits="userSpaceOnUse"
                 >
                 <stop stop-color="#13C296" stop-opacity="0.31" />
                 <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
              </linearGradient>
           </defs>
        </svg>
     </span>
  </div>
</footer>
<!-- ====== Footer Section End --> 

   
</body>

</html>
