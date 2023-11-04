<?php
    require './functions/get_data.php';
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
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div>
                <a href="/">
                    <img src="./images/logo/logo.png" alt="">
                </a>
            </div>
            <div class="d-flex" role="search">
                <a href="input">
                <button class="btn btn-outline-success" type="submit">+ Tambah Anime</button>
                </a>
            </div>
        </div>
    </nav>
    <div class="text-center" style="margin-top: 10px;">
        <div class="row" style="background-color: grey;">
            <div class="col">
            Id
            </div>
            <div class="col">
            Gambar
            </div>
            <div class="col ">
            <p class="text-center">Nama</p>
            </div>
            <div class="col">
            Deskripsi
            </div>
            <div class="col">
            Status
            </div>
            <div class="col">
            Action
            </div>
        </div>

        <?php foreach ($isiData as $anime) : ?>
            <div class="row">
            <?php
                 $kata_kata= explode(' ', $anime['deskripsi']);    
            ?>
            <div class="col"><?= $anime['id']; ?></div>
            <div class="col">
                <img src=".<?= $anime['gambar']; ?>" alt="">
            </div>
            <div class="col"><?= $anime['nama']; ?></div>
            <div class="col"><?= implode(' ', array_slice($kata_kata, 0, 10)) ; ?></div>
            <div class="col"><?= $anime['status']; ?></div>
            <div class="col">
                <button>Edit</button>
                <button>Delete</button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>