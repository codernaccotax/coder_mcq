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
    
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="home col-10"><strong>HOME</strong></div>
            <div class="login col-1 "><button onclick="openLoginPart()" class="btn btn-success">Login</a></button></div>
        </div>
    </nav>
    <div class="container-fluid main-container">
        <div class="content container-fluid">
            <div class="login-part">
                <header><span onclick="openLoginPart()" >x</span></header>
                <div class="form-section">
                    <form id="login-form">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="user-id" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Your Data Will Always Secure,</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                            alert(`Please Check Email OR Password,`);
                        } else {
                            if (answer.user_type_id == 1) {
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../ADMIN/index.php');
                                $('#formForUserId').submit();
                                let check=$('#formForUserId').val();
                            } else if (answer.user_type_id == 2) {
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../INSTRUCTOR/index.php');
                                $('#formForUserId').submit();
                                let check=$('#formForUserId').val();
                            } else if (answer.user_type_id == 3) {
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../STUDENT/index.php');
                                $('#formForUserId').submit();
                                let check=$('#formForUserId').val();
                            }
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>