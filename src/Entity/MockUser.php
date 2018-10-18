<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 18/10/2018
 * Time: 17:07
 */

namespace App\Entity;

class MockUser implements UserInterface
{
    private $numberCalled = 0;
    private $numberShouldBeCalled = 0;

    public function getPassword()
    {
        return 'foo';
    }

    public function getUsername()
    {
        $this->numberCalled++;
        return 'Barbar';
    }

    public function setExpectedNumberCalls($number)
    {
        $this->numberShouldBeCalled = $number;
    }

    public function verify()
    {
        if ($this->numberShouldBeCalled !== $this->numberCalled) {
            throw new \Exception(sprintf(
                'Actual number of calls %d - expected $d',
                $this->numberCalled,
                $this->numberShouldBeCalled
                ));
        }
        return true;
    }
}
