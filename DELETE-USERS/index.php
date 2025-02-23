<?php
// print_r($_GET);
try {
    require_once "../config.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];
        if ($userId !== false) {
            $stmt = $pdo->prepare('DELETE FROM users WHERE id=?');
            if($stmt->execute([$_GET['userId']]))
            echo "User Deleted Of Id: ". $_GET['userId'];
        } else {
            echo "Invalid userId provided.";
        }
        } else {
            echo "userId not received.";
        }
    }else {
        echo "This script only handles GET requests.";
    }
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}