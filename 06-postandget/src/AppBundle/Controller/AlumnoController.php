<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AlumnoController extends Controller
{

    public function indexAction(Request $request, $name, $page)
    {

        // se utiliza el objeto request para obtener la query

        if($request->get('hola-post')){
            var_dump($request->get('hola-post'));
            die();
        }

        var_dump($request->query->get('hola'));
        die();

        return $this->render('AppBundle:Alumno:index.html.twig', array(
            'nombre' => [$name, $page]
        ));

    }
}