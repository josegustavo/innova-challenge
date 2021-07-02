<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\View\Component;

class TopNav extends Component
{

    public $menus;
    public $active;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active, $title = '')
    {
        $this->active = $active;
        $this->title = $title;
        $this->menus = Menu::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.top-nav');
    }
}
