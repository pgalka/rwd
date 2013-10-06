<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAppView()
    {
        $this->bootstrap('view');
        $lvView = $this->getResource('view');
        //$lvView = new Zend_View_Abstract();
        $lvView->headMeta()
            ->appendHttpEquiv('Content-Language', 'pl-PL')
            ->headMeta('My page', 'Description')
        ;
        $lvView->headLink()->appendStylesheet('/css/style.css');
        
        //$lvView->setHelperPath(APPLICATION_PATH ."/views/helpers/", 'App_Helper');
        //$lvView->doctype(Zend_View_Helper_Doctype::HTML5);
        //$lvView->setEncoding('utf-8');
    }
}