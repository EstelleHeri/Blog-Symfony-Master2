<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AddArticleController
 * @package App\Controller
 * Controleur permettant la création d'un article
 */
class AddArticleController extends AbstractController
{
    /**
     * @Route("/add/article", name="add_article")
     */
    public function add_Article(Request $request)
    {
        $article = new Article();

        //Creation du formulaire
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Enregistre l'article en base
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render(
            'add_article/addarticle.html.twig',
            array('form' => $form->createView())
        );
    }
}
