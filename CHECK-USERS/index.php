<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">

    <div class="main-container">
        <header>
            <div class="heading"><strong><u>SEARCH FOR</u></strong></div>
            <div class="buttons">
                <button class="btn btn-outline-danger" value="1"><strong>Admins</strong></button>
                <button class="btn btn-outline-danger" value="2"><strong>Instructors</strong></button>
                <button class="btn btn-outline-danger" value="3"><strong>Students</strong></button>
            </div>
        </header>
        <div class="show-users">
            <input type="text" id="myInput" placeholder="Search..." class="form-control mb-3">

            <table id="myTable" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type Id</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-success text-white">
                    <script>
                        let selectedUser=null;
                        document.querySelectorAll("header .btn").forEach(button => {
                            button.addEventListener("click", function () {
                                selectedUser = this.value;
                                
                                $.ajax({
                                    type: 'POST',
                                    url: 'get-info.php',
                                    data: { user: selectedUser},
                                    success: function(response){
                                        $('table tbody').html(response);
                                        $('#myTable').DataTable(); // New
                                    }
                                });
                            });
                        });
                    </script>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>
