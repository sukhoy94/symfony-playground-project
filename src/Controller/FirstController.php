<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FirstController extends AbstractController
{
    private string $name = 'Andrii';
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'name' => $this->name,
            'controller_name' => 'FirstController',
        ]);
    }
}
