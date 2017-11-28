# Questions à se poser en groupe lundi

## Dans l'énoncé de l'exercice

````code
Chaque image est décrite par :

le fichier image en lui-même
un titre (obligatoire)
une description (facultative)
la date d'ajout (obligatoire et automatiquement ajouté par mysql à la création)
le nom de l'uploader (facultatif)
````

Le nom de l'uploader est facultatif, il faut donc lié les images de l'uploader à son id et non à son nom pour pouvoir afficher les images qui appartienne à un uploader particulier pour les supprimer ou les upgrader.


## Dans l'énoncé de l'exercice

````code
Chaque image est décrite par :

le fichier image en lui-même
un titre (obligatoire)
une description (facultative)
la date d'ajout (obligatoire et automatiquement ajouté par mysql à la création)
le nom de l'uploader (facultatif)
````

Il faut faire un test sur le formulaire d'upload de l'image pour le champ description (pour éviter que celle-ci ne dépasse un certains nombres de caractères pour éviter les tartines de texte), idem pour le la longueur des titre.


## Dans l'énoncé de l'exercice

````code
formulaire d'upload en html sémantique
sécurité: limiter l'upload uniquement aux formats d'images les plus courants (jpg, jpeg, png, gif, WebP)
upload fonctionnel (référence)
````

Bien vérifier que l'upload fonctionnel respecte les instruction fournie dans la référence (https://www.w3schools.com/php/php_file_upload.asp)

En plus de limiter les format de téléchargement des images, il faudra veiller à limiter la taille maximale des images en terme de dimension et de poids.

Il faudra dans l'idéal optimiser pour le web avec photoshop les images que l'on aura déja uploader sur la base de données pour en limiter le poids au maximum. Est-ce qu'un script de prétraitement des images avant l'insertion dans la base de données serait réalisable pour réduire le poids des images en limitant la déterioration de la qualité lié à la compression (convertion auto en jpg ou autres?)

## Dans l'énoncé de l'exercice

````code
l'écran d'accueil présente les vignettes clicables des X dernières images
````

Serait-il possible de mettre en place un système de lightbox affichant l'image en grand (comme dans pinterest) lors du clic sur l'image.

Il est nécessaire de mettre en place un systeme type lightbox ou page d'affichage à 100% car même un utilisateur non enregistré ou enregistré doit avoir la possibilité de visualiser l'image à 100% (en grand) même si ce n'est pas lui qui l'a uploader. Donc une simple redirection vers l'écran d'administration ne convient pas pour ce type d'affichage.




