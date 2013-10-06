<?php
class Plugins_Layout_Swicher extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        $lvRole = $request->getParam('role','primary');
        $lvLayout = 'layout';
        if( 'primary' === $lvRole)
        {
            $lvLayout = 'layout';
        } elseif( 'secondary' === $lvRole)
        {
            $lvLayout = 'layout2';
        }
        if( $lvLayout !== Zend_Layout::getMvcInstance()->getLayout())
        {
            Zend_Layout::getMvcInstance()->setLayout( $lvLayout);
        }
    }
}