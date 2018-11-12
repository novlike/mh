<?php

namespace App\Etude\FacadeEtude;

class test
{
    public function clientFunction(YoutubeDownloader $facade)
    {
        $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");
    }
}

$facade = new YoutubeDownloader('key');
$test = new test();
$test->clientFunction($facade);
