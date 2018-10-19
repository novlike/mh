<?php
/**
 * Created by PhpStorm.
 * User: lhwa-seon
 * Date: 19/10/2018
 * Time: 16:24
 */

namespace App\DecoratorEtude;

class TextFormat implements InputFormatInterface
{
    /**
     * @var InputFormatInterface
     */
    protected $inputFormat;
    public function __construct(InputFormatInterface $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    public function formatText(string $text): string
    {
        $this->inputFormat->formatText($text);
    }
}
