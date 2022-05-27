  <!-- ====== About Section Start -->
  <section id="about" class=" pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center -mx-3 sm:-mx-4">
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/profile.png') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/profile.png') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
            </div>
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="my-4 relative z-10">
                <img
                  src="{{ url('/img/foto.jpeg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
                <x-about-dots></x-about-dots>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="font-semibold text-lg text-primary mb-2 block">
              <blockquote class="text-sm text-gray-400 italic py-2 px-3 border-l-4 border-amber-500">
                "Tudo é possível com muito trabalho"
              </blockquote>
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl dark:text-black mb-8">
              Sobre-min
            </h2>
            <p class="text-base dark:text-gray-400 mb-8">
              Trabalho como desenvolvedor de software profissional. <br />
              Durante minha carreira trabalhei em vários tipos de projetos com várias tecnologias,
              mas muitas vezes sinto que sou um desenvolvedor júnior que acabou de começar a codificar. <br />
            </p>
            {{-- <p class="text-base dark:text-gray-400 mb-8">
              In 2018 I decided to create a YouTube channel and share my knowledge. My channel is mostly focused on
              <span class="text-amber-500 font-bold">PHP</span> and <span class="text-amber-500 font-bold">JavaScript</span>. <br />
              My content is mostly focused on practical examples and projects. <br />
            </p>
            <x-button-link href="https://youtube.com/thecodeholic" variant="red" target="_blank">
              View my channel
            </x-button-link> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->
