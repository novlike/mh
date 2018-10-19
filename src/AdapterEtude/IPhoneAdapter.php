<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 12:19
 */

namespace App\AdapterEtude;

class IPhoneAdapter implements IFormatAndroidInterface
{
    private $mobile;

    public function __construct(IFormatIphoneInterface $mobile)
    {
        $this->mobile = $mobile;
    }

    public function useMicroUsb()
    {
        echo "MicroUsb Connected";
        $this->mobile->useLightning();
    }
    public function recharge()
    {
        $this->mobile->recharge();
    }
}