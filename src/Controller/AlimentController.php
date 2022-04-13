<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Entity\Aliment1;
use App\Repository\Aliment1Repository;
use App\Repository\AlimentRepository;
use App\Repository\AlRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlimentController extends AbstractController
{
    #[Route('/aliment', name: 'app_aliment')]
    public function aliment(AlRepository $repository): Response
    {


        $aliment = $repository->findAll();


        return $this->render(
            'aliment/index.html.twig',
            [
                "aliment" => $aliment,
                "isCalorie" => false,
                "isGlucide" => false
            ]

        );
    }


    #[Route('/aliment/calorie/{calorie}', name: 'app_alimentParCalorie')]
    public function alimentparcalorie(AlRepository $repository, $calorie): Response
    {


        $aliment = $repository->getalimentsParpropriete('calorie', '<', $calorie);


        return $this->render(
            'aliment/index.html.twig',
            [
                "aliment" => $aliment,
                "isCalorie" => true,
                "isGlucide" => false

            ]

        );
    }

    #[Route('/aliment/glucide/{glucide}', name: 'app_alimentParglucide')]
    public function alimentparglucide(AlRepository $repository, $glucide): Response
    {


        $aliment = $repository->getalimentsParpropriete('glucide', '>', $glucide);


        return $this->render(
            'aliment/index.html.twig',
            [
                "aliment" => $aliment,
                "isGlucide" => true,
                "isCalorie" => false


            ]

        );
    }
}