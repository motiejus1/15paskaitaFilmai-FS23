<?php

include("classes/fileManager-class.php");

class MovieDatabase extends FileManager {

    public $movies;
    public $filePath;

    public function __construct($filePath){
        $this->filePath = $filePath;
        //FileManager - sitoje vietoje mes atsidarome filmai.json
        parent::__construct($this->filePath, "");
        $this->movies=$this->fileReadJsonToPhpArray();
        if(!isset($_GET["page"])) {
            foreach($this->movies as $filmas) {
                echo "<tr>";
                echo  "<td>".$filmas["id"]."</td>";
                echo  "<td>".$filmas["pavadinimas"]."</td>";
                echo  "<td>".$filmas["aprasymas"]."</td>";
                echo  "<td>".$filmas["kategorija"]."</td>";
                echo  "<td>".$filmas["paveiksliukas"]."</td>";
                echo   "</tr>";   
            } 
        }
    }

    public function createMovie() {

        if(isset($_POST["patvirtinti"])) {
            $movie = array(
                "id" => $_POST["id"],
                "pavadinimas" => $_POST["pavadinimas"],
                "aprasymas" => $_POST["aprasymas"],
                "kategorija" => $_POST["kategorija"],
                "paveiksliukas" => $_POST["paveiksliukas"],
            );
            
            $this->movies[] = $movie;
            $this->fileWriteJsonString($this->movies);
            header("Location: index.php");
        }
    }

    public function updateMovie() {
        
    }

    public function deleteMovie() {
        
    }

}

?>