<?php
// var_dump($_POST);
// exit();

session_start();
include('functions.php');
check_session_id();

$username = $_POST['username'];
$password = $_POST['password'];

$pdo = connect_to_db();

$sql = 'SELECT * FROM t_users WHERE username=:username AND password=:password AND is_deleted=0';
// WHEREで条件を指定!
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $val = $stmt->fetch(PDO::FETCH_ASSOC); // 該当レコードだけ取得 
}
if (!$val) { // 該当データがないときはログインページへのリンクを表示
    echo "<p>ログイン情報に誤りがあります.</p>";
    //ユーザー名、パスワードが間違っていますは気をつけた方が良い
    //なんかダメとぼやかす方が良い
    //どっちか行けるとなると他人に突破される可能性ある
    echo '<a href="todo_login.php">login</a>';
    exit();
} else {
    $_SESSION = array();
    $_SESSION['session_id'] = session_id();
    //管理者かどうか
    $_SESSION['is_admin'] = $val['is_admin'];
    $_SESSION['username'] = $val['username'];
    header('Location:todo_read.php');
    exit();
}
