<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\OrgRepository;

class MoviesController extends AbstractController
{
    public $movies = ["Inception", "Terminator", "Hunger Games"];

    #[Route('/movies', name: 'app_movies', methods: ['GET', 'HEAD'])]
    public function index(OrgRepository $orgs): Response
    {
        $data = $orgs->findAll();

        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MoviesController',
            'movies' => $this->movies,
            'orgs' => $data
        ]);
    }


    #[Route('/movies/{id}', name: 'app_movies_show')]
    public function show(string $id): Response
    {
        return $this->render('movies/show.html.twig', [
            'id' => $id,
        ]);
    }


}
