<?php

// src/Controller/ProgramController.php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;


class DefaultController extends AbstractController

{
     /**
     * @Route("/", name="app_index")
     */
    public function index() {

        return $this->render('defa  ult/index.html.twig', ['Bienvenue' => 'Bienvenue !']);
    }
    }