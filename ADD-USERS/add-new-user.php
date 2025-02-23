<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['user_type_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        echo "sbsr";
    } else {
        echo "grk";
    }
} else {
    echo "Invalid request method.";
}
?>
