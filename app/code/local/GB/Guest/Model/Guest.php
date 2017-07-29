<?php

class GB_Guest_Model_Guest extends Mage_Core_Model_Abstract
{

	public function _construct()
	{

		parent::_construct();
		
		$this->_init('gbguest/guest');
	}
	
}