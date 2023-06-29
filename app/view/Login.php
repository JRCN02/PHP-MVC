<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/login.css">
  <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-5">
        <h2 class="text-center">Inicio de sesión</h2>
        
        <form method="post" action="login/check">
          <div class="form-group">
            <label for="text">Usuario:</label>
            <input type="text" class="form-control" name="user" placeholder="Ingresa tu usuario" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

