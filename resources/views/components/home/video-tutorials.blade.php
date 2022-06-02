<!-- ====== Cards Section Start -->
<section id="tutorials" class=" dark:bg-gray-800 pt-20 pb-16">
  <div class="container ">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[25px] max-w-[400px]">
          <h2 class="font-bold text-3xl text-white dark:text-white-300 mb-4">
            Repasse de Conhecimento
          </h2>
          <h2 class="text-lg">(EM BREVE)</h2>
          <p class="text-base text-body-color">
           Equanto isso.. bora ouvir rock
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
      @foreach($videoTutorials as $video)
        <x-video-tutorial-item :video-id="$video['videoId']" :title="$video['title']"
                               :description="$video['description']"></x-video-tutorial-item>
      @endforeach
    </div>
    <div class="flex justify-center">
      <x-button-link href="https://youtube.com/" target="_blank" class="rounded-lg">
        Ver todos
      </x-button-link>
    </div>
  </div>
</section>
<!-- ====== Cards Section End -->
