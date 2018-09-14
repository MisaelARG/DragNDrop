<?php

namespace DragDropBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DragDropBundle:Default:index.html.twig');
    }
}
