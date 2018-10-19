<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 12:15
 */

namespace App\AdapterEtude;

class Android implements IFormatAndroidInterface
{
    private $connectorOk = false;

    public function useMicroUsb()
    {
        $this->connectorOk = true;
        echo "MicroUsb connected";

    }
    public function recharge()
    {
        echo $this->connectorOk ? "recharging" : "connect MicroUsb first";
    }
}
