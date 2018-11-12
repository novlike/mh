<?php
/**
 * Created by PhpStorm.
 * User: hlecouey
 * Date: 12/11/2018
 * Time: 10:04
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response();
    }
}
