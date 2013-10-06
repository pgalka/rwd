<?php
class Plugins_Layout_Swicher extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        $lvRole = $request->getParam('ly','1');
        $lvLayout = 'layout';
        if( '1' === $lvRole)
        {
            $lvLayout = 'layout';
        } elseif( '2' === $lvRole)
        {
            $lvLayout = 'layout2';
        }
        if( $lvLayout !== Zend_Layout::getMvcInstance()->getLayout())
        {
            Zend_Layout::getMvcInstance()->setLayout( $lvLayout);
        }
    }
}