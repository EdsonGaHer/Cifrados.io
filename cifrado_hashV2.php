
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form.css">
    <link rel="stylesheet" href="style_table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <title>Cifrado HASH - V2</title>
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
        <h1>Cifrado HASH - V2</h1>
        <input type="text" name="name" placeholder="Nombre">
        <input type="text" name="direccion" placeholder="direccion ">
        <input type="password" name="contraseña" placeholder="Contraseña">

        <input type="submit" name="register_hashv2">
    </form>
    
    <?php
    
    include("aes.php");
    ?>

    <div><br>
    
        
        <table  >
            <tr>
                <thead>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                
                <th scope="col">Direccion</th>
                <th scope="col">Contraseña</th>



            </tr>
            </thead>
            <tbody>
            <tr>

            <?php

            while($mostrar=mysqli_fetch_array($resultadohash_v2 )){

            

            ?>
                <th scope="row"> <?php echo $mostrar ['id']?> </th>
                <td scope="row"> <?php echo $mostrar ['nombre'] ?> </td>
                <td scope="row"> <?php echo $mostrar ['direccion'] ?> </td>
                <td scope="row"> <?php echo $mostrar ['Contraseña'] ?> </td>
            
              </tr>
            </tbody>
            <?php
            }

            ?>
        </table>
      
    </div>
    


</body>

</html>