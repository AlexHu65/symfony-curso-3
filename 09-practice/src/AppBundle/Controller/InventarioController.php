<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 5/18/2018
 * Time: 11:36 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class InventarioController extends Controller
{

    public function indexAction(Request  $request, $name ,$page)
    {

        return $this->render('AppBundle:Inventario:index.html.twig', array(
            'inventario' => $name,
            'page' => $page
        ));

    }


}