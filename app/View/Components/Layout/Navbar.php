<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Inicio', 'href' => '/  '],
            ['label' => 'Sobre', 'href' => '#about'],
            ['label' => 'Projetos', 'href' => '#projects'],
            ['label' => 'Videos', 'href' => '#tutorials'],
            ['label' => 'CV', 'href' => '\cv\Profile CV.pdf' ],
            // ['label' => 'Contatos', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
