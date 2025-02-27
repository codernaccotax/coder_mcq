<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg ">
        <div class="nav-container ">
            <div class="home"><strong>HOME</strong></div>
            <div class="image-part container-fluid">
                    <img src="..\images\codernaccotax.png" alt="">
            </div>
            <div class="login"><button onclick="openLoginPart()" class="btn btn-success">Login</a></button></div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="nav-container container-fluid d-flex justify-content-between align-items-center">
            <div class="home"><strong>HOME</strong></div>
            <div class="image-part">
                <!-- <img src="..\images\codernaccotax.png" alt=""> -->
            </div>
            <div class="login">
                <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    Login
                </button>
            </div>
        </div>
    </nav>
    <div class="container-fluid main-container">
        <main>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, voluptates praesentium. Ipsam sit consequuntur harum distinctio quod quisquam dicta veniam temporibus sed exercitationem numquam voluptatem corrupti est aperiam, repellat voluptatibus ipsa necessitatibus quaerat corporis animi alias laudantium aliquam tempore dignissimos? Sequi excepturi facilis modi dicta, molestiae tempore. Voluptates consectetur provident quasi! Debitis repellat atque iusto odio ab repudiandae culpa possimus eius obcaecati et illum recusandae dicta, aspernatur voluptates consequuntur facere molestiae tempore necessitatibus nihil corrupti velit iste! Impedit eligendi voluptate consequuntur dolor. Velit esse impedit dolorem temporibus deleniti facere fugit sequi molestiae, itaque molestias repudiandae aperiam eveniet porro voluptatum ipsa placeat tempore a ut provident autem pariatur. Quod rem laborum temporibus nemo corrupti iusto, laboriosam voluptates aperiam praesentium. Fuga, quasi officia. Amet quasi dignissimos, officiis tenetur ducimus magni. Fugit architecto iusto nam distinctio fuga beatae maiores. Odio corrupti ex necessitatibus eaque nobis, deserunt facilis ipsa molestias at, fugiat culpa illo sunt cupiditate qui sit voluptates eveniet magnam quis omnis dolorum ipsum vero iusto id. Porro, reprehenderit iste omnis, itaque laudantium placeat animi obcaecati qui saepe possimus corporis. Consequatur a explicabo officiis quo atque ab perferendis ipsa dolorum ipsum, iure minima hic itaque, nesciunt fuga voluptas sed! Nisi cupiditate repellat consequuntur!
        </main>
    </div>
    <div class="offcanvas offcanvas-bottom show" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Login Here</h5>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="form-section">
                <form id="login-form">
                    <!-- <div class="holder">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="user-email" aria-describedby="emailHelp">
                    </div>
                    <div class="holder">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="holder">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- off -->


    <!-- For Sending Id To Next Page -->
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
                let password = $('#password').val();
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
                        } else { /* Some Comments Are Here For Debugging(Track The Flow), */
                            if (answer.user_type_id == 1) {
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../ADMIN/index.php');
                                // alert("Going To ADMIN'S Page Id: "+answer.id+" u_t_i: "+ answer.user_type_id);
                                console.log(answer);
                                $('#formForUserId').submit();
                            } else if (answer.user_type_id == 2) {
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../INSTRUCTOR/index.php');
                                // alert("Going To INSTRUCTORS'S Page Id: "+answer.id+" u_t_i: "+ answer.user_type_id);
                                console.log(answer);
                                $('#formForUserId').submit();
                            } else if (answer.user_type_id == 3) {
                                $('#forUserId').val(answer.id);
                                // alert("Going To STUDENT'S Page Id: "+answer.id+" u_t_i: "+ answer.user_type_id);
                                console.log(answer);
                                $('#formForUserId').prop('action', '../STUDENT/index.php');
                                $('#formForUserId').submit();
                            }
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>