<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 14:31
 */

namespace App\BridgeEtude;

class DrawingApi1 implements DrawingInterface
{
    public function drawCircle($x, $y, $radius)
    {
        echo "API1.circle at $x:$y radius $radius.\n";
    }
}
