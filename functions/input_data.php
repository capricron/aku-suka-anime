<?php

    require '../database/db.php';


    function input_data_anime($nama, $deskripsi, $rating, $status){

        global $connection;

        $sql = "INSERT INTO anime (nama, deskripsi, rating, status) VALUES ('$nama', '$deskripsi', '$rating', '$status')";

        $tes = mysqli_query($connection, $sql);

        echo $tes;

        if($tes){
            header("Location: ../index.php");
        }else{
            echo "<script>alert('gagal menambahkan data anime')";
        }
    }

?>