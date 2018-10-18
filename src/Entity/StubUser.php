<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 18/10/2018
 * Time: 16:59
 */

namespace App\Entity;

class StubUser implements UserInterface
{
    public function getPassword()
    {
        return 'foo';
    }

    public function getUsername()
    {
        return 'Barbar';
    }
}
