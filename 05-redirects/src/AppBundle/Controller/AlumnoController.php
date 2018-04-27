<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AlumnoController extends Controller
{

    public function indexAction(Request $request, $name, $page)
    {

        return $this->redirect($request->getBaseUrl(). "/hello-world?hola=true");

       // return $this->redirect($this->container->get("router")->getContext()->getBaseUrl(). "/hello-world?hola=true");

        // replace this example code with whatever you need

        return $this->render('AppBundle:Alumno:index.html.twig', array(
            'nombre' => [$name, $page]
        ));

    }
}