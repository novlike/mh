<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 16:23
 */

namespace App\DecoratorEtude;

class TextInput implements InputFormatInterface
{
    public function formatText(string $text): string
    {
        return $text;
    }
}
