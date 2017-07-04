<?php

namespace Emp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmpUserBundle:Default:index.html.twig');
    }
}
