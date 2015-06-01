<?php 
  
class Compania_Cap_Block_Hello extends Mage_Core_Block_Template{

	public function getName(){
		return Mage::app()->getRequest()->getParam('name');
	}

	public function funcion1()
	{
		return 'Soy la función 1';
	}

	 public function getCliente(){
        $params = $this->getRequest()->getParams();
	    $customer = Mage::getModel('customer/customer')->load($params['id']);
	    echo $customer->getName();

       }

	/*public function (){
		
	}*/
}

