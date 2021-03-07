<?php

class AppController
{

    protected $routes = [
                            'home'=>'HomeController',
                            'about'=>'AboutController',
                            'login'=>'LoginContoller',
                            'touge' => 'TougeController',
                            'drift' => 'DriftController',
                            'wheels' => 'WheelsController',
                            'staggered' => 'StaggeredController',
                            'stretched' => 'StretchedController',
                            'intro' => 'IntroController',
                            'ebisu' => 'EbisuController',
                            'travel' => 'TravelController'
                        ];

    public function __construct()
    {
        $this->init();
    }

    public function init(){

        // echo __FILE__;

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else $page = 'home';
        
        if(array_key_exists($page, $this->routes)){
            $className = $this->routes[$page];
        }
        else $className = $this->routes['home'];

        new $className;
    }

    public function render($page, $data)
    {
        
        $template = file_get_contents($page);

        return $template;
    }

}