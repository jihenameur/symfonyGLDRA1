<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class Controller extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index()
    {
        return $this->render('/index.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
     /**
     * @Route("/test", name="test")
     */
    public function index2()
    {
        return new Response("Bonjouur");
       
    }
     /**
     * @Route("/test3", name="test3")
     */
    public function index3()
    {
        $tab=['rim','jiji'];
        return $this->render('/index3.html.twig', [
            'names' => $tab,
        ]);
       
    }
     /**
     * @Route("/somme/{n1}/{n2}", name="somme")
     */
    public function somme($n1,$n2):Response
    {
        $somme=$n1+$n2;
        return $this->render('/somme.html.twig', [
            'n1' => $n1,'n2'=>$n2,'somme'=>$somme
        ]);
       
    }
}
