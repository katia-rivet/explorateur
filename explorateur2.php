<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="description de la page">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

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

            <table class="table table-striped">
            <th>
                <tr>
                    <td>Nom</td>
                    <td>Taille</td>
                    <td>Date</td>
                </tr>
            </th>
            <tbody>
            <?php
                include('fonction.php');

                if (isset($_GET['dir'])){
                    $dir = $_GET['dir'];
                } else {
                    $dir = './';
                }
                
              

                foreach (new DirectoryIterator($dir) as $fileInfo) {
                    if($fileInfo->isDot("./")) continue;

                        if ($fileInfo ->isDir()){
                        echo "<tr><td><a href='?dir=".$dir ."/" . $fileInfo->getFilename() ."'>" . $fileInfo->getFilename();"</a></td>";
                        echo "<td>". formatSizeUnits(filesize($fileInfo)) . "</td>";
                        echo "<td>". date ("F d Y H:i:s.", $fileInfo->getMTime())  ."</td></tr>";
                         
                        }
                        if ($fileInfo ->isFile()){
                            echo "<tr><td><a href='".$dir ."/" . $fileInfo->getFilename() ."'>" . $fileInfo->getFilename();"</a></td>";
                            echo "<td>" . formatSizeUnits(filesize($fileInfo)) . "</td>";
                            echo "<td>". date ("F d Y H:i:s.", $fileInfo->getMTime()) ."</td></tr>";
                        }
                    }
     
                echo "";

            ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

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