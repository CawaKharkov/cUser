<?php

namespace CUser\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use CUser\Entity\User;

/**
 * Description of RegistrationService
 *
 * @author cawa
 */
class RegistrationService implements ServiceLocatorAwareInterface
{

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    public function registerUser($params)
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        
        if (is_object($em->getRepository('CUser\Entity\User')->findOneBy(['email' => $params['email']]))) {
           return false;
        }

        $user = new User($params);
        $userRep = $em->getRepository('CUser\Entity\User')->save($user);
        return $userRep;
    }

}
