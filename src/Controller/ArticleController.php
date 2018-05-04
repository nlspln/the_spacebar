<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 5/4/2018
 * Time: 3:07 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Hello World");
    }

    /**
     * @Route("news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'Here is comment 1',
            ' Here is comment number two',
            'I like bacon'
        ];

       return $this->render('article/show.html.twig', [
           'title' => ucwords(str_replace('_', ' ', $slug)),
           'comments' => $comments,
       ]);
    }
}