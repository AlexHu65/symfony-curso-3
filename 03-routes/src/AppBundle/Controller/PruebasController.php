<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{

    public function indexAction(Request $request)
    {
        // la sitaxis para crear nuestra vista es la sigueinte: [NombreBundle]:[NombreControladorOnombreDeLaCarpera de la vista]:[ARCHIVO_TWIG]
        //En el ejemplo vamos a dirigir nuestro controlador para que nos de salida a un archivo index.html.twig el parametro de texto
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
            'texto' => "Hola mundo",
        ));
    }
}
