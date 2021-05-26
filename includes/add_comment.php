<?php

// Voir si amélioration nécessaire : la date correspond à l'insertion dans la base, pas au moment réel du post par l'utilisateur

if (isset($_POST['nv_commentaire'])) {
    $add_comment = $db_miniblog->prepare('INSERT INTO ' . $table_commentaires . '(id_billet, auteur, commentaire, date_commentaire) VALUES (:id_billet, :auteur, :commentaire, NOW())') or die(print_r($db_name->errorInfo()));

    $add_comment->execute(array(
        'id_billet' => $_POST['id_billet'],
        'auteur' => $_POST['pseudo'],
        'commentaire' => $_POST['nv_commentaire'],
        ));

    $add_comment->closeCursor();
}

?>