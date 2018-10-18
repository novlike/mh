<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 18/10/2018
 * Time: 16:56
 */

namespace App\Entity;

class DummyUser implements UserInterface
{
    public function getPassword()
    {
        return null;
    }
    public function getUsername()
    {
        return null;
    }
}
