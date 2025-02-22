<?php
try {
    require '../config.php';
    echo $_POST['user'];
    $searchFor=$_POST['user'];
    $stmt = $pdo->prepare('SELECT * FROM users WHERE user_type_id = ?');
    $stmt->execute([$searchFor]);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($records as $record) {
        $x = "<tr>";
        $x .= "<div class='adjust' ><td>" . $record['name'] . "</td></div>";
        $x .= "<div class='adjust' ><td>" . $record['email'] . "</td></div>";
        $x .= "<div class='adjust' ><td>" . $record['user_type_id'] . "</td></div>";
        $x .= "<div class='adjust' ><td><button type='submit' name='del' value='" . $record['id'] . "' onclick='delete(this)' style='background-color: red; color: white'>DELETE</button></td></div>";
        $x .= "</tr>";
        echo $x;
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

// Deletion logic
if (isset($_GET['del'])) {
    $deleteFromId = $_GET['del'];
    $stmt = $pdo->prepare('DELETE FROM user_information WHERE id = ?');
    $stmt->execute([$deleteFromId]);
}