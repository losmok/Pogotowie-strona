<?php 
        $con = new mysqli('localhost','root','','ee09');
        if (isset($_POST['dodaj'])) {
            $karetka = $_POST['karetka'];
            $ratownik1 = $_POST['ratownik1'];
            $ratownik2 = $_POST['ratownik2'];
            $ratownik3 = $_POST['ratownik3'];
            $zapytanie = "INSERT INTO ratownicy (nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ('$karetka', '$ratownik1', '$ratownik2', '$ratownik3')";
            mysqli_query($con,$zapytanie);
        }
        mysqli_close($con)
    ?>