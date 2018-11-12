<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 16:22
 */

namespace App\DecoratorEtude;

interface InputFormatInterface
{
    public function formatText(string $text) : string;
}
