<?php

namespace Nastycode\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;


class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction(Request $request)
    {

    }
    /**
     * @Route("/")
     * @Template()
     */
    // public function javascriptsAction()
    // {
    //     return $this->render('NastycodeFrontBundle:Home:javascripts.html.twig');
    // }
}