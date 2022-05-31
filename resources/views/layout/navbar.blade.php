<!-- ====== Navbar -->
<header x-data="{ navbarOpen: false }" class="bg-white w-full flex items-center">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="px-4 w-70 max-w-full">
                <a href="#menu" class="w-full block py-5 text-center"> Almeida
                    <img id="menu" src="\img\avatarMenu.png " alt="logo" class="w-14" />
                </a>
            </div>
            <div class="flex px-4 justify-between items-center w-full">
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler"
                        class=" block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
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
                                <a href="#about"
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
                                <a href="#projects"
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
                                <a href="#contact"
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
                    <a href="#tutorials" class=" text-base font-medium text-dark hover:text-primary py-3 px-7">
                        Tutoriais
                    </a>
                    <a href="#contact"
                        class=" text-base font-medium text-white bg-primary rounded-lg py-3 px-7 hover:bg-opacity-90">

                        Entre em contato
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
