<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NombreController extends Controller
{
    
    public function indexAction(Request $request)
    {


        // replace this example code with whatever you need
        return $this->render('AppBundle:Nombre:index.html.twig', array(
            'nombre' => 'Manuel'));

    }
}
