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
    // print_r($_POST);
?>

    <!doctype html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>INSTRUCTOR</title>
      <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <!-- <link rel="stylesheet" href="style.css"> -->
      <link rel="stylesheet" href="style2.css">

    </head>

    <body>
      <!-- <nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand">WELCOME <strong><?php echo strtoupper($name) ?></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">INSTRUCTOR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../INSERT-QUESTIONS">Insert Questions</a>
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
<div class="main">
  <div class="welcome-container">
        <h1>Welcome, Respectable INSTRUCTOR!</h1>
        <p>
            Your role is vital in shaping the minds that navigate this system. As a mentor and guide, you empower users with the knowledge they need to succeed.
        </p>
        <p>
            Your dedication transforms challenges into learning opportunities. With every lesson you impart, you bridge gaps, simplify complexities, and create a path for growth.
        </p>
        <p>
            Every explanation, every demonstration, and every moment you spend teaching adds value to this digital ecosystem. You hold the power to inspire curiosity, instill confidence, and foster expertise.
        </p>
        <p>
            Let’s make today more than just another session—let’s turn it into a milestone in our journey of learning and progress. With clarity, patience, and innovation, let’s build a smarter tomorrow.
        </p>
        <p>
            Thank you for being the cornerstone of knowledge in our system. Your efforts shape the future of those who rely on your wisdom.
        </p>
        <p>
            Welcome, once again, to the heart of learning and excellence.
        </p>
  </div>

</div> -->

      <div class="main-container">
        <img src="../images/space.jpg" alt="">
        <div class="content">
          <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand  text-white" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <span class="nav-link active home text-white" aria-current="page" href="../index.php">Home</span>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-white" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-white" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="../node_modules/jquery/dist/jquery.min.js"></script>
      <script>
        $('.home').on("click", function() {
          window.location.href = "../index.php";
        });
      </script>

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