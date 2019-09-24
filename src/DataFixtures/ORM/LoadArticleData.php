<?php
/**
 * Created by IntelliJ IDEA.
 * User: Estel
 * Date: 23/01/2019
 * Time: 11:30
 */

namespace App\DataFixtures\ORM;


use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadArticleData extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $articleun = new Article();
        $articleun->setTitle('Sara Faber : Illustratrice et Artiste indépendante');
        $articleun->setImage('sarafaber.jpg');
        $articleun->setDescription("Sara Faber est une illustratrice et une artiste indépendante. Elle habite
        à Berlin. Elle crée des illustrations basées sur les thèmes : style de vie saine, aliments et plantes.
        Elle filme aussi des vidéos de son travail pour Youtube. Récemment Sara Faber a lancé une page Patreon
        où elle partage des tutoriels d’art, des croquis, envoit des goodies mensuels, etc ...
        Vous pouvez la suivre sur son site : https://www.sara-faber.com/");
        $manager->persist($articleun);

        $articledeux = new Article();
        $articledeux->setTitle('Maliki : le phénomène français');
        $articledeux->setImage('maliki.jpg');
        $articledeux->setDescription("Chaque semaine depuis 2004, Maliki publie sur son blog maliki.com, 
        avec l’aide de Becky, une petite BD en rapport avec leur vie quotidienne. Elle y aborde des sujets qui lui 
        tiennent à cœur, comme par exemple, quel est le lien entre les chats et la bataille navale ? 
        Qu’est-ce que l’Univers ? La pulpe dans le jus d’orange est-elle une hérésie ? 
        Ça peut être tout et n'importe quoi. 
        La seule règle, c'est qu'il n'y a pas de règle !
        Au quotidien, elle vit dans un petit village breton avec toute sa petite tribu : Becky, Fang, qui est un peu 
        comme sa fille adoptive, Luma, Fëanor, et Arya ses trois chats, ses poules, ses axolotls, ainsi que de nouveaux
        venus.
        En 2007, elle est sortie pour la première fois de l'internet et a publié son recueil en version papier chez 
        Ankama, où elle a travaillé plusieurs années sur les univers de Dofus et Wakfu.
        Par la suite, ell a publié 6 autres tomes de BD, un artbook et un one shot, toujours chez Ankama Editions.
        Peu à peu, elle a eu envie d'étendre davantage son petit monde, et elle s'est lancée dans le roman, 
        avec deux livres publiés chez Bayard Jeunesse : Maliki, \"L'autre fille dans le miroir\" , \"L'esprit empoisonné\"
        et \"Des milliers de murmures\".
        Enfin, j'ai autorisé Souillon, son fidèle larbin, à réaliser un oneshot sur ses années post-ado, \"Hello Fucktopia\".
        ");
        $manager->persist($articledeux);

        $articletrois = new Article();
        $articletrois->setTitle('Sorina-chan : Illustratrice freelance');
        $articletrois->setImage('sorina.jpg');
        $articletrois->setDescription("Après avoir terminé ses études en Graphisme et Cinéma d'Animation à Marseille,
        Sorina-chan alias Sorina s'installe comme illustratrice freelance en Bretagne.
        Elle est en collaboration avec le Joueur du Grenier pour lequel elle réalise des dessins pour ses vidéos
        et pour ses autres émissions notamment Aventures sur la chaîne Bazar du Grenier.
        Elle est passionnée par les dessins traditionnels et digitaux avec un style manga et Art Nouveau.
        Vous pouvez retrouver ses oeuvres sur facebook : http://www.facebook.com/SorinaChanArt ou sur instagram : 
        https://www.instagram.com/sorina.chan/");
        $manager->persist($articletrois);

        $articlequatre = new Article();
        $articlequatre->setTitle('Rann: Illustratrice et dessinatrice de bande dessinée');
        $articlequatre->setImage('rann.jpg');
        $articlequatre->setDescription("Rann, alias Bérengère Autechaud, est une artiste française ayant 
        commencé en oeuvrant dans le fanzinat.
        Memento Mori est sa première bande dessinée professionnelle édité chez Tonkam qui est une libre réinterpréation 
        du conte de la Belle et la Bête.
        Elle a fait un bac technique à Charles-Coulomb avant de s'orienter vers des études de graphisme à Paris.
        Elle est aussi connue sur internet, peu après ses débuts sur le site Deviantart, en 2005 pour sa version et 
        gothique d'Alice aux Pays des Merveilles nommée \"X Down\".
        Très prolifique, elle aime varier les supports avec notamment deux webcomics \"Yokai Day\" et \"Pink+Black\", 
        un Boy's Love game nommé \"Superbia\". 
        Son trait original est facilement reconnaissable par le détail et soins apportés à ses illustrations, l'élégance
        gothique ainsi que des ambiances de couleurs travaillées.
        Elle travaille actuellement sur sa prochaine BD nommée : Beyond Valhalla.
        Vous pouvez retrouver ses BD, ses illustrations et pleins d'autres choses sur son site poisoncage.com ou encore 
        sur son deviantart : https://www.deviantart.com/rann-poisoncage/");
        $manager->persist($articlequatre);

        $articlecinq = new Article();
        $articlecinq->setTitle('Rodrigo Gonzalez : Illustrateur et designer');
        $articlecinq->setImage('rodgon.jpg');
        $articlecinq->setDescription("Rodrigo Gonzalez est un illustrateur et designer professionnel américain. 
        Il travaille en Californie à San Diego.
        Vous pouvez le retrouver sur youtube à l'adresse : https://www.youtube.com/c/rodgontheartist ou sur instagram :
        https://www.instagram.com/rodgontheartist/");
        $manager->persist($articlecinq);

        $manager->flush();

    }
}