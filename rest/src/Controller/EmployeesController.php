<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeesController extends AbstractController
{
    public function getEmployees(){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT e.employeenumber, e.lastname, e.firstname, e.extension, 
        e.email, e.officecode, e.reportsto, e.jobtitle FROM App:Employees e");
        $listEmployees = $query->getResult();

        return $this->render('employees/employees.html.twig', ['lista'=>$listEmployees]);
    }
}
