<?php

namespace App\Controller;

use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    /**
     * @Route("/", name="app_posts")
     */
    public function index(PostsRepository $postsRepository): Response
    {
        //return value;
        return $this->render('posts/index.html.twig', [
            'posts' =>$postsRepository->findAll(),
        ]);
    }
}
