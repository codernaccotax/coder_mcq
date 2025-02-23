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
            <div class="search-sections"><input type="text" id="myInput" placeholder="Search..." class="form-control mb-3"></div>

            <div class="table-section">
                <table id="myTable" class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type Id</th>
                            <th>Inforce</th>
                            <th>Created At</th>
                            <th>Update At</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        <script>
                            let selectedUsers=null;
                            document.querySelectorAll("header .btn").forEach(button => {
                                button.addEventListener("click", function () {
                                    selectedUsers = this.value;
                                    // alert("Button Clicked "+selectedUsers);
                                    $.ajax({
                                        type: 'POST',
                                        url: 'get-info.php',
                                        data: { user: selectedUsers},
                                        success: function(response){
                                            $('table tbody').html("Response Is: "+response);
                                            $('#myTable').DataTable();
                                        }
                                    });
                                });
                            });
                        </script>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        $(document).on("click", ".delBtn", function(){
            let userId = this.value;
            let userName = $(this).data("user-name");
            if(confirm(`Are you sure? You want to delete:\nID: ${userId}, \nNAME: ${userName}`)) {
                $.ajax({
                    type: "GET",
                    url: "../DELETE-USERS",
                    data: { userId: userId },
                    success: function(response) {
                        alert(response);
                        getDatasAgain();
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                        alert("Error deleting user.");
                    }
                });
            }
        });
        
        function getDatasAgain() {
            let store = $('button').filter(function() {
                return $(this).val() === selectedUsers;
            });
            if (store.length > 0) {
                store.trigger("click");
            }
        }

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