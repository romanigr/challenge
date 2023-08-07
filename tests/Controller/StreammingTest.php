<?php

namespace App\Tests\Controller;

use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;

class StreammingControllerTest  extends WebTestCase
{
    private $token;
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $response = $this->client->request(
            'POST',
            '/api/login_check',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '{"username":"admin","password":"challenge"}'
        );
        $response = $this->client->getResponse();        
        $this->assertSame(200, $response->getStatusCode());
        $data = json_decode($response->getContent(), true);
        if (isset($data["token"])){
            $this->token=$data["token"];
        }        
        if($this->assertArrayHasKey('token', $data));            
    }

    public function testGetStreamming(): void
    {
        $this->client->request('GET', '/api/streamming',
        [],
        [],            
        ['CONTENT_TYPE' => 'application/json',
         'HTTP_AUTHORIZATION' => 'Bearer '. $this->token    
        ]);
        $response = $this->client->getResponse();
        $this->assertSame(200, $response->getStatusCode());
        $responseData = json_decode($response->getContent(), true);
    }

    public function testAddMovie(): void
    {        
        $response = $this->client->request(
            'POST',
            '/api/movie',
            ['title' => 'The Fugitive', 'durarion' => '02:30:22', 'year' => '1993'],
            [],            
            ['CONTENT_TYPE' => 'application/json',
            'HTTP_AUTHORIZATION' => 'Bearer '. $this->token    
            ]
        );
        $response = $this->client->getResponse();
        $movie = json_decode($response->getContent(), true);        
        $idmovie=$movie["id"];        
        $response = $this->client->request(
            'POST',
            '/api/streamming/director',
            ['name' => 'Andrew', 'surname' => 'Davis'],
            [],            
            ['CONTENT_TYPE' => 'application/json',
            'HTTP_AUTHORIZATION' => 'Bearer '. $this->token    
            ]
        );
        $response = $this->client->getResponse();
        $director = json_decode($response->getContent(), true);
        $iddirector=$director["id"];        
        $response = $this->client->request(
            'POST',
            "/api/movie/$idmovie/director/$iddirector",
            ['name' => 'Andrew', 'surname' => 'Davis'],
            [],            
            ['CONTENT_TYPE' => 'application/json',
            'HTTP_AUTHORIZATION' => 'Bearer '. $this->token    
            ]
        );
        $response = $this->client->getResponse();
        $this->assertSame(200, $response->getStatusCode());
    }


    public function testAddIIMovie(): void
    {        
        $response = $this->client->request(
            'POST',
            '/api/movie',
            ['title' => 'some value', 'durarion' => '01:20:22', 'year' => '2019'],
            [],            
            ['CONTENT_TYPE' => 'application/json',
            'HTTP_AUTHORIZATION' => 'Bearer '. $this->token    
            ]
        );
        $response = $this->client->getResponse();
        $this->assertSame(200, $response->getStatusCode());
    }



    public function testDeleteMovie(): void
    {        
        #For test purpose ensure this is exist in your DB
        $delete=5;
        $response = $this->client->request(
            'DELETE',
            "/api/movie/$delete",
            [],
            [],            
            ['CONTENT_TYPE' => 'application/json',
            'HTTP_AUTHORIZATION' => 'Bearer '. $this->token    
            ]            
        );
        $response = $this->client->getResponse();
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testSearchMovie(): void
    {        
        $filter='title=back+to+the+future&duration=&year=';        
        $response = $this->client->request(
            'GET',
            "/api/movie/$filter",
            [],
            [],            
            ['CONTENT_TYPE' => 'application/json',
             'HTTP_AUTHORIZATION' => 'Bearer '. $this->token    
            ]
        );
        $response = $this->client->getResponse();
        $movies = json_decode($response->getContent(), true);
        $this->assertEquals(count($movies),3);
        $this->assertSame(200, $response->getStatusCode());
    }

}
