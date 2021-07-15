<?php

include('functions.php'); //sql接続
$pdo = connect_to_db(); //必要なカラムとってくる

$id = $_POST['id'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$rubi_last_name = $_POST['rubi_last_name'];
$rubi_first_name = $_POST['rubi_first_name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$tel = $_POST['tel'];
$job = $_POST['job'];
$zip = $_POST['zip'];
$address = $_POST['address'];
// 各値をpostで受け取る $id = $_POST['id']; ...
// idを指定して更新するSQLを作成(UPDATE文)
$sql = "UPDATE t_customer SET last_name=:last_name, first_name=:first_name,rubi_last_name=:rubi_last_name, rubi_first_name=:rubi_first_name,
           email=:email,birthday=:birthday,sex=:sex,tel=:tel,job=:job,zip=:zip,address=:address,updated_at=sysdate() WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
$stmt->bindValue(':rubi_first_name', $rubi_first_name, PDO::PARAM_STR);
$stmt->bindValue(':rubi_last_name', $rubi_last_name, PDO::PARAM_STR);
$stmt->bindValue(':email,', $email, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_STR);
$stmt->bindValue(':job', $job, PDO::PARAM_STR);
$stmt->bindValue(':zip', $zip, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// 各値をpostで受け取る
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する 
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常に実行された場合は一覧ページファイルに移動し，処理を実行する 
    header("Location:todo_read.php");
    exit();
}
