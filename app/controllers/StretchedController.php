<?php

class StretchedController extends AppController
{

    public function __construct()
    {
        $this->init();
    }

    public function init(){

        //echo __FILE__;

        echo $this->render(APP_PATH.VIEWS.'stretchedView.html','date');
    }
}