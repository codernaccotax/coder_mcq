<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome User</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <div class="container-fluid">
      
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" aria-disabled="true">Sign In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
        <img src=".\images\codernaccotax.png" alt="">
        <div class="content"></div>
      </main>

    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        $(".nav-link").on("click",function(){
          window.location.href = "LOGIN";
        });
    </script>
  </body>
</html>