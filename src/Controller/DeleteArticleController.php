<?php
/**
 * Created by IntelliJ IDEA.
 * User: Estel
 * Date: 14/02/2019
 * Time: 10:11
 */

namespace App\Controller;


use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DeleteArticleController
 * @package App\Controller
 * Controleur permettant la suppression d'un article
 */
class DeleteArticleController extends AbstractController
{
    /**
     * @Route("/suppression/{id}", name="suppression")
     */
    public function deleteArticle($id)
    {
        //Supprime l'article avec l'id : $id
        $em = $this->getDoctrine()->getManager();
        $articleRepo = $this->getDoctrine()->getRepository(Article::class);
        $article = $articleRepo->find($id);

        $em->remove($article);
        $em->flush($article);

        return $this->redirectToRoute('index');

    }

}