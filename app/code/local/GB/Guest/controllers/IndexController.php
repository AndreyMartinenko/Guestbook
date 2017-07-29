<?php

class GB_Guest_IndexController extends Mage_Core_Controller_Front_Action

{

	public function indexAction()

	{
		$this->loadLayout();
		$this->renderLayout();
	}


	public function viewAction()
	{
		
		$guestId = Mage::app()->getRequest()->getParam('id', 0);
		$guest = Mage::getModel('gbguest/guest')->load($guestId);
		
		if ($guest->getId() > 0)    {
			$this->loadLayout();
			$this->getLayout()->getBlock('guest.content')->assign(array("guestItem" => $guest,
			));
			$this->renderLayout();
		}  else {
			$this->_forward('noRoute');
		}
 			
	}
}