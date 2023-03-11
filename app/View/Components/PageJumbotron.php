<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageJumbotron extends Component
{

    public $title;
    public $subtitle;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subtitle, $image)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-jumbotron');
    }
}
