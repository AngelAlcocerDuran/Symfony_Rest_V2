<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentsController extends AbstractController
{
    public function getPayments(){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT p.checknumber, p.paymentdate, p.amount FROM App:Payments p");
        $listPayments = $query->getResult();

        return $this->render('payments/payments.html.twig', ['lista'=>$listPayments]);
    }
}
