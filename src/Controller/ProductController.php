<?php

namespace App\Controller;

use App\Repository\ProductControllerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{


    #[Route('/events', name: 'app_events')]
    public function showEvents(ProductControllerRepository $productControllerRepository): Response
    {

        $events = $productControllerRepository->findAll();

        return $this->render('events/index.html.twig', [
            "eventArr" => $events
        ]);
    }

    // #[Route('/details', name: 'app_product')]
    // public function showDetails(): Response
    // {
    //     return $this->render('events/index.html.twig', [
    //         'controller_name' => 'ProductController',
    //     ]);
    // }
}
