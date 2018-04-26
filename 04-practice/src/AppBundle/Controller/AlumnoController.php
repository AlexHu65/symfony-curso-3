<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AlumnoController extends Controller
{

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need

        return $this->render('AppBundle:Alumno:index.html.twig', array(
            'nombre' => ['Manuel Alejandro Chavez Nunez' , 'Alejandro']
        ));

    }
}