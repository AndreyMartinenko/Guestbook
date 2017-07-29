<?php

class GB_Guest_Block_Guest extends Mage_Core_Block_Template
{

	public function getGuestCollection()
	{
		$guestCollection = Mage::getModel('gbguest/guest')->getCollection();
		$guestCollection->setOrder('created', 'DESC');
		return $guestCollection;
	}
	
}