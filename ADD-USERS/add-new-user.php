<?php

try {
    require_once "../config.php";

    //Get Id's Count
    $stmt = $pdo->prepare('SELECT COUNT(id) FROM users;');
    $stmt->execute([]);
    $totalIds = $stmt->fetchColumn(0);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['user_type_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['user_password'])) {

        $id=($totalIds+1);
        $userTypeId=$_POST['user_type_id'];
        $userName=$_POST['name'];
        $useremail=$_POST['email'];
        $useruserPasswoword=$_POST['user_password'];

            $stmt = $pdo->prepare('INSERT INTO users(id,user_type_id,name,email,user_password)VALUES(?,?,?,?,?)');
            if($stmt->execute([$id,$userTypeId,$userName,$useremail,$useruserPasswoword])){
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