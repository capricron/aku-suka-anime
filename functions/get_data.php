<?php

    include "./database/db.php";

    $sql = "Select * FROM anime";

    $datas = mysqli_query($connection, $sql);

    $isiData = [];

    while($data = mysqli_fetch_assoc($datas)){
        $isiData[] = $data;
    }

?>