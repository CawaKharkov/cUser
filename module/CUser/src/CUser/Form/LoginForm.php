<?php

/**
 * namespace
 */

namespace CUser\Form;

use Zend\Form\Form;

/**
 * Class LoginForm
 * @package CUser\Form
 */
class LoginForm extends Form
{

    public function __construct($name = null)
    {
        parent::__construct($name);
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'csrf',
            'type' => 'Zend\Form\Element\Csrf',
            'options' => array(
                'csrf_options' => array(
                    'timeout' => 600
                )
            )
        ));
        $this->add(array(
            'name' => 'email',
            'type' => 'Text',
            'options' => array(
            ),
            'attributes' => [
                'class' => 'form-control',
                'placeholder' => 'Email'
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
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Enter',
                'id' => 'submitbutton',
                'class' => 'btn btn-lg btn-success btn-block'
            ),
        ));
    }

}
