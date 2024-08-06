<?php

// src/Controller/ProductoController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    public function listarProductos(): Response
    {
        return $this->render('producto/lista.html.twig', [
            'message' => 'Esta es la lista de productos',
        ]);
    }

    #[Route('/ver-orden', name: 'ver_orden')]
    public function verOrden(): Response
    {
        return new Response('Página de ver orden');
    }

    #[Route('/salir', name: 'salir')]
    public function salir(): Response
    {
        return new Response('Página de salir');
    }
}

