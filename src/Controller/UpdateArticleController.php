<?php
/**
 * Created by IntelliJ IDEA.
 * User: Estel
 * Date: 14/02/2019
 * Time: 10:55
 */

namespace App\Controller;


use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UpdateArticleController
 * @package App\Controller
 * Controleur permettant l'édition d'un article
 */
class UpdateArticleController extends AbstractController
{

    /**
     * @Route("/edition/{id}", name="edition")
     */
    public function updateArticle($id, Request $request)
    {
        //Edite l'article dans un formulaire avec l'id : $id
        $em = $this->getDoctrine()->getManager();
        $articleRepo = $this->getDoctrine()->getRepository(Article::class);
        $article = $articleRepo->find($id);

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render(
            'add_article/addarticle.html.twig',
            array('form' => $form->createView())
        );
    }
}