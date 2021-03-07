<?php

class IntroController extends AppController
{

    public function __construct()
    {
        $this->init();
    }

    public function init(){

        //echo __FILE__;

        echo $this->render(APP_PATH.VIEWS.'introView.html','date');
    }
}