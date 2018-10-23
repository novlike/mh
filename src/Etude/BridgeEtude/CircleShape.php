<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 14:46
 */

namespace App\BridgeEtude;

class CircleShape extends Shape
{
    private $x;
    private $y;
    private $radius;

    public function __construct($x, $y, $radius, DrawingInterface $drawingAPI)
    {
        parent::__construct($drawingAPI);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function draw()
    {
        $this->drawingAPI->drawCircle($this->x, $this->y, $this->radius);
    }
    public function resizeByPercentage($percentage)
    {
        $this->radius *= $percentage;
    }
}
