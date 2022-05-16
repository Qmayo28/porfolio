<?php

namespace App\View\Components\home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;

class portfolio extends Component
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
                'category' => ['Php'],
                'title' => 'Full Stack app with standard PHP Appointment Web Application System',
                'image' => url('/img/lapros.jpg'),
                'github' => 'https://github.com/Qmayo28/RoadtoWebDeveloper'
            ],
            [
                'category' => ['React'],
                'title' => 'Full Stack E-commerce ReactJs,styled-component with material-ui/icons & core',
                'image' => url('/img/react.png'),
                'github' => 'https://github.com/Qmayo28/RoadtoWebDeveloper'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css'],
                'title' => 'Full Stack app with Laravel, Tailwindcss',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com/Qmayo28/RoadtoWebDeveloper'
            ],
            [
                'category' => [ 'Bootstrap'],
                'title' => 'Applied with Boostrap',
                'image' => url('/img/bootstrap.jpg'),
                'github' => 'https://github.com/Qmayo28/RoadtoWebDeveloper'
            ],
            // [
            //     'category' => ['PHP', 'Laravel'],
            //     'title' => 'REST API with Laravel 8 and Sanctum',
            //     'image' => url('/img/laravel-rest-api.png'),
            //     'github' => 'https://github.com/thecodeholic/laravel-image-manipulation-rest-api'
            // ],
            // [
            //     'category' => ['PHP'],
            //     'title' => 'PHP MVC Framework',
            //     'image' => url('/img/php-mvc-framework.png'),
            //     'github' => 'https://github.com/thecodeholic/php-mvc-framework'
            // ],
            // [
            //     'category' => ['Bootstrap'],
            //     'title' => 'YouTube clone with Yii2',
            //     'image' => url('/img/yii2-youtube-clone.png'),
            //     'github' => 'https://github.com/thecodeholic/Yii2-Youtube-Clone'
            // ],
            // [
            //     'category' => ['Yii2', 'VueJs'],
            //     'title' => 'Yii2 + VueJs Notes application',
            //     'image' => url('/img/yii2-vue-notes.png'),
            //     'github' =>  'https://github.com/thecodeholic/vue.js-yii2-notes'
            // ],
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
