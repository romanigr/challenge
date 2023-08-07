<?php

namespace App\Controller;

use App\Entity\Director;
use App\Entity\Movie;
use App\Entity\TvShow;
use App\Entity\Season;
use App\Entity\Episode;
use App\Entity\Streamming;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api', name: 'streamming_')]
class StreammingController extends AbstractController
{
    /* this first method return all movies and tv shows */
    #[Route('/streamming', name: 'app_streamming',methods:['get'])]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {       
        $repository = $entityManager->getRepository(Streamming::class);
        $movies = $repository->findAll();       
        return $this->json($movies,200,['Content-Type' => 'application/json;charset=UTF-8']);
    }


    /* this method allow you to add a new movie */
    #[Route('/movie', name: 'add_movie', methods:['post'] )]
    public function create(EntityManagerInterface $entityManager, Request $request,ValidatorInterface $validator): JsonResponse
    {         
        $movie = new Movie();        
        $movie->setTitle($request->request->get('title'));
        $movie->setDuration($request->request->get('duration'));
        $movie->setYear($request->request->get('year'));   
        $errors = $validator->validate($movie);
        if (count($errors) > 0) {                     
            return $this->json($movie,500,['Content-Type' => 'application/json;charset=UTF-8']);
        }
        $entityManager->persist($movie);
        $entityManager->flush();        
        return $this->json($movie,200,['Content-Type' => 'application/json;charset=UTF-8']);
    }


    /* this method allow you to remove a movie by id */
    #[Route('/movie/{id}', name: 'delete_movie', methods:['delete'] )]
    public function delete(EntityManagerInterface $entityManager,int $id): JsonResponse
    {            
        $movie = $entityManager->getRepository(Movie::class)->find($id);   
        if (!$movie) {
            return $this->json('No movie found',404,['Content-Type' => 'application/json;charset=UTF-8']);
        }   
        $entityManager->remove($movie);
        $entityManager->flush();
        return $this->json('The movie was removed',200,['Content-Type' => 'application/json;charset=UTF-8']);
    }

    
    /* this method is use to search a movie */
    #[Route('/movie/{search}', name: 'search_movie', methods:['get'] )]
    public function searchMovie(EntityManagerInterface $entityManager,string $search): JsonResponse
    {           
        parse_str($search,$filter);        
        $movies = $entityManager->getRepository(Movie::class)->findMovie($filter);           
        return $this->json($movies,200,['Content-Type' => 'application/json;charset=UTF-8']);
    }


    /* this method allow you add a new director */
    #[Route('/streamming/director', name: 'new_director',methods:['post'])]
    public function newDirector(EntityManagerInterface $entityManager,Request $request,ValidatorInterface $validator): Response
    {       
        $director = new Director();
        $director->setName($request->request->get("name"));
        $director->setSurname($request->request->get("surname"));        
        $errors = $validator->validate($director);
        if (count($errors) > 0) {                     
            return $this->json($director,500,['Content-Type' => 'application/json;charset=UTF-8']);
        }
        $entityManager->persist($director);
        $entityManager->flush();        
        return $this->json($director,200,['Content-Type' => 'application/json;charset=UTF-8']);
    }

    /* this method allow you to assign a director to a movie */
    #[Route('/movie/{idmovie}/director/{iddirector}', name: 'add_moviedirector', methods:['post'] )]
    public function addDirector(EntityManagerInterface $entityManager, Request $request,int $idmovie,int $iddirector): JsonResponse
    {            
        $movie = $entityManager->getRepository(Movie::class)->find($idmovie);           
        if (!$movie) {
            return $this->json('We do not find the movie',404,['Content-Type' => 'application/json;charset=UTF-8']);                
        }   
        $director = $entityManager->getRepository(Director::class)->find($iddirector);   
        if (!$director) {
            return $this->json('We do not find the director',404,['Content-Type' => 'application/json;charset=UTF-8']);        
        }     
        $movie->setDirector($director);      
        $entityManager->persist($movie);
        $entityManager->flush();
        return $this->json('The director was loaded',200,['Content-Type' => 'application/json;charset=UTF-8']);
    }
}
