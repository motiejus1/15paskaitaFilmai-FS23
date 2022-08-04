<?php include("classes/movieDatabase-class.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmai</title>
</head>
<body>
    <h1> Filmai pagrindinis </h1>

    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Aprašymas</th>
        <th>Kategorija</th>
        <th>Paveiksliukas</th>
        </tr>
        <?php $movieDatabase = new MovieDatabase("filmai.json"); 
        ?>
    </table>

</body>
</html>