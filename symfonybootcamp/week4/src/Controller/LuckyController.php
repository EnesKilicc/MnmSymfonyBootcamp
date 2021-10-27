<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use phpDocumentor\Reflection\Types\This;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"})
     */
    public function index():Response
    {
        return new Response('<html><body>Lucky number index page </body></html>');
    }
    /**
     * @Route("/nedir/{text}" , methods={"GET"})
     */
    public function number($text): Response
    {

        $number = rand(1,4);

        return $this->render('lucky/number.html.twig',[
            'number'=>$number,
            'text'=>$text
        ]);
    }
}