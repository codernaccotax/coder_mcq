<?php

try {
    require_once "../config.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['userId'])) {
            $userId = $_POST['userId'];
            if ($userId !== false) {
                $stmt = $pdo->prepare('SELECT name FROM users WHERE id = ?;');
                $stmt->execute([$userId]);
                $name = $stmt->fetchColumn();
            } else {
                echo "Invalid userId provided.";
            }
        } else {
            echo "userId not received.";
        }
        ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STUDENT</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand">WELCOME <strong>STUDENT</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php echo strtoupper($name)?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../INSERT_QUESTIONS">Insert Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-current="page" href="#"><i>Coming_Soon_More_Features..</i></a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<div class="main">Main_Part</div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
   
  </body>
</html>


<?php
    } else {
        echo "This script only handles POST requests.";
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>