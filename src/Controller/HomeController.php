<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 *
 * @package App\Controller
 * @author  novlike <novlike@gmail.com>
 */
class HomeController extends Controller
{
    /**
     * Homepage
     * @author novlike <novlike@gmail.com>
     * @Route("/", name="homepage", methods={"GET"})
     * @Template("")
     */
    public function index()
    {
        //@todo form type
        return array();
    }
}
