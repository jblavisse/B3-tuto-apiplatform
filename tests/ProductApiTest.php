<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class ProductApiTest extends ApiTestCase
{
    public function testGetAll(): void
    {
        $response = static::createClient()->request(
            'GET',
            '/api/products',
            ['headers' => ['Accept' => 'application/json']]
        );
        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('content-type', 'application/json; charset=utf-8');
        $this->assertCount(10, $response->toArray());

        // Mettre les produits dans une propriété privée
    }

    public function testGet(): void
    {
        // Exécuter la fonction testGetAll
        // Récupérer le premier produit du tableau

        // Faire une requête pour récupérer avec l'identifiant de ce premier produit
        // Vérifier l'en-tête de la réponse
        // Regarder dans le json pour voir ce qu'il CONTIENT
        // le titre du produit numéro 1 correspond bien au titre récupérée dans le tableau
        // ...
    }
}
