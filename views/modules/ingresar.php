<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agregar Album</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <style type="text/css">
        form.reg-album {
            width: 40%;
            text-align: center;
            margin: 30px auto;
            padding: 10px 20px;
            border: 2px solid #535353;
            display: block;
        }
        h1.titulo-album {
            text-align: center;
            padding: 20px 0;
            background: #525252;
            color: #fff;
            font-family: fantasy;
        }
    </style>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
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
<h1 class="titulo-album"><a href="index.php"><img src="http://localhost/musica_test/img/home-btn.png" style="width: 40px; height: 40px;"></a> Ingresa los datos para agregar tu Album</h1>
<form method="post" class="reg-album">
    <div class="form-group">
        <label for="titulo">Titulo del Album:</label>
        <input type="text" name="titulo" class="form-control" id="titulo" required>
    </div>
    <div class="form-group">
        <label for="pwd">Activo:</label><br>
        <input class="form-check-input" type="radio" name="activo" value="si">Si<br>
        <input class="form-check-input" type="radio" name="activo" value="no">No
    </div>
    <div class="form-group">
        <label for="pwd">Banda:</label>
        <input type="text" name="banda" class="form-control" id="banda" required>
    </div>
    <div class="form-group">
        <label for="pwd">No. de pistas:</label>
        <select name="pistas" class="form-control" id="pistas" required>
            <option value="null">-- Selecciona --</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
            <option value=6>6</option>
            <option value=7>7</option>
            <option value=8>8</option>
            <option value=9>9</option>
            <option value=10>10</option>
            <option value=11>11</option>
            <option value=12>12</option>
            <option value=13>13</option>
            <option value=14>14</option>
            <option value=15>15</option>
            <option value=16>16</option>
            <option value=17>17</option>
            <option value=18>18</option>
            <option value=19>19</option>
            <option value=20>20</option>
        </select>
    </div>
    <div class="form-group">
        <label for="pwd">Contenido adicional</label>
        <textarea name="adicional" class="form-control" id="adicional" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>


<?php
$mvc = new MvcController();
$mvc ->registroAlbumController();
?>