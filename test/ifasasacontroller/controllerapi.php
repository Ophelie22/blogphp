// src/Controller/ApiController.php
<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/get_data", name="api_get_data")
     */
    public function getData(Request $request): JsonResponse
    {
        // Vous pourriez ici récupérer les données de la base de données ou autre source
        $data = [
            'message' => 'Données récupérées avec succès',
            'data' => [
                // ... vos données ici
            ],
        ];

        // Vous renvoyez les données sous forme de JSON
        return $this->json($data);
    }

    /**
     * @Route("/api/send_data", name="api_send_data", methods={"POST"})
     */
    public function sendData(Request $request): JsonResponse
    {
        // Vous pourriez ici traiter les données envoyées depuis le front-end
        $requestData = json_decode($request->getContent(), true);

        // Traitez les données et renvoyez une réponse
        $response = [
            'message' => 'Données reçues et traitées avec succès',
            // ... autres détails de réponse
        ];

        return $this->json($response);
    }
}
