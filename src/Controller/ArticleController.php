<?php
/**
 * Created by IntelliJ IDEA.
 * User: Estel
 * Date: 18/01/2019
 * Time: 19:02
 */
namespace App\Controller;


use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    public function index(EntityManagerInterface $em)
    {
        $articles = $em->getRepository(Article::class)->findAll();

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}

