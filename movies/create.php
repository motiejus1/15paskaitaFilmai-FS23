<?php include("classes/movieDatabase-class.php"); ?>
<?php $movieDatabase = new MovieDatabase("filmai.json");  
      $movieDatabase->createMovie();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurti filmą</title>
</head>
<body>
<h1> Kurti filmą </h1>

<form method="POST">
    <input class="form-control" name="id" placeholder="ID"/>
    <input class="form-control" name="pavadinimas" placeholder="Pavadinimas" />
    <input class="form-control" name="aprasymas" placeholder="Aprašymas" />
    <input class="form-control" name="kategorija"  placeholder="Kategorija"/>
    <input class="form-control" name="paveiksliukas" placeholder="Paveiksliukas" />
    <button class="btn btn-primary" name="patvirtinti">Sukurti naują filmą</button>
</form>

</body>
</html>