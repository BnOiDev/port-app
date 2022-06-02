<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Bootstrap', 'Vue', 'PHP'],
                'title' => 'Laravel, Bootstrap, VueJs',
                'image' => url('/img/projetos/megasimples.png'),
                'github' => '#'
            ],
            [
                'category' => ['Laravel','Vue','Bootstrap'],
                'title' => 'Laravel + Vue + Bootstrap ',
                'image' => url('/img/projetos/modinha.png'),
                'github' => '#'
            ],
            [
                'category' => ['Vue'],
                'title' => 'MelhoriasPW',
                'image' => url('/img/projetos/melhoriaspw.png'),
                'github' => '#'
            ],
            [
                'category' => ['Figma'],
                'title' => 'Prototipação, UX/UI',
                'image' => url('/img/projetos/prototipomodinha.png'),
                'github' => '#'
            ],
            [
                'category' => ['Laravel', 'tailwindcss'],
                'title' => 'Laravel + compon.. + tailwindcss',
                'image' => url('/img/projetos/portfolio.png'),
                'github' => '#'
            ],
            [
                'category' => ['HTML + CSS','Bootstrap'],
                'title' => 'Pedal Solta o Freio',
                'image' => url('/img/projetos/soltaofreio.png'),
                'github' =>  '#https://www.soltaofreio.com.br/'
            ],
            [
                'category' => ['Laravel', 'Vue', 'Bootstrap'],
                'title' => 'B7web + Cursos , Refazendo',
                'image' => url('/img/projetos/cursob7.png'),
                'github' =>  '#https://b7web.com.br/'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
