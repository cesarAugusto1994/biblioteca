<?php

namespace BibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcervoController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Biblioteca/Acervos/acervos.html.twig');
    }
}
