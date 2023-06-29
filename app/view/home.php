<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
        <a href="/php-mvc/home/logout" class="btn btn-primary ml-2">Cerrar sesión</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1>Bienvenido a la página de inicio</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan libero nec quam varius, nec vestibulum tortor laoreet. Suspendisse volutpat libero ac tortor fermentum, non varius orci interdum.</p>

    <div class="container bg-primary">
      <table class="table">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
        </tr>
        <?php
          while ($row = $datos->fetch_assoc()) {?>
            <tr>
              <td><?php echo  $row['id']; ?></td>
              <td><?php echo  $row['nombre']; ?></td>
              <td><?php echo  $row['user']; ?></td>
              <td><?php echo  $row['pass']; ?></td>
            </tr>
          <?php  
          }  
        ?>
      </table>
    </div>
    <div class="container text-center">
      <h2>Registrar usuario</h2>
      <form action="home/add" method="post">
        <input type="text" name="nombre" placeholder="Ingr. nombre" class="form-control m-3"/>
        <input type="text" name="user" placeholder="Ingr. usuario" class="form-control m-3"/>
        <input type="text" name="pass" placeholder="Ingr. contraseña" class="form-control m-3"/>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
    

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
