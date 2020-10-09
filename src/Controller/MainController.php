<?php

namespace App\Controller;


use App\Entity\House;
use App\Repository\HouseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
      return $this->render( 'Home/index.html.twig'); //Ruta por defecto
    }

    //Las rutas "/api/... se gestionan en HouseController.php"

}
