<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class gameslist extends Component
{
    /** 
    *    è l'insieme dei giochi
    *
    *    @var Collection 
    */
    public $games;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $games)
    {
        $this->games=$games;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gameslist');
    }
}
