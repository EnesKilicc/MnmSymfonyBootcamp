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
     * @Route("/lucky/number/{id}" , methods={"GET"})
     */
    public function number($id): Response
    {

        $number = $id;

        return $this->render('lucky/number.html.twig',[
            'test'=>$number
        ]);
    }
}