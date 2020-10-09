<?php

namespace App\Controller\Api;

use App\Entity\House;
use App\Form\Type\HouseFormType;
use App\Repository\HouseRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

class HouseController extends AbstractFOSRestController
{

    /**
     * @Rest\Get(path="/houses")
     * EJ: GET 127.0.0.8000/api/houses
     */
    public function getHouses(
        HouseRepository $houseRepository
    ) {
        $house = $houseRepository->findAll();
        $housesAsArry = [];
        foreach ($house as $house) {
          $housesAsArry[] = [
            'id' => $house->getId(),
            'name' => $house->getName(),
            'adress' => $house->getAdress()
          ];
        };
        $response = new JsonResponse();
        $response->setData([ //Devuelve todas las casas
            'success' => true,
            'data' => $housesAsArry,
        ]);
        $response->setStatusCode('200');
        return $response;
    }

    /**
     * @Rest\Get(path="/houses/{id}")
     * EJ: GET 127.0.0.8000/api/houses/1
     */
    public function getHouse(
        int $id,
        HouseRepository $houseRepository
    ) {
      $response = new JsonResponse();
      $house = $houseRepository->find($id);
      if (is_null($house)){
        $response->setData([ //No existe casa con este id
            'success' => false,
            'error' => "No existe ninguna casa con esta id",
            'data' => null
        ]);
        $response->setStatusCode('404');

      } else {
        $response->setData([ //Existe casa con id
            'success' => true,
            'data' => [
                [
                    'id' => $house->getId(),
                    'name' => $house->getName(),
                    'adress' => $house->getAdress()
                ]
            ]
        ]);
        $response->setStatusCode('200');

      }
      return $response;
    }


    /**
     * @Rest\Post(path="/houses")
     * EJ: POST 127.0.0.8000/api/houses + body {"name": "xxx", "adress": "yyy"}
     */
    public function postHouse(
      EntityManagerInterface $em,
      Request $request
  ) {
      $response = new JsonResponse();
      $parameters = json_decode($request->getContent(), true);
      if (!isset($parameters['name'])|| !isset($parameters['adress'])) { //Falta algun campo "name" o "adress"
          $response->setData([
              'success' => false,
              'error' => 'Debes incorporar obligatoriamente el campo name y adress',
              'data' => null
          ]);
          $response->setStatusCode('406');
          return $response;
      }

      if ( empty ( $parameters['name']) || empty ( $parameters['adress'] )) { //Existen los campos pero alguno esta vacio
          $response->setData([
              'success' => false,
              'error' => 'Los campos name y adress no puedes estar vacios',
              'data' => null
          ]);
          $response->setStatusCode('406');
          return $response;
      }

      $house = new House();
      $house->setName($parameters['name']);
      $house->setAdress($parameters['adress']);
      $em->persist($house);
      $em->flush();
      $response->setData([ //Existen los dos campos y no estan vacios
          'success' => true,
          'data' => [
              [
                  'id' => $house->getId(),
                  'name' => $house->getName(),
                  'adress' => $house->getAdress()
              ]
          ]
      ]);
      $response->setStatusCode('200');
      return $response;
    }

}
