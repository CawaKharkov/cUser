<?php

namespace CUser\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;

/**
 * Description of FormHelper
 *
 * @author cawa
 */
class FormHelper extends AbstractHelper
{

    public function __invoke(\Zend\Form\FormInterface $form, $route = 'home', $params = [])
    {
        $this->template = new ViewModel();
        $this->template->setTemplate('c-user/helpers/formHelper');
        $this->template->setVariables(['form' => $form, 'route' => $route, 'params' => $params]);
        return $this->getView()->render($this->template);
    }

}
