<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 18/10/2018
 * Time: 17:01
 */

namespace App\Entity;

class SpyUser implements UserInterface
{
    public $getUserNameWasCalled = false;

    public function getUsername()
    {
        return 'foo';
    }
    public function getPassword()
    {
        $this->getUserNameWasCalled = true;
        return 'Barbar';
    }
}
