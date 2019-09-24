# Estelle HERIPRET - M2 E-Services

## Projet IFI - Application Web : Gestion d'articles

### Introduction
Ce projet a été réalisé par Estelle Héripret en Symfony 4.
Le but étant de réaliser un blog permettant la gestion d'articles.  
J’ai décidé ici de faire un blog présentant différents illustrateurs et dessinateurs que j’apprécie.
### Fonctionnalités
Dans ce projet la gestion d'articles a été réalisé, c'est à dire qu'il est possible
de voir la liste des articles, d'ajouter un article, d'éditer un article et de supprimer un article.    
Il est possible aussi de se connecter et de s'inscrire.  
Seul l'administrateur peut ajouter, modifier ou supprimer un article.
Un utilisateur connecté pourra voir son nom d'utilisateur et voir les articles.  
Un compte administrateur et un compte utilisateur sont prédéfinis.

Compte administrateur : 
    
    identifiant : admin
    mot de passe : admin
    
Compte utilisateur :

    identifiant : user_test
    mot de passe : test
    
    
### Installation
Avant de lancer le projet, il faut d'abord charger les articles 
prédéfinis avec la commande : 

    php bin/console doctrine:fixtures:load   
    
Ensuite on peut lancer le serveur avec la commande : 

    php bin/console server:run      

        
