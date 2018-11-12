<?php
/**
 * Created by PhpStorm.
 * User: hlecouey
 * Date: 23/10/2018
 * Time: 15:29
 */

namespace App\Etude\FacadeEtude;

class YoutubeDownloader
{
    private $youtube;
    private $ffmpeg;

    public function __construct(string $youtubeApiKey)
    {
        $this->youtube =  new Youtube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
    }

    public function downloadVideo(string $url)
    {   // Copié Collé

        print("Fetching video metadata from youtube...\n");
        // $title = $this->youtube->fetchVideo($url)->getTitle();
        print("Saving video file to a temporary file...\n");
        // $this->youtube->saveAs($url, "video.mpg");

        print("Processing source video...\n");
        // $video = $this->ffmpeg->open('video.mpg');
        print("Normalizing and resizing the video to smaller dimensions...\n");
        // $video
        //     ->filters()
        //     ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
        //     ->synchronize();
        print("Capturing preview image...\n");
        // $video
        //     ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
        //     ->save($title . 'frame.jpg');
        print("Saving video in target formats...\n");
        // $video
        //     ->save(new FFMpeg\Format\Video\X264(), $title . '.mp4')
        //     ->save(new FFMpeg\Format\Video\WMV(), $title . '.wmv')
        //     ->save(new FFMpeg\Format\Video\WebM(), $title . '.webm');
        print("Done!\n");
    }
}
