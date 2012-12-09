<?php
/*
This Extension created by dimas@balanceinternet.com.au

This module extending Enterprise_Customer_Block_Form to enable
javascript function to not allow customer typing other char 
instead of numeric, if numeric set as config on the magento backend

License under BalanceInternet.

http://www.balanceinternet.com.au/

*/
class Balance_Validation_Block_Form extends Enterprise_Customer_Block_Form
{
    public function getAttributeHtml(Mage_Eav_Model_Attribute $attribute)
    {
        $output = parent::getAttributeHtml($attribute);
        $_validateRules = $attribute->getData('validate_rules');
        if(strpos($_validateRules,"numeric")){
            
            $output = str_replace('/>', 'onkeypress="return isNumberKey(event)" />', $output);
        }
        return $output;
    }

}