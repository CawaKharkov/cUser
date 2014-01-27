<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CUser\Form;

use Zend\Form\Annotation\AnnotationBuilder;
use CUser\User\UserInterface;
use Zend\Stdlib\Hydrator\HydratorInterface;
use CUser\Form\LoginForm;
use CUser\Form\RegistrationForm;

/**
 * Description of FormBuilder
 *
 * @author cawa
 */
class UserFormBuilder
{

    protected $hydrator;

    public function getUserForm(UserInterface $user)
    {
        $formBuilder = new AnnotationBuilder();
        $userForm = $formBuilder->createForm($user);

        $userForm->setHydrator($this->getHydrator());

        return $userForm->bind($user);
    }

    public function setHydrator(HydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    public function getHydrator()
    {
        return $this->hydrator;
    }

    public function getLoginForm()
    {
        return new LoginForm('LoginForm');
    }

    public function getRegistrationForm()
    {
        return new RegistrationForm('RegistrationForm');
    }

}
