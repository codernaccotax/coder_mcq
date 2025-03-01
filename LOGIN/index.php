<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="nav-container container-fluid d-flex justify-content-between align-items-center">
            <div class="home"><strong>HOME</strong></div>
            <div class="image-part">
                <img src="..\images\codernaccotax.png" alt="">
            </div>
            <div class="login">
                <button class="btn" id="top-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    Login
                </button>
            </div>
        </div>
    </nav>
    <div class="container-fluid main-container">
        <main>
            <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis minus illum quisquam unde explicabo voluptates qui esse quo molestiae. Pariatur dolor repellendus, labore dicta sapiente natus ab? Velit hic quisquam sunt consectetur. Error facilis numquam vel animi et! Error illum molestiae rerum nulla rem veniam at temporibus nesciunt quas voluptate fugiat vitae obcaecati in perferendis illo maiores, veritatis atque eius vel incidunt. Fuga iusto asperiores impedit voluptate quibusdam ratione molestiae voluptas ex minus dolore, error ipsam veritatis consequuntur, reiciendis exercitationem, vel voluptatibus veniam cumque quis! Possimus eaque, voluptatum impedit rerum aliquid cumque alias accusamus dolorum, animi neque nobis perferendis, laborum soluta laudantium earum explicabo accusantium eveniet fuga voluptatibus fugiat nesciunt? Officiis, nemo tempora. Ducimus nulla eveniet nam rem neque magnam iure praesentium corrupti numquam expedita quis ut libero facilis atque doloribus esse perferendis fugiat eaque, explicabo repellat molestias? Amet modi eveniet corporis veritatis asperiores fuga illo similique, cum nobis ab itaque corrupti, eaque consectetur delectus libero impedit eum accusamus voluptatem excepturi autem officia. Aliquam soluta suscipit animi adipisci doloribus laboriosam, iste ipsam minima, magni quod eaque unde, facilis porro quasi maiores voluptatem eos. Perspiciatis suscipit saepe magni quod similique quo, incidunt quos quis, doloribus impedit voluptatibus corrupti? Maiores, vitae! Harum soluta animi similique labore dolore, nam dicta temporibus alias, inventore illum, nesciunt minima ipsam. Consequatur aliquam maiores quos inventore reprehenderit harum ex at. Autem voluptatum ipsa esse tempore! Placeat nobis ullam modi aperiam suscipit quasi doloribus adipisci? Voluptatem voluptates asperiores rerum excepturi neque amet non necessitatibus officia, rem facilis aliquam. Hic voluptas mollitia ducimus neque, deleniti debitis unde. Incidunt accusamus quas illo excepturi corporis, dolor perferendis praesentium ex ipsum aliquid. Sed suscipit blanditiis iste voluptatem placeat iusto voluptatum vitae natus dolore modi ipsum nisi quia, enim corporis laboriosam molestias temporibus vero? Ut, nulla quia ipsa reprehenderit, iste ipsam impedit eos omnis et sequi aliquam in deleniti, saepe distinctio nisi officiis nobis fugiat. Corporis eius magni alias at unde commodi, soluta amet modi deleniti totam animi suscipit, minima iure ipsam eum perferendis eos similique quia laudantium omnis dicta veniam nostrum ipsa voluptatem! Voluptatum alias libero maiores, dolore veritatis similique dolores dignissimos ab mollitia fugit quia quam debitis repellat recusandae modi eveniet animi dolorum adipisci ad et ullam magnam. Consequuntur tempora dolorem culpa assumenda rerum quo maxime libero itaque omnis natus accusamus repudiandae fugiat cumque enim praesentium a, consectetur saepe reprehenderit dignissimos quisquam repellat adipisci aliquam qui. Doloribus iusto excepturi, autem magni eum voluptas et ullam adipisci, fuga atque assumenda soluta eos molestiae commodi dolor magnam doloremque odit! Maiores reprehenderit nisi dolorum quasi rerum fugit repellat, distinctio, modi pariatur aliquid tenetur! Delectus, voluptas vero facilis eum cum sunt. Perferendis molestiae at, beatae et eos ducimus dicta, illo natus vel ut corporis blanditiis ipsam reprehenderit vero tempore ab illum? Esse voluptas minus corporis, magnam itaque magni. Natus inventore accusantium odio nostrum, adipisci ad placeat voluptatum ea asperiores facilis sint, veritatis cupiditate odit laudantium quod itaque et rerum voluptatibus dolor, voluptate quia accusamus? Impedit deleniti quidem, tempore rerum ratione velit debitis animi illo odio? -->
        </main>
    </div>
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Login Here</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-body-left">
                <!-- <img src="../images\login-person.png" alt=""> -->
                <!-- <img src="../images\person2.png" alt=""> -->
                <img src="../images\person3.png" alt="">
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

                            <input type="password" id="user-password" placeholder="pas....rd">
                        </div>
                        <div class="form-part form-button">
                            <button type="submit" class="btn text-success w-100 h-100">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <form id="formForUserId" method="POST">
        <input type="hidden" name="userId" id="forUserId">
    </form>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    
    <script>
        function openLoginPart(){
            $('.login-part').fadeToggle(800);
        }
        $('.home').on("click",function(){
            window.location.href = "../index.php";
        });
        $(document).ready(function() {
            $('#login-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                let userEmail = $('#user-email').val();
                let password = $('#user-password').val();
                
                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: {
                        user_email: userEmail,
                        password: password
                    },
                    success: function(response) {
                        let answer = JSON.parse(response);                        
                        if (answer.success != true) {
                            alert(`Please Check Email OR Password,`);
                        } else {
                            if (answer.user_type_id == 1) {
                                $('.btn').html('Loading...');
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../ADMIN/index.php');
                                console.log(answer);
                                
                                setTimeout(function() {
                                    $('#loading-spinner').hide();
                                    $('#login-btn').prop('disabled', false);
                                    $('#login-btn').text('LOGIN');
                                    $('#formForUserId').submit();
                                    $('.btn').html('LOGIN');
                                }, 1000);
                            } else if (answer.user_type_id == 2) {
                                $('.btn').html('Loading...');
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../INSTRUCTOR/index.php');
                                console.log(answer);

                                setTimeout(function() {
                                    $('#loading-spinner').hide();
                                    $('#login-btn').prop('disabled', false);
                                    $('#login-btn').text('LOGIN');
                                    $('#formForUserId').submit();
                                    $('.btn').html('LOGIN');
                                }, 1000);

                            } else if (answer.user_type_id == 3) {
                                $('.btn').html('Loading...');

                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../STUDENT/index.php');
                                console.log(answer);
                                
                                    setTimeout(function() {
                                    $('#loading-spinner').hide();
                                    $('#login-btn').prop('disabled', false);
                                    $('#login-btn').text('LOGIN');
                                    $('#formForUserId').submit();
                                    $('.btn').html('LOGIN');
                                }, 1000);

                            }
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Homepage</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
       

* {
    ::selection {
        background-color: rgba(14, 114, 30, 0.685);
        color: rgb(255, 255, 255);
    }
}

body {
    height: 100%;
    width: 100%;
    background: linear-gradient(to bottom, #9ab8df, #9ab8df, #9ab8df) !important;
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

.main-container {
    height: auto;
    width: 100%;
}

.navbar-expand-lg {
    height: 10vh;
    width: 100%;
    border-bottom: 1px solid black;
    background-color: #1a2b3c;
}

.navbar .container-fluid .home {
    display: flex;
    align-items: center;
    justify-content: center;
    height: auto;
    width: auto;
    cursor: pointer;
    color: #ffffff;
    font-weight: 700;
    font-size: 1.2rem;
}

.navbar .container-fluid .home:hover {
    color: #00cc00;
}

.hero-section {
    height: 80vh;
    background: linear-gradient(135deg, #0099ff, #00cc00);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
}

.hero-section h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #ffffff;
}

.hero-section p {
    font-size: 1.25rem;
    margin-bottom: 30px;
    color: #ffffff;
}

.btn-primary, .btn-outline-light {
    font-weight: 500;
    transition: all 0.3s ease;
    font-family: 'Roboto', sans-serif;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    padding: 12px 24px;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
    transform: scale(1.05);
}

.btn-outline-light {
    color: #ffffff;
    border-color: #ffffff;
    padding: 12px 24px;
}

.btn-outline-light:hover {
    color: #ffffff;
    background-color: #0099ff;
    border-color: #0099ff;
    transform: scale(1.05);
}

.bg-light {
    background-color: #f8f9fa !important;
}

#about, #services, #contact {
    padding: 40px 0;
}

#about h2, #services h2, #contact h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a2b3c;
    margin-bottom: 20px;
    font-family: 'Roboto', sans-serif;
}

#about p, #contact p {
    font-size: 1.1rem;
    color: #333;
    line-height: 1.6;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    background-color: #ffffff;
}

.card:hover {
    transform: scale(1.05);
}

.card-body h5 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1a2b3c;
    font-family: 'Roboto', sans-serif;
}

.card-body p {
    font-size: 1rem;
    color: #666;
}

@media (max-width: 768px) {
    .hero-section {
        height: 60vh;
    }

    .hero-section h1 {
        font-size: 2.5rem;
    }

    .hero-section p {
        font-size: 1rem;
    }

    #about h2, #services h2, #contact h2 {
        font-size: 2rem;
    }

    .card {
        margin-bottom: 20px;
    }
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="nav-container container-fluid d-flex justify-content-between align-items-center">
            <div class="home"><strong>HOME</strong></div>
            <div class="image-part">
            </div>
            <div class="login">
                <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    Login
                </button>
            </div>
        </div>
    </nav>

        </div>

        <div class="offcanvas offcanvas-bottom show" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Login Here</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="offcanvas-body-left">
                    <img src="../images\login-person.png" alt="">
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <form id="formForUserId" method="POST">
            <input type="hidden" name="userId" id="forUserId">
        </form>

        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        
        <script>
            function openLoginPart(){
                $('.login-part').fadeToggle(800);
            }
            $('.home').on("click",function(){
                window.location.href = "../index.php";
            });
            $(document).ready(function() {
                $('#login-form').on('submit', function(e) {
                    e.preventDefault(); // Prevent form submission
                    let userEmail = $('#user-email').val();
                    let password = $('#user-password').val();
                    
                    $.ajax({
                        type: 'POST',
                        url: 'login.php',
                        data: {
                            user_email: userEmail,
                            password: password
                        },
                        success: function(response) {
                            let answer = JSON.parse(response);                        
                            if (answer.success != true) {
                                alert(`Please Check Email OR Password,`);
                            } else {
                                if (answer.user_type_id == 1) {
                                    $('.btn').html('Loading...');
                                    $('#forUserId').val(answer.id);
                                    $('#formForUserId').prop('action', '../ADMIN/index.php');
                                    console.log(answer);
                                    
                                    setTimeout(function() {
                                        $('#loading-spinner').hide();
                                        $('#login-btn').prop('disabled', false);
                                        $('#login-btn').text('LOGIN');
                                        $('#formForUserId').submit();
                                        $('.btn').html('LOGIN');
                                    }, 1000);
                                } else if (answer.user_type_id == 2) {
                                    $('.btn').html('Loading...');
                                    $('#forUserId').val(answer.id);
                                    $('#formForUserId').prop('action', '../INSTRUCTOR/index.php');
                                    console.log(answer);

                                    setTimeout(function() {
                                        $('#loading-spinner').hide();
                                        $('#login-btn').prop('disabled', false);
                                        $('#login-btn').text('LOGIN');
                                        $('#formForUserId').submit();
                                        $('.btn').html('LOGIN');
                                    }, 1000);

                                } else if (answer.user_type_id == 3) {
                                    $('.btn').html('Loading...');

                                    $('#forUserId').val(answer.id);
                                    $('#formForUserId').prop('action', '../STUDENT/index.php');
                                    console.log(answer);
                                    
                                        setTimeout(function() {
                                        $('#loading-spinner').hide();
                                        $('#login-btn').prop('disabled', false);
                                        $('#login-btn').text('LOGIN');
                                        $('#formForUserId').submit();
                                        $('.btn').html('LOGIN');
                                    }, 1000);

                                }
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html> -->