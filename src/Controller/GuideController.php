<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//extends AbstractController
class GuideController {
    public function accueil() {
        return new Response("<html><body><h1>Guide Michelin</h1> <p>Trouver un restaurant</p></body></html>");
    }
}