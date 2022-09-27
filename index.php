<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al panel</title>
    <link rel="stylesheet" href="public/css/main.css" >
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  

    <div class="container">
      <section>
        <div class="row justify-content-md-center">
          <div class="col-lg-4 col-md-6 col-sm-12">
 
          <div class="text-center">
            <h1>Acceso al panel</h1>
          </div>
          <div class="col-8">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing
               elit. Alias ex accusantium cumque, quod veniam porro 
               ipsa. Repellat quasi, iure esse ea totam nam voluptatem
                repudiandae quod, sapiente sit voluptatibus dignissimos?
            </p>
            <br>
            <form method="post" action="app/Auth.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Correo</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <input type="hidden" value="access" name="action"> 
            
            <button type="submit" class="btn btn-outline-primary">Entrar</button>
            
            

              
            </form>
          </div>

          </div>
          
        </div>
      </section>

    </div>
    <!-- JavaScript Bundle with Popper -->

</body>
</html>