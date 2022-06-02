<!-- ====== Portfolio -->
{{-- <section
x-data="
  {
    showCards: 'all',
    activeClasses: 'bg-primary text-white',
    inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
  }
"
class=" dark:bg-gray-800  pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
>
<div class="container ">
  <div class="flex flex-wrap -mx-4">
    <div class="w-full px-4">
      <div class="text-center mx-auto mb-[60px] max-w-[510px]">
        <span class="font-semibold text-lg text-primary mb-2 block">
          Trabalhos
        </span>
        <h2
          id="projects"
          class="
            font-bold
            text-3xl
            sm:text-4xl
            md:text-[40px]
            text-white
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
</section> --}}
<!-- ====== Portfolio Section End -->



<!-- ====== Portfolio Section Start -->
<section
  id="projects"
  x-data="
        {
          selectedTab: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
  class=" pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
>
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[60px] max-w-[510px]">
          <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-gray-300 mb-4">
            Meus projetos recentes
          </h2>
          <p class="text-base text-body-color">
            Você aprende mais construindo projetos. Vá em frente e construa algo.
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center -mx-4">
      <div class="w-full px-4">
        <ul class="flex flex-wrap justify-center mb-12 space-x-1">
          <li class="mb-1">
            <button
              @click="selectedTab = 'all' "
              :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
            >
              Todos
            </button>
          </li>
          @foreach($tabs as $tab)
          <li class="mb-1">
            <button
              @click="selectedTab = '{{$tab}}' "
              :class="selectedTab === '{{$tab}}' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition ">
              {{$tab}}
            </button>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
      @foreach ($items as $item)
        <x-portfolio-item :title="$item['title']"
                          :categories="$item['category']"
                          :image="$item['image']"
                          :github="$item['github']"></x-portfolio-item>
      @endforeach
    </div>
  </div>
</section>
<!-- ====== Portfolio Section End -->
