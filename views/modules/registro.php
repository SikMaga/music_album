<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Registro Album</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }
        .bk-img{
            background: url("http://localhost/musica_test/img/beets-banner.png") no-repeat;
            background-size: contain;
            text-align: center;
            background-position: bottom;
        }
        h1.jumbotron-heading {
            font-size: 30px;
            color: #fff;
            background-color: #000;
            max-width: 60%;
            margin: auto;
            padding: 7px 0;
            font-family: fantasy;
        }
        .text-muted {
            color: #000!important;
            background: darkgray;
            max-width: 60%;
            margin: auto;
            padding: 5px 0;
        }
        p.total {
            background-color: darkorange;
            max-width: 100%;
            font-weight: bold;
            padding: 3px 16px;
            text-align: center;
            margin-bottom: 0;
            margin-right: 25px;
        }
        a.btn.btn-primary.my-2 {
            margin: 36px 0!important;
            font-size: 20px;
            font-family: fantasy;
            letter-spacing: 0.5px;
        }
        .cont-total {
            float: right;
        }
        .album.py-5.bg-light {
            clear: both;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../../css/album.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted"></p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <a href="index.php?action=tablas"><h4 class="text-white">Tabla de Álbumes</h4></a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2" focusable="false" aria-hidden="true"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Album</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">

    <section class="jumbotron text-center bk-img">
        <div class="container">
            <h1 class="jumbotron-heading">Álbum de Música</h1>
            <p class="lead text-muted">Crea una biblioteca de musica agrega un nuevo album.</p>
            <p>
                <a href="index.php?action=ingresar" class="btn btn-primary my-2">Agregar Album</a>
            </p>
        </div>
    </section>
    <div class="cont-total"><p class="total">Total de Álbumnes: <?php $contador = new MvcController(); $contador -> contadorAlbumController(); ?></p></div>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php $respuesta = Datos::vistaAlbumModel("tb_reg_album"); foreach($respuesta as $row => $item) { ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                        <div class="card-body">
                            <p class="card-text"><strong>Banda:</strong> <?php echo $item["Banda"] ?></p>
                            <p class="card-text"><strong>Titulo:</strong> <?php echo $item["TituloAlbum"] ?></p>
                            <p class="card-text"><strong>No. Canciones:</strong> <?php echo $item["NumeroDePistas"] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <?php } ?>
            </div>
        </div>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>

<?php
$mvc = new MvcController();
$mvc ->registroAlbumController();


?>