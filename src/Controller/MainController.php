<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-15
 * Time: 07:19
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{


    /**
     * @Route("/")
     */
    public function main()
    {
        return $this->render('main/main.html.twig',[

        ]);
    }


    /**
     * @Route("/info")
     */
    public function info()
    {

        // check state
        // check session

        return $this->render('info/info.html.twig',[

        ]);
    }


    /**
     * @Route("/get/{idx}")
     */
    public function getJoinInfo($idx)
    {
        return new Response('getJoinInfo todo');
    }
}