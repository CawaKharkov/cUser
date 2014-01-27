<?php

/**
 * namespace
 */

namespace CUser\Form;

use Zend\Form\Form;

/**
 * Class RegistrationForm
 * @package CUser\Form
 */
class RegistrationForm extends Form
{

    public function __construct($name = null)
    {
        parent::__construct($name);
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'email',
            'type' => 'Email',
            'options' => array(
            ),
            'attributes' => [
                'class' => 'form-control',
                'placeholder' => 'Email'
            ]
        ));
        
        $this->add(array(
            'name' => 'username',
            'type' => 'Text',
            'options' => array(
            ),
            'attributes' => [
                'class' => 'form-control',
                'placeholder' => 'Username'
            ]
        ));
        
        $this->add(array(
            'name' => 'password',
            'type' => 'Password',
            'options' => array(
            ),
            'attributes' => [
                'class' => 'form-control',
                'placeholder' => 'Password'
            ]
        ));
        
        $this->add(array(
            'name' => 'passwordRepeat',
            'type' => 'Password',
            'options' => array(
            ),
            'attributes' => [
                'class' => 'form-control',
                'placeholder' => 'Repeat password'
            ]
        ));
        
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Register',
                'id' => 'submitbutton',
                'class' => 'btn btn-lg btn-success btn-block'
            ),
        ));
    }

}
