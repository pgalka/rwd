<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function codeReaderAction(){
        $lvFile = './css/base.css';
        if( $this->getParam('ly', 1) == 2){
            $lvFile = './css/flexible-box.css';
        }
        $this->view->cssFile = htmlspecialchars( file_get_contents( $lvFile));
    }


}

