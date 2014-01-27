<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CUser\Form;

use Doctrine\ORM\EntityManagerInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

/**
 * Description of HydratorFactory
 *
 * @author cawa
 */
class HydratorFactory
{

    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getHydratorFor(&$class)
    {
        return new DoctrineHydrator($this->em, get_class($class));
    }

}
