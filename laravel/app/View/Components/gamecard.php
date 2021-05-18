<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gamecard extends Component
{
    public $game;
    /** 
    *    costum link
    *
    *    @var string 
    */
    public $link;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($game,string $link="/")
    {
        $this->game=$game;
        $this->link=$link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gamecard');
    }
}
