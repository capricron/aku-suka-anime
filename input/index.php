<?php

    require '../functions/input_data.php';

    if(isset($_POST['submit'])){
        // $gambar = $_POST['poster'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $rating = $_POST['rating'];
        $status = $_POST['status'];

        if($nama == "" OR $deskripsi == "" OR $rating == ""){
            echo "<script>alert('data gak boleh kosong') </script>";
        }else{
            input_data_anime($nama, $deskripsi, $rating, $status);
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formFile" class="form-label">Masukkan Poster Anime</label>
            <input class="form-control" name="poster" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Anime</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama anime">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Deskripsi Anime</label>
            <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Rating Anime</label>
            <input type="number" name="rating" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan rating anime">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Status Anime</label>
            <select name="status" id="">
                <option value="1">Selesai</option>
                <option value="0">Ongoing</option>
            </select>
        </div>
        <div>
            <button name="submit" class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>