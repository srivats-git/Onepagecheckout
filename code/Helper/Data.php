<?php

class Dzinehub_Onepagecheckout_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isOnePageCheckoutEnabled()
    {
        return (bool) Mage::getStoreConfig('onepagecheckout/onepagecheckout_config/enabled');
    }
    
}