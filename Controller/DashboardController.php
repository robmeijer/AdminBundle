<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    public function indexAction()
    {
        return $this->render('AdminBundle:dashboard:index.html.twig');
    }
}
