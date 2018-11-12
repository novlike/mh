<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 12:24
 */

namespace App\AdapterEtude;

class MicroUsbRecharger
{
    private $mobile;
    private $mobileAdapter;

    public function __construct()
    {
        $this->mobile = new IPhone();
        $this->mobileAdapter = new IPhoneAdapter($this->mobile);
        $this->mobileAdapter->useMicroUsb();
        $this->mobileAdapter->recharge();
    }
}
