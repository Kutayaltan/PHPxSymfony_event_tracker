<?php

namespace App\Controller;

use App\Entity\ProductController;
use App\Form\ProductControllerType;
use App\Repository\ProductControllerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/product/controller')]
class ProductControllerController extends AbstractController
{
    #[Route('/', name: 'app_product_controller_index', methods: ['GET'])]
    public function index(ProductControllerRepository $productControllerRepository, Request $request): Response
    {
        // Get the 'type' query parameter from the URL
        $type = $request->query->get('type');

        // If the 'type' parameter is present, filter products by type, otherwise get all products
        if ($type) {
            $productControllers = $productControllerRepository->findBy(['Type' => $type]);
        } else {
            $productControllers = $productControllerRepository->findAll();
        }

        // Render the template with the filtered or full list of products
        return $this->render('product_controller/index.html.twig', [
            'product_controllers' => $productControllers,
        ]);
    }

    #[Route('/new', name: 'app_product_controller_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $productController = new ProductController();
        $form = $this->createForm(ProductControllerType::class, $productController);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($productController);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_controller_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product_controller/new.html.twig', [
            'product_controller' => $productController,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_controller_show', methods: ['GET'])]
    public function show(ProductController $productController): Response
    {
        return $this->render('product_controller/show.html.twig', [
            'product_controller' => $productController,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_product_controller_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProductController $productController, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProductControllerType::class, $productController);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_product_controller_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product_controller/edit.html.twig', [
            'product_controller' => $productController,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_controller_delete', methods: ['POST'])]
    public function delete(Request $request, ProductController $productController, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $productController->getId(), $request->get('_token'))) {
            $entityManager->remove($productController);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_product_controller_index', [], Response::HTTP_SEE_OTHER);
    }
}
