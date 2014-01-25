<?php
/**
 * namespace
 */
namespace CUser\Repository;
use Doctrine\ORM\EntityRepository as Repository;
use CUser\Entity\User;

/**
 * Class UserRepository
 * @package CUser\Repository
 */
class UserRepository extends Repository
{
    /**
     * Save User
     * @param User $user
     * @return User
     */
    public function save(User $user)
    {
        $this->_em->persist($user);
        $this->_em->flush();
        return $user;
    }

    /**
     * Delete User
     * @param User $user
     */
    public function delete(User $user)
    {
        $this->_em->remove($user);
        $this->_em->flush();
    }
}