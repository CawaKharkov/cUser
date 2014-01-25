<?php

namespace CUser\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;

/**
 * Description of User
 *
 * @author cawa
 */

/**
 * Class User
 * @package CUser\Entity\User
 *
 * @ORM\Entity()
 * @ORM\Table(name="user", options={"collate"="utf8_general_ci"})
 * @ORM\Entity(repositoryClass="\CUser\Repository\UserRepository")
 */
class User
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", name="username",length=25)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Required(false)
     * @Annotation\Attributes({"class":"form-element"})
     * @var string
     */
    protected $username;

    /**
     * @ORM\Column(type="string", name="email",length=25)
     * @var stirng
     */
    protected $email;

    /**
     * @ORM\Column(type="string", name="password")
     * @var stirng
     */
    protected $password;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

}
