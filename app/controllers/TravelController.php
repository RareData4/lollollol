<?php

class TravelController extends AppController
{

    public function __construct()
    {
        $this->init();
    }

    public function init(){

        //echo __FILE__;

        echo $this->render(APP_PATH.VIEWS.'travelView.html','date');
    }
}