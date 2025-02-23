<?php

try {
    require_once "../config.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['user_type_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['user_password'])) {

        $userTypeId=$_POST['user_type_id'];
        $userName=$_POST['name'];
        $useremail=$_POST['email'];
        $useruserPasswoword=$_POST['user_password'];

            $stmt = $pdo->prepare('INSERT INTO users(user_type_id,name,email,user_password)VALUES(?,?,?,?)');
            if($stmt->execute([$userTypeId,$userName,$useremail,$useruserPasswoword])){
                echo "User $userName Regestered,";
            }        
        } else {
            echo "Please Fulfill Informations,";
        }
    }else {
        echo "This script only handles post requests.";
    }
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}