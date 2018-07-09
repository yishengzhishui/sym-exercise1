<?php

// src/AppBundle/Controller/NewsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/news")
 */
class NewsController extends Controller
{
    /**
     * @Route("/", name="news_index")
     */
    public function indexAction()
    {
        return $this->render('news/index.html.twig');
    }
}