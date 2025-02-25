
<?php
require_once "../config.php";

/*
Currently Changing This Query Cause: {
    Some Time id Becomes user_type_id, And Some Time Opposite;
}
*/

// $stmt = $pdo->prepare('select * from users inner join user_types on users.user_type_id=user_types.id where users.email=?');
$stmt = $pdo->prepare('select * from users WHERE email=?');
$stmt->execute([$_POST['user_email']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$return_array=[];
if ($user && $_POST['password']=== $user['user_password']) {
    $return_array['id'] = $user['id'];
    $return_array['name'] = $user['email'];
    $return_array['user_type_id'] = $user['user_type_id'];
    // $return_array['user_type_name'] = $user['user_type_name'];
    $return_array['success'] = true;
} else {
    $return_array['success'] = false;
}
echo json_encode($return_array); 
