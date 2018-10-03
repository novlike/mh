<?php

namespace App\Controller;

use App\Form\Type\CharacterType;
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
     * Homepage: propose le formualaire
     *
     * @author novlike <novlike@gmail.com>
     * @Route("/", name="homepage", methods={"GET"})
     * @Template(@todo)
     */
    public function index()
    {
        $form = $this->createForm(CharacterType::class);

        return array('form' => $form->createView());
    }
}
