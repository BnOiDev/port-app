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
                'image' => url('/img/projetos/modinha2.png'),
                'github' => 'https://www.modinha.com.br/'
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
                'github' => 'https://www.modinha.com.br/'
            ],
            [
                'category' => ['Laravel', 'tailwindcss'],
                'title' => 'Laravel + compon.. + tailwindcss',
                'image' => url('/img/projetos/portf.png'),
                'github' => '/'
            ],
            [
                'category' => ['HTML + CSS','Bootstrap'],
                'title' => 'Pedal Solta o Freio',
                'image' => url('/img/projetos/sfn.png'),
                'github' =>  'https://www.soltaofreio.com.br/'
            ],
            [
                'category' => ['Laravel', 'Vue', 'Bootstrap'],
                'title' => 'B7web + Cursos , Refazendo',
                'image' => url('/img/projetos/cursob7.png'),
                'github' =>  '#https://b7web.com.br/'
            ],
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'Onvet team GP',
                'image' => url('/img/projetos/onvet.png'),
                'github' =>  ''
            ],
            [
                'category' => ['Wordpress'],
                'title' => 'Clube de Costura',
                'image' => url('/img/projetos/clube.png'),
                'github' =>  'https://www.clubedecostura.com.br/'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Losango Emprestimo',
                'image' => url('/img/projetos/losango.png'),
                'github' =>  '#'
            ],
            [
                'category' => ['Vue'],
                'title' => 'PW -> Desktop',
                'image' => url('/img/projetos/pwdesk2.png'),
                'github' =>  '#'
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
