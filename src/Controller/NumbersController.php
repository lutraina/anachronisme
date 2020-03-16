<?php
/**
 * Created by PhpStorm.
 * User: lucianahembert
 * Date: 2020-03-17
 * Time: 00:02
 */


// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class NumbersController extends AbstractController
{
    /**
     * @Route("/home/number")
     *
     * @return Response
     * @throws \Exception
     */
    public function number()
    {
        $number = random_int(0, 100);

        /*
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
        */
        return $this->render('home/number.html.twig', [
            'number' => $number,
        ]);

    }
}