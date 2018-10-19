<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 14:41
 */

namespace App\BridgeEtude;

abstract class Shape
{
    protected $drawingAPI;

    public abstract function draw();
    public abstract function resizeByPercentage($percentage);

    protected function __construct(DrawingInterface $drawingAPI)
    {
        $this->drawingAPI = $drawingAPI;
    }
}
