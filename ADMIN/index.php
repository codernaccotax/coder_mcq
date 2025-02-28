<!-- <?php

// try {
//   require_once "../config.php";
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['userId'])) {
//       $userId = $_POST['userId'];
//       if ($userId !== false) {
//         $stmt = $pdo->prepare('SELECT name FROM users WHERE id = ?;');
//         $stmt->execute([$userId]);
//         $name = $stmt->fetchColumn();
//       } else {
//       echo "Invalid userId provided.";
//       }
//   } else {
//   echo "userId not received.";
//   }
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
    <a class="navbar-brand">WELCOME <strong><?php echo strtoupper($name)?></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
//     } else {
//         echo "This script only handles POST requests.";
//     }
// } catch (PDOException $e) {
//     echo 'Error: ' . $e->getMessage();
// }
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
      body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

.navbar {
    background-color: #1a2b3c;
    padding: 15px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar-brand, .nav-link {
    color: #ffffff !important;
    font-weight: 500;
}

.nav-link:hover {
    color: #00cc00 !important;
}

.btn-success {
    background-color: #00cc00;
    border: none;
    padding: 8px 16px;
    transition: all 0.3s ease;
}

.btn-success:hover {
    background-color: #0099ff;
    transform: scale(1.05);
}

.hero-section {
    height: 100vh;
    background: linear-gradient(135deg, #0099ff, #00cc00);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero-section h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero-section p {
    font-size: 1.25rem;
    margin-bottom: 30px;
}

.btn-primary, .btn-outline-light {
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #007bff;
    transform: scale(1.05);
}

.btn-outline-light:hover {
    color: #ffffff;
    background-color: #0099ff;
    border-color: #0099ff;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

.offcanvas {
    height: 80% !important;
    background: linear-gradient(135deg, rgba(0, 153, 255, 0.8), rgba(0, 0, 0, 0.7)) !important;
    backdrop-filter: blur(10px);
    opacity: 0.9;
    transition: all 0.5s ease-in-out;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.3);
}

.offcanvas.show {
    animation: slideUp 0.5s ease-in-out;
}

@keyframes slideUp {
    from { transform: translateY(100%); opacity: 0; }
    to { transform: translateY(0); opacity: 0.9; }
}

.offcanvas .offcanvas-header {
    display: flex;
    justify-content: space-between;
    padding: 1%;
    color: #ffffff;
}

.offcanvas .offcanvas-body {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.offcanvas-body-left, .offcanvas-body-right {
    height: 100%;
    width: 50%;
}

.offcanvas-body-left > img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    filter: brightness(90%) contrast(110%);
}

.offcanvas-body-right {
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

.offcanvas-body-right .form-section {
    height: 100%;
    width: 100%;
}

.offcanvas-body-right .form-section > form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
    width: 80%;
}

.offcanvas-body-right .form-section > form .form-part {
    width: 100%;
}

.offcanvas-body-right .form-section > form .input-fileds {
    background: linear-gradient(90deg, #0099ff, #000000);
    color: #ffffff;
    padding: 0.5rem;
    border-radius: 8px 8px 0 0;
    text-align: center;
    font-weight: 500;
    font-family: 'Roboto', sans-serif;
}

.offcanvas-body-right .form-section > form .form-part > input {
    background-color: rgba(0, 153, 255, 0.2) !important;
    border: 1px solid rgba(0, 153, 255, 0.5) !important;
    border-radius: 8px;
    padding: 12px;
    color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 153, 255, 0.5);
    transition: all 0.3s ease;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}

.offcanvas-body-right .form-section > form .form-part > input::placeholder {
    color: rgba(255, 255, 255, 0.7);
    font-style: italic;
    font-family: 'Roboto', sans-serif;
}

.offcanvas-body-right .form-section > form .form-part > input:focus {
    background-color: rgba(0, 153, 255, 0.3) !important;
    box-shadow: 0 0 15px rgba(0, 153, 255, 0.8);
    outline: none;
}

.offcanvas-body-right .form-section > form .form-button button {
    background: linear-gradient(45deg, #00cc00, #0099ff);
    border: none;
    padding: 12px 24px;
    font-weight: 700;
    border-radius: 8px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    font-family: 'Roboto', sans-serif;
    color: #ffffff;
}

.offcanvas-body-right .form-section > form .form-button button:hover {
    background: linear-gradient(45deg, #0099ff, #00cc00);
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(0, 153, 255, 0.6);
}

#loading-spinner {
    margin-top: 10px;
}

.spinner {
    display: flex;
    justify-content: center;
}

@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2.5rem;
    }

    .hero-section p {
        font-size: 1rem;
    }

    .offcanvas-body-left, .offcanvas-body-right {
        width: 100%;
        height: 50%;
    }

    .offcanvas-body {
        flex-direction: column;
    }
}
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TechHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><button class="btn btn-success ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">Login</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container text-center text-white">
            <h1>Welcome to TechHub</h1>
            <p>Revolutionizing technology with innovative solutions</p>
            <button class="btn btn-primary btn-lg mt-3">Get Started</button>
            <button class="btn btn-outline-light btn-lg mt-3 ms-3">Learn More</button>
        </div>
    </header>

    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2>About Us</h2>
            <p>We are a team of tech enthusiasts dedicated to building cutting-edge solutions for a digital future.</p>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5>Web Development</h5>
                            <p>Creating responsive and modern websites.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5>App Development</h5>
                            <p>Building innovative mobile applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5>Cloud Solutions</h5>
                            <p>Scalable cloud infrastructure for businesses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Email: contact@techhub.com | Phone: +1-800-123-4567</p>
        </div>
    </section>

    <!-- Offcanvas Login (Same as your previous login form, updated with new design) -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Login Here</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-body-left">
                <img src="path-to-your-generated-image.jpg" alt="Login Background">
            </div>
            <div class="offcanvas-body-right">
                <div class="form-section">
                    <form id="login-form">
                        <div class="form-part">
                            <label class="text-white col-12 input-fileds" for="user-email">EMAIL</label>
                            <input type="text" id="user-email" placeholder="youremail@gmail.com">
                        </div>
                        <div class="form-part">
                            <label class="text-white col-12 input-fileds" for="user-password">PASSWORD</label>
                            <input type="password" id="user-password" placeholder=".......">
                        </div>
                        <div class="form-part form-button">
                            <button type="submit" class="btn text-success w-100 h-100">LOGIN</button>
                            <div id="loading-spinner" class="spinner" style="display: none;">
                                <div class="spinner-border text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>