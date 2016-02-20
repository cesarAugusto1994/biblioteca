<?php

namespace BibliotecaBundle\Controller;

use BibliotecaBundle\Entity\Acervos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AcervoController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('BibliotecaBundle:Acervos');

        return $this->render('@Biblioteca/Acervos/acervos.html.twig', array('itens' => $repository->findAll()));
    }

    public function cadastrarAction(Request $request)
    {

        $acervo = new Acervos();

        $acervo->setTitulo($request->request->get('titulo'));
        $acervo->setAutor($request->request->get('autor'));
        $acervo->setEditora($request->request->get('editora'));
        $acervo->setCadastro(new \DateTime());
        $acervo->setStatus(1);

        $repository = $this->getDoctrine()->getEntityManager();
        $repository->persist($acervo);
        $repository->flush();

        $repository2 = $this->getDoctrine()->getRepository('BibliotecaBundle:Acervos');

        return $this->render(
            '@Biblioteca/Acervos/acervos.html.twig',
            array('sucesso' => 1, 'itens' => $repository2->findAll())
        );

    }
}
