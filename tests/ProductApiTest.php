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
    }
}
