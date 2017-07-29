<?php

class GB_Guest_Model_Resource_Guest extends Mage_Core_Model_Mysql4_Abstract
{

	public function _construct()
	{
		$this->_init('gbguest/table_guest','guest_id');
	}
	
}