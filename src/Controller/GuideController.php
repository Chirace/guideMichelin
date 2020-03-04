<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//extends AbstractController
class GuideController extends AbstractController{
    public function accueil() {
        return $this->render('guide/accueil.html.twig');
    }

    public function menu() {
        return $this->render('guide/menu.html.twig');
    }

    public function restaurants(){
        return $this->render('guide/restaurant.html.twig');
    }

    public function chefs(){
        return $this->render('guide/chef.html.twig');
    }

    public function plats(){
        return $this->render('guide/plat.html.twig');
    }

    public function voirRestaurant($id) {
        $restaurant = $this->getDoctrine()->getRepository(Restaurant::class)->find($id);
        if(!$restaurant)
        throw $this->createNotFoundException('Restaurant[id='.$id.'] inexistante');
        return $this->render('guide/restaurant/voir.html.twig', 
        array('restaurant' => $restaurant));
        }

    /*public function accueil() {
        return new Response("<html><body><h1>Guide Michelin</h1> <p>Trouver un restaurant</p></body></html>");
    }

    public function accueil() {
        return new Response("<html><body><h1>Guide Michelin</h1> <p>Trouver un restaurant</p></body></html>");
    }

    public function accueil() {
        return new Response("<html><body><h1>Guide Michelin</h1> <p>Trouver un restaurant</p></body></html>");
    }*/
}