<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainMenu extends Component
{

    public static array $links = [
        'main' => 'Главная', 'maps' => 'Карты', 'schedule' => 'Расписания', 'about' =>' О нас'
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-menu', ['links' => self::$links]);
    }
}
