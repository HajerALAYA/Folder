<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
   
    
    public function index()
    {
        return $this->render('index.html.twig');
    }

    
    public function admin()
    {
        return $this->render('Admin/index.html.twig');
    }

}
