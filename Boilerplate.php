<?php

/**
 * 
 */
class Shopware_Controllers_Backend_Boilerplate extends Enlight_Controller_Action {

    protected $_useTemplates = true;
    protected $_templateBase = 'backend/plugins/boilerplate/';

    public function init() {
        if( $this->_useTemplates == true )
            $this->View()->addTemplateDir( dirname( __FILE__ ) . '/templates/' );
    }

    public function skeletonAction() {
        $this->_loadTemplate( 'skeleton.tpl' );
    }

    public function indexAction() {
        $this->_loadTemplate( 'index.tpl' );
    }

    protected function _loadTemplate( $name = NULL ) {
        if( $name == NULL )
            return false;
        $this->View()->loadTemplate( $this->_templateBase . $name );
    }

}
