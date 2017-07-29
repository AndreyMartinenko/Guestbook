<?php

class GB_Guest_Model_Resource_Guest_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

	public function _construct()
	{
		parent::_construct();
		$this->_init('gbguest/guest');
	}

}