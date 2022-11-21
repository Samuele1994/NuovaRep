<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $id;
    public $titolo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$titolo)
    {
        $this->id=$id;
        $this->titolo=$titolo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
