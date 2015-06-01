<?php

class Compania_Cap_IndexController extends Mage_Core_Controller_Front_Action{

 /*descrip: render index action
     return:  bool*/

     /*nombre de la accion*/
     public function indexAction(){ 

       $this->loadLayout();
       $this->renderLayout();

	 }
}

?>