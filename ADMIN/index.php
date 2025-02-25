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
    <title>ADMIN</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand">WELCOME <strong>ADMIN</strong></a>
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
            <a class="nav-link active" aria-current="page" href="../CHECK-USERS">Check Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../ADD-USERS">Add Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../INSERT-QUESTIONS">Insert Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-current="page"><i>Coming_Soon_More_Features..</i></a>
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

<div class="main">
  <div class="welcome-container">
        <h1>Welcome, Esteemed ADMIN!</h1>
        <p>
            Your journey begins here. As the guardian of this digital realm, you hold the keys to control, manage, and ensure the smooth operation of our entire system.
        </p>
        <p>
            Your expertise and dedication are the driving force behind our success. Your vigilance protects our data, your decisions shape our future, and your commitment inspires us all.
        </p>
        <p>
            Every click, every command you execute is a step towards perfection. You have the power to make a difference, to innovate, and to lead us to new heights.
        </p>
        <p>
            Together, let's make today not just another day, but a milestone in our journey towards excellence. Let's create, improve, and conquer challenges with unwavering determination and unparalleled skill.
        </p>
        <p>
            Thank you for being the cornerstone of our digital world. Let's embark on this journey with passion, purpose, and pride.
        </p>
        <p>
            Welcome, once again, to the heart of our operations.
        </p>
  </div>
</div>

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