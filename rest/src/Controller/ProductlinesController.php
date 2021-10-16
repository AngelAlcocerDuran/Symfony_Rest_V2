<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductlinesController extends AbstractController
{
    public function getProductLines(){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT p.productline, p.textdescription FROM App:Productlines p");
        $listProductLines = $query->getResult();

        return $this->render('productlines/productlines.html.twig', ['lista'=>$listProductLines]);
    }
}
