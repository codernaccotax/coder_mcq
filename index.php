<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            width: 100vw;
            background-color: rgba(0, 0, 255, 0.5);
        }

        nav {
            background-color: #343a40;
            position: absolute;
            top: 0;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .login-part {
            height: 100%;
            width: 100%;
            background-color: rgba(255,255, 255, 0.5);
            /* position: absolute; */
           display:none;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">
            <div class="home col-10">HOME</div>
            <div class="login col-1 "><button onclick="openLoginPart()" class="btn btn-success">Login</a></button></div>
            <div class="sign-up col-1 "><button class="btn btn-warning">Sign Up</button></div>
        </div>
    </nav>
    <div class="login-part">
        <form id="login-form">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="user-id" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>



    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        function openLoginPart(){
            $('.login-part').toggle();
        }
        $(document).ready(function() {
            $('#login-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                let userId = $('#user-id').val();
                let password = $('#password').val();
                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: {
                        user_id: userId,
                        password: password
                    },
                    success: function(response) {
                        let answer = JSON.parse(response);                        
                        if (answer.success != true) {
                            alert(`Please Check`);
                        } else {
                            alert(`Ok`);
                            console.log(answer);
                            if (answer.user_type_id == 1) {
                                window.location.href = "admin.php";

                            } else if (answer.user_type_id == 2) {
                                window.location.href = "./instructor";
                            } else if (answer.user_type_id == 3) {
                                window.location.href = "student.php";
                            }
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>