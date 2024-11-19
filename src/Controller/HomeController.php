<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AnimalRepository;
use App\Repository\ServiceRepository;
use App\Repository\HabitatRepository;
use App\Repository\AvisRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(AnimalRepository $animalRepository, ServiceRepository $serviceRepository, HabitatRepository $habitatRepository, AvisRepository $avisRepository): Response
    {
        $animaux = $animalRepository->findAll();
        $services = $serviceRepository->findAll();
        $habitats = $habitatRepository->findAll();
        $avis = $avisRepository->findAll();

        return $this->render('home/index.html.twig', [
            'animaux' => $animaux, 
            'services' => $services,
            'habitats' => $habitats,
            'avis' => $avis,
        ]);
    }
}
