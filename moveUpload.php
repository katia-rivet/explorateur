<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="description de la page">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formulaire</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom CSS -->
    <style>

    </style>

</head>
<body>

    <!-- CONTENT START -->

    <div class="container">
        <div class="row">
            <div class="col-12">

                <form enctype="multipart/form-data" action="" method="post">
                    <input name="userfile" type="file" class="form-control">
                    <input type="submit" value="Envoyer le fichier" class="form-control">


                </form>

            </div>
        </div>
    </div>

    <?php

$uploaddir = './telechargements/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Le fichier est valide, et a été téléchargé avec succès.<br>"; 
    } else {
        echo "Attaque potentielle par téléchargement de fichiers.<br>";
    }

    echo 'Voici quelques informations de débogage :';
    print_r($_FILES);


    // if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    //     echo "File ". $_FILES['userfile']['name'] ." téléchargé avec succès.\n";
    //     echo "Affichage du contenu\n";
    //     readfile($_FILES['userfile']['tmp_name']);
    //  } else {
    //     echo "Attaque possible par téléchargement de fichier : ";
    //     echo "Nom du fichier : '". $_FILES['userfile']['tmp_name'] . "'.";
    //  }

    






    ?>







    <!-- CONTENT END -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>