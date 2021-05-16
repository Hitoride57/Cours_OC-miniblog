# Cours_OC-miniblog
TP openclassrooms - PHP - Miniblog

Détails du TP : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/6964512-tp-un-blog-avec-des-commentaires

Vérifiez le fichier var_set.php dans le dossier includes pour confirmer votre base de données et vos tables

Détails de la structure des tables :
- Champs pour la table des articles ('billets' par défaut) :
    - id (int, primary, AI)
    - auteur (varchar 255)
    - titre (varchar 255)
    - contenu (text)
    - datecreation (datetime)

- Champs pour la table des commentaires ('commentaires' par défaut) :
    - id (int, primary, AI)
    - id_billet (int)
    - auteur (varchar 255)
    - commentaire (text)
    - date_commentaire (datetime)