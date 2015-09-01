<?php

namespace Rudak\FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RudakFlBundle:Default:index.html.twig');
    }
}
