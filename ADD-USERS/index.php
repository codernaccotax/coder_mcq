<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container-fluid main-container">
    <header>Here You Can Add Users, As You Are Admin,</header>
    <main>
        <form id="user-form" >
            <div class="mb-3">
                <label for="user_type_id" class="form-label">User Type ID</label>
                <input type="text" class="form-control" id="user_type_id" name="user_type_id" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="user_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#user-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                let userTypeId = $('#user_type_id').val();
                let name = $('#name').val();
                let email = $('#email').val();
                let password = $('#password').val();
                $.ajax({
                    type: 'POST',
                    url: 'add-new-user.php',
                    data: {
                        user_type_id: userTypeId,
                        name: name,
                        email: email,
                        password: password
                    },
                    success: function(response){
                        alert("ok");
                    }
                });
            });
        });
    </script>

</body>
</html>