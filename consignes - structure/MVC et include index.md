# Principes global MVC et include dans index.php

Fichier index.php contient: 

## 3 possibilité de header selon les pages

**Page acceuil utilisateur non connecté (header.php)**
include -> header.php (logo, search, bouton "s'inscrire", bouton "se connecter")

**Page acceuil utilisateur connecté (header_admin.php)**
include -> header_admin.php (logo, search, bouton "Ajouter", "supprimer", "modifier", "se deconnecter")

**Autres pages (login.php, signin.php, logout.php, 404.php)**
include -> nav.php (logo, se déconnecter)


## MVC

include -> router.php (gère l'affichage MVC des différentes views)

Switch (affichage des différentes views selon la page à afficher)

* main.php
* signin.php
* login.php
* 404.php (defaut)


## Footer

footer.php - identiques pour toutes les pages
