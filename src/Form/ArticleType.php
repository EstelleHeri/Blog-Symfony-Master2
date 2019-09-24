<?php
/**
 * Created by IntelliJ IDEA.
 * User: Estel
 * Date: 01/02/2019
 * Time: 14:50
 */

namespace App\Form;


use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, array(
                'attr' => array(
                    'placeholder' => "Titre de l'article",
                )
            ))

            ->add('description', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => "Ajoutez ici votre texte ...",
                    'rows' => "18",
                    'cols' => "100",
                )
            ))

            ->add('image', TextType::class, array(
                'required' => false,

                'attr' => array(
                    'placeholder' => "Nom de l'image",
                    'title' => "Ne fonctionne que avec les images présentes dans le dossier public/images.",
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Article::class,
        ));
    }
}