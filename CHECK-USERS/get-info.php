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
        $x .= "<td>" . $record['id'] . "</td>";
        $x .= "<td>" . $record['name'] . "</td>";
        $x .= "<td>" . $record['email'] . "</td>";
        $x .= "<td>" . $record['user_type_id'] . "</td>";
        $x .= "<td>" . $record['inforce'] . "</td>";
        $x .= "<td>" . $record['created_at'] . "</td>";
        $x .= "<td>" . $record['updated_at'] . "</td>";
        $x .= "<td><button class='btn btn-outline-danger text-warning delBtn' type='submit' name='del' value='" . $record['id'] . "' data-user-name='".$record['name']."'><strong>DELETE</strong></button></td>";
        $x .= "</tr>";
        echo $x;
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}