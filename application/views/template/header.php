<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('vendor/css/style.css'); ?>">
   <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?= base_url('vendor/icon/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/owl/dist/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/owl/dist/assets/owl.theme.default.min.css'); ?>">

    <style>
      body {
        background-color: white;
      }
      i {
        color: white;
      }

      .star {
        color: #FFD700;
      }

      .item img {
        height: 240px;
        width: 305px;
      }

      .list-group-item {
          font-weight: bold;
      }

      .info {
        background-color: white;
      }

      .figure img {
        width: 125px;
        height: 100px;
        border-radius: 50%;
        margin-right: 10px;
      }

      h5.born::before {
        content: "";
        border-left : 3px solid #FFD700;
        width: 4px;
        margin-right: 10px;
      }

      h5.born {
        color: white;
       
      }

      .figure-caption h5
      {
        margin-top: 10px;
        font-size: 15px;
      }

      p.news::before {
        content: "";
        border-left : 3px solid #FFD700;
        width: 4px;
        margin-right: 10px;
      }

      p.news{
        font-size: 18px;
      }

      h5.tren{
        color: #121212 !important;
      }



    </style>
    <title>RfCondet</title>
  </head>
  <body>
   
		<!-- navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
        <img id="logo" src="<?= base_url('vendor/gambar/logo.jpeg'); ?>" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link  text-warning" id="home" href="<?= base_url('Home'); ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link text-warning" id="more" href="<?= base_url('More'); ?>">More Film</a>
          <a class="nav-item nav-link btn btn-warning" href="<?= base_url('Auth'); ?>" style="font-weight: bold;">Login</a>
          
        </div>
      </div>
      </div>
    </nav>