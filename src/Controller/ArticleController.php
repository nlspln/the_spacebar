<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 5/4/2018
 * Time: 3:07 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf('Future page to show one space article: %s', $slug));
    }
}