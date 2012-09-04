<?php
/**
 *
DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this Module to
 * newer versions in the future.

@category   
 * @package
 * @copyright
 * @license
 */

require_once Mage::getModuleDir('controllers','Mage_Checkout').DS.'OnepageController.php';


class Dzinehub_Onepagecheckout_OnepageController extends Mage_Checkout_OnepageController
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        if(!Mage::Helper('onepagecheckout')->isOnepageCheckoutEnabled())
        {
            Mage::getSingleton('checkout/session')->addError('Onepage checkout disabled');
            $this->_redirect('checkout/cart');
            return;
        }
    }
}
