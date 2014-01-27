<?php

namespace CUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use CUser\Form\UserFormBuilder;
/**
 * @category controller
 * @package CUser\Controller
 * @author Cawa <cawa123@mail.ru>
 */
class UserController extends AbstractActionController
{

    public function indexAction()
    {
        
    }
    /**
     * 
     * @return \Zend\View\Model\ViewModel
     */
    public function loginAction()
    {

        $formBuilder = new UserFormBuilder();

        $loginForm = $formBuilder->getLoginForm();


        return new ViewModel(['loginForm' => $loginForm]);
    }

    
    /**
     * 
     * @return \Zend\View\Model\ViewModel
     */
    public function registerAction()
    {

        $formBuilder = new UserFormBuilder();

        $registrationForm = $formBuilder->getRegistrationForm();
        $errors = [];

        $request = $this->getRequest();
        if ($request->isPost()) {
            $registrationForm->setData($request->getPost());
            if ($registrationForm->isValid()) {


                $registrationSerice = $this->getServiceLocator()->get('RegistrationService');

                $registration = $registrationSerice->registerUser($registrationForm->getData());

                if (is_object($registration)) {
                    $vm = new ViewModel(['user' => $registration]);
                    $vm->setTemplate('c-user/user/success');
                    return $vm;
                } else {
                    $errors['email'] = ['User Exists'];
                    //var_dump($registrationForm->get);die();
                }
            } else {
                
            }
            $registrationForm->setMessages($errors);
        }
        return new ViewModel(['registrationForm' => $registrationForm]);
    }

}
