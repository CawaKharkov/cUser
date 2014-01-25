<?php

namespace CUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{

    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $user = $em->getRepository('CUser\Entity\User')->findAll();
        
        var_dump($user);
        die();
        return new ViewModel();
    }

    public function loginAction()
    {
        return new ViewModel();
    }

}
