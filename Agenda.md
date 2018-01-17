# Agenda

## lundi 20 novembre 2017:

**Marie-Ange**

* Création du répository GitHub "projet-pinterest"
* Coordinatrice Project Board et lieutenant repo
* Mise en place de l'animation des "petits papiers"
* Création d'une branche à son nom dans le repo en plus de la master
* Mise en place sur papier avec l'équipe des l'arborescence, noms de dossiers et fichiers, DB et champs DB et conventions de nommage.
* Création d'un fichier balsamiq et d'un document md reprenant structure générale du site et de la DB
* Création des fichiers de l'arborescence dans le repo avant clone par les autres membres du groupe
* Envoi des demandes d'ajout de tous les membres comme collaborateurs au repo principal.
* Révision en équipe de la structure de l'arborescence et modification de l'arborescence dans le repo
* Atttribution en équipe des tâches à effectuer en priorité.

**Vincent**

* Mission de Front-End, création de branche personnelle, accord avec l'équipe, accepter les tâches données...
* Etude des consignes données par Marie-Ange sur forum privé propre à l'équipe sur Ryver, pour se conformer aux demandes de Marie-Ange.
* Bilan noté dans la rubrique plus bas à la date du mercredi 29 décembre.

**Kevin:**

* Arrivé en retard mise à niveau du projet avec le reste de mon équipe gestion du repo et attribution de tâches. 


**Nicolas**

* Mise en place du projet et répartition des différentes taches.
* Analyse des objectifs, prises de décisiont sur mes propres objectifs.


## mardi 21 novembre:**

**Marie-Ange**

* Ajout fichier css et js et link avec fichiers php
* Ajout page 404.php
* Ajout balises html unifiée head sur toutes les views
* Ajout dossier db et export DB local phpMyAdmin
* Préparation et ajout fichier login et signin
* Explication à Vincent formulaires signin, login et vérification frontend en javascript
* modif dans tous les fichiers des chemins css et js à présent placés dans views/assets/css
* Implantation de bootstraap car requis pour certaines solutions d'affichage en grille des images à tester



**Vincent**

* Mission en cours sur HTML-CSS.

**Kevin:**

* Création des difféerents controller php POO UserController image controller et les modeles premier push échouer car master écrasée. 


**Nicolas**

* lancement du projet
* Travail sur les premières pages views
* Création des formulaires, choix de la charte graphique


## mercredi 22 novembre:**

**Marie-Ange**

* Vérification et repassage sur le code formulaire Vincent login signin avec Nicolas
* Ajout mise en forme formulaires via style.css en parallèle avec Nicolas
* Aprsè concertation avec Nicolas, on garde sa version plus épurée et la charte graphique qu'il a utilisé pour les formulaires signin et login.
* Ajout d'un fichier md contenant la nouvelle charte graphique, couleurs, polices utilisées par Nicolas
* Commit et merge unes à unes, résolution de conflits de toutes les branches pour obtenir master unifiée
* Vérification et repassage sur le code formulaire Vincent login signin avec Nicolas
* Ajout mise en forme formulaires via style.css en parallèle avec Nicolas
* Après concertation, on garde la version de Nicoloa plus épurée et la charte graphique qu'il a utilisé pour les formulaires signin et login.
* Ajout d'un fichier md contenant la nouvelle charte graphique, couleurs, polices utilisées par Nicolas
* Commit et merge unes à unes, résolution de conflits de toutes les branches pour obtenir master unifiée
* Mise à niveau fonctionnement POO et MVC grâce à la veille de Kevin et Kevin

**Vincent**

* Le projet a été interrompu pour ce jour.
* Ce Mercredi : tout le monde à stoppé le projet pour prendre les explications des professeurs sur le fonctionnement de la PHP-POO (Php Orientation Objet). Exercices toutes la journée.

**Kevin:**

* Mise au point avec l'équipe pour remise à niveaux du du cours POO PHP  
* le projet était trop avancé pour certain et ce qui a causé un manque de motivation générale. 


**Nicolas**

* Cours sur la poo.


## jeudi 23 novembre:**

**Marie-Ange**

* Matinée d'exercices pour mise à niveau de tous les apprenants en POO pour avancer sur les projets
* Après-midi :  Mise en place et connexion DB Heroku
* Injection de données dans la DB Heroku pour tester connexion (OK)


**Vincent**

* Reprise de la mission; Recherches éléments pour réaliser mission

**Kevin:**

* Après remise à niveau il y a eu une meilleur compréhension au niveaux de la POO. 
* connexion à la bas de données ok inscription utilisateur et login ok push en fin de journée travaillé a caus d'un push sur la master. 


**Nicolas**

* Travail générale sur le projet



## vendredi 24 novembre:**

**Marie-Ange**

* Matinée installation de différents logiciels de visualisation de la DB Heroku en PostgreSQL (SQLelectron,Pgadmin, etc...). Après 4 essais de logiciels différents, le logiciel Adminer fonctionne enfin et me donne accès visuellement à la DB sur Heroku pour pouvoir commencer test CRUD dans la DB
* Switch Front-end - Backend:
* Brief de Kevin sur la structure MVC, controller et models utilisées sur le projet
* Rennomage et restructuration tables et champs en fonction des noms utilisés dans le code controller et models.
* Essai de requêtes SQL pour opération CRUD directement sur la DB Heroku (problème de connexion), essai avec DB local
* Problèmes rencontrés dans la gestion du repo (merge, push, etc... - perte de données)
* Merge de chacunes des branches unes par unes, résolution des conflits pour repartir sur une master saine et identiques pour tous avant le weekend.


**Vincent**

* Suite de la mission

**Kevin:**

* Recommencer le travail perdu la veille. Connexion pgsql avec HEROKU beaucoup d'erreur et gros manque de communication de notre part. 


**Nicolas**

* Travail générale sur le projet


## lundi 27 novembre:**

**Marie-Ange**

* Bref explication des media queries à Vincent (par forum) et ajout d'un fichier md d'unification des points de rupture pour toutes les parties du projets au niveau des medias queries
* Essai dans différents repos séparés de solution d'affichage layout en grille des images comportant titre et descripton. (snippets( html,css, js), isotope (impliquant install node.js, bower, npm, ...),mansonry responsive grid, et enfin mansonry)
* L'affichage avec Mansonry (https://masonry.desandro.com/) fini par fonctionner.
* Mise en forme html / css de l'affichage de la grille image responsive dans repo séparé, mise en place d'effet de survol
* Téléchargement et lien d'une grande série d'images pour tester affichage et pagination. (attention images non optimisées - pour permettre un recadrage et affichage sous forme de vignette ultérieur)
* Essai de requêtes SQL pour opération CRUD directement sur la DB Heroku (problème de connexion)
* Problèmes rencontrés dans la gestion du repo (merge, push, etc... - perte de données)
* Update database Heroku (renommage tables et champs)


**Vincent**

* Suite mission

**Kevin:**

* Les fichiers on de nouveau été écrasé grosse baisse de motivation. Le recommencer a chaques fu pénible.  


**Nicolas**

* Travail générale sur le projet


## mardi 28 novembre:**

**Marie-Ange**

* Reglage de détails affichage grille image et envoi sur master du projet pinterest pour que Nicolas puisse l'intégrer dans le MVC.
* Ajout d'un fichier md d'unification des points de rupture pour toutes les parties du projets au niveau des medias queries.
* Modification formulaire signup.php (retire champ mail) et adaptation DB
* Essai requête SQL CRUD directement sur DB Heroku
* Ajout lien sur bouton inscription et connexion dans header
* Création papier d'une vingtaines de logos et choix avec l'équipe de celui retenu.
* Vectorisation du logo et choix de polices et enregistrement au différents formats pour usage sur site ou webapp.
* Création du package favicon , importation dans le repo et application du favicon de notre logo à la page heroku




**Vincent**

* Le formateur intervient et me conseille de découvrir Bootstraps, un logiciel en ligne qui permet de réaliser du Web Responsive selon la taille des écran (écran de PC, ou de Tablette ou de GSM), ce qui intègre un meilleur Media Querie que ce qui m'a été conseillé.
* En moins de 24h je reconfigure intégralement mon travail sur une méthode moderne.

**Kevin:**

* Gestion de l'applicaiton en ligne affichage des images sans base de données car fichier image model écrasé reprise avec masonry 


**Nicolas**

* Derniere tentative de liaison MVC (infructueuse)
* Révision des pages views finition des liens


## mercredi 29 novembre:**

**Marie-Ange**

* Ajout logo au header du site
* Modif des chemin relatif vers les feuilles de style CSS de toutes les views
* Création d'un fichier balsamiq avec la structure actuelle, les conventions de nommages et la structure DB Heroku actuelle.
* Formation pour coaching initiation au code pour enfants organiser chez BECODE l'après-midi
* Toute l'après-midi: installation et encadrement des enfants venus faire initiation au code chez BECODE en partenariat avec CoderDojo.


**Vincent**

* Travail terminé sur les header et footer sur l'utilisation de Bootstraps en modifiant intégralement tous les fichiers Bootstraps pour correspondre au media querie aux formats choisi par Marie-Ange et aussi aux emplacements choisis par elle.
* Point remarquable : Mont travail a été réalisé en respectant à la fois les consignes de Marie-Ange et de l'utilisation d'un logiciel inconnu recommandé par mon formateur 24 heures plus tôt. 

**Kevin:**

* Travail terminé... Dead line mauvaise gestion. Mais je crois avoir beaucoups appris quand même. 


**Nicolas**

*. Débrief générale mise au point du site pour rendu finale.
