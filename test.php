<?php 

include("classes/fileManager-class.php");

$fileManager = new FileManager("filmai.json", "");



$filmai = [];
for ($i=0; $i<15; $i++) {
    $filmas = array(
        "id" => $i,
        "pavadinimas" => "Test".$i,
        "aprasymas" => "Test".$i,
        "kategorija" => "Kategorija".$i,
        "paveiksliukas" => "test".$i
    );
    $filmai[] = $filmas;
}

$fileManager->fileWriteJsonString($filmai);



?>