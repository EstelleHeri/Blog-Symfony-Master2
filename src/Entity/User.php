<?php
/**
 * Created by IntelliJ IDEA.
 * User: Estel
 * Date: 29/01/2019
 * Time: 15:39
 */

namespace App\Entity;

use InvalidArgumentException;
use Serializable;
use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface, Serializable
{

    private $id;
    private $username;
    private $password;
    private $roles;

    public function __construct()
    {
        $this->roles = ['ROLE_USER'];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles(array $roles)
    {
        if (!in_array('ROLE_USER', $roles))
        {
            $roles[] = 'ROLE_USER';
        }
        foreach ($roles as $role)
        {
            if(substr($role, 0, 5) !== 'ROLE_') {
                throw new InvalidArgumentException("Chaque rôle doit commencer par 'ROLE_'");
            }
        }
        $this->roles = $roles;
        return $this;
    }


    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
    }


    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password,
        ]);
    }


    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized);
    }
}