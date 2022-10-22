

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form.css">
    <link rel="stylesheet" href="style_table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <title>Cifrado AES</title>
</head>

<body>
<div class="menu">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cifrado_rsa.php">Cifrado asimétrico RSA/DSA</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cifrado_hashV1.php">Hash V1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cifrado_hashV2.php">Hash V2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cifrado propio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="avisodeprivacidad.php">Aviso de privacidad</a>
        </li>
      </ul>
    </div>
  </div></nav>

</div><br>
    <form method="post">
        <h1>Cifrado AES</h1>
        <input type="text" name="name" placeholder="Mensaje a encriptar">
        <input type="text" name="direccion" placeholder="direccion a encriptar">

        <input type="submit" name="register">
    </form>
    <h1>mensaje desifrado</h1>
    <?php
    
    include("aes.php");
    ?>

    <div><br>
    
        
        <table  >
            <tr>
                <thead>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE COMPLETO</th>
                
                <th scope="col">direccion</th>



            </tr>
            </thead>
            <tbody>
            <tr>

            <?php

            while($mostrar=mysqli_fetch_array($resultadoMensaje )){

            

            ?>
                <th scope="row"> <?php echo $mostrar ['id']?> </th>
                <td scope="row"> <?php echo $mostrar ['mensaje'] ?> </td>
                <td scope="row"> <?php echo $mostrar ['direccion'] ?> </td>
            
              </tr>
            </tbody>
            <?php
            }

            ?>
        </table>
      
    </div>
    

    <form method="post">
        <h1>Descifrado AES</h1>
        <input type="text" name="name" placeholder="Mensaje a desencriptar">

        <input type="submit" name="ver">

       
    </form><br>
    <form >
       
        
    </form>

    <b><i></i></b>

</body>

</<<html>