<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'pAgnJDJN4VA',
                'title' => 'AC/DC',
                'description' => 'Melhor musica para programar'
            ],
            [
                'videoId' => 'v2AC41dglnM',
                'title' => 'Thunderstruck',
                'description' => 'Bora ouvir musica!'
            ],
            [
                'videoId' => 'etAIpkdhU9Q',
                'title' => 'hells bells',
                'description' => 'Official HD Video for "Hells Bells" by AC/DC.'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
