<?php

namespace BibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BibliotecaBundle:Default:index.html.twig');
    }
}
