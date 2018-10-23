<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 12:06
 */

namespace App\AdapterEtude;


class IPhone implements IFormatIphoneInterface
{
    private $connectorOk = false;

    public function useLightning()
    {
        $this->connectorOk = true;
        echo "Lightning connected";
    }
    public function recharge()
    {
        echo $this->connectorOk ? "recharge" : "connect lightning first";
    }
}