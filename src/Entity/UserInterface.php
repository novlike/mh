<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 18/10/2018
 * Time: 16:51
 */

namespace App\Entity;

interface UserInterface
{
    public function getUsername();

    public function getPassword();
}
