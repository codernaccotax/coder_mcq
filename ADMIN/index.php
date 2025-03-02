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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <span class="navbar-brand">WELCOME <strong><?php echo strtoupper($name)?></strong></span>
    <button class="bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ADMIN</h5>
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

    <header class="hero-section">
        <div class="container text-center text-white">
            <h1>Welcome <strong class="text-warning" >ADMIN</strong></h1>
            <p>A Responsible Person, Who Take Cares Of Our Services,</p>
            <button class="btn btn-outline-light btn-lg mt-3 ms-3 learn-more">Learn More</button>
        </div>
    </header>

    <div class="admin-info">
        <header class="p-0"><span class="m-0 text-danger">X</span></header>
        <main class="admin-info-content">
    <h1>Welcome ADMIN</h1>
    <p>Nice to see you here in your workplace.</p>
        Here your responsibilities begins. Please check everything time to time. For maintaining software, it is crucial to maintain each thing. Even one issue may cause a bad user experience. So, please make sure that you are working well.
</main>

    </div>

    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2>As Being A Admin You Can Perform Some Tasks,</h2>
            <!-- <p>We are a team of tech enthusiasts dedicated to building cutting-edge solutions for a digital future.</p> -->

        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 service service-1">
                    <button class="service-btn btn btn-success btn-outline-dark btn-lg text-white">Check Users</button>
                </div>
                <div class="col-md-4 service service-2">
                    <button class="service-btn btn btn-success btn-outline-dark btn-lg text-white">Add Users</button>
                </div>
                <div class="col-md-4 service service-3">
                    <button class="service-btn btn btn-success btn-outline-dark btn-lg text-white">Insert Questions</button>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2>Contact Us</h2>
            <p><a href="https://github.com/codernaccotax/coder_mcq" target="_blank">HERE</a></p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.service-1').on("click",function(){
            location.href="../CHECK-USERS";
        });
        $('.service-2').on("click",function(){
            location.href="../ADD-USERS";
        });
        $('.service-3').on("click",function(){
            location.href="../INSERT-QUESTIONS";
        });
        
        $(document).ready(function () {
            $('.learn-more').on('click', function () {
                $('.admin-info').fadeToggle(1000); // Smoothly toggles visibility with fade effect
            });
            
            $('.admin-info header span').on('click', function () {
                $('.admin-info').fadeToggle(1000); // Smoothly toggles visibility with fade effect
            });
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