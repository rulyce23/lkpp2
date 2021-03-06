<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php base_url('/assets/template/tema/css/') ?>style.css">

    <link rel="icon" href="img/PaketKu.png" sizes="16x16">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">
      <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/PaketKu.png" width="45" class="d-inline-block align-top">
        
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse float-right" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
           <h4><font color="white">CEK RESI</font></h4>
          </li>
          
        </ul>
      </div>
    </div>
    </nav>

    <div class="container mt-5" id="main">
        <div class="shadow p-3 bg-white rounded">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="awb" placeholder="Silahkan Masukkan No.Resi" id="awb-input" autofocus>
                  </div>
            </div>
            <div class="col-md-2">
                <select class="form-control courier" name="courier" id="courier">
                    <option value="jne">JNE</option>
                    <option value="pos">POS</option>
                    <option value="jnt">J&T Express</option>
                    <option value="sicepat">SiCepat</option>
                    <option value="tiki">TiKi</option>
                    <option value="anteraja">Anter Aja</option>
                    <option value="wahana">Wahana Express</option>
                    <option value="ninja">Ninja Express</option>
                    <option value="lion">Lion Parcel</option>
                    <option value="spx">Shopee Express</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-6">
            <button class="btn btn-info" type="button" id="search-button">Cari Data</button>
          </div>
        </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-10 info">
                
            </div>
        </div>
    </div>

        
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="js/aos.js"></script>
	
    <script src="js/script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
