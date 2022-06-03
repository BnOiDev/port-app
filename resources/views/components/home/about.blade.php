  <!-- ====== About Section Start -->
  <section id="about" class=" pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
      <div class="container">
          <div class="flex flex-wrap justify-between items-center -mx-4">
              <div class="w-full lg:w-6/12 px-4">
                  <div class="flex items-center -mx-3 sm:-mx-4">
                      <div class="w-full xl:w-1/2 px-3 sm:px-4">
                          <div class="py-3 sm:py-4">
                              <img src="{{ url('/img/samu.jpeg') }}" alt="" class="rounded-2xl w-full" />
                          </div>
                          <div class="py-3 sm:py-4">
                              <img src="{{ url('/img/luigi.png') }}" alt="" class="rounded-2xl w-full" />
                          </div>
                      </div>
                      <div class="w-full xl:w-1/2 px-3 sm:px-4">
                          <div class="my-4 relative z-10">
                              <img src="{{ url('/img/foto.jpeg') }}" src="{{ url('/img/luigi.png') }}" alt=""
                                  class="rounded-2xl w-full" />
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
                          Sobre mim
                      </h2>
                      <p class="text-base dark:text-gray-400 mb-8">
                          Atualmente trabalho como desenvolvedor de software sou profissional.<br />
                          Durante minha carreira trabalhei em vários empregos agora lido com projetos e várias
                          tecnologias,
                          mas muitas vezes sinto que sou um desenvolvedor que tem muito a aprender... <br />
                      </p>
                      {{-- <p class="text-base dark:text-gray-400 mb-8">
              Além do meu trabalho, família primeiro lugar, tenho filho bem pequenino
              gosto de esportes, gosto de montain bike, video games, tecnologia sou bem proativo, dinâmico e persistente nos objetivos.<br />
            </p> --}}
                      <p class="text-base dark:text-gray-400 mb-8">
                          Atualmente trabalho com projetos na empresa:<br />
                      </p>
                      <div>
                          <p class="text-base dark:text-gray-400 mb-8">
                              novomundo.com<br />
                          </p>

                      </div>

                      {{-- <x-button-link href="#" variant="red" target="_blank">
              Teste
            </x-button-link> --}}
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ====== About Section End -->
