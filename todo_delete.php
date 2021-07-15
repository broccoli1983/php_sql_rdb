<?php
include('functions.php'); // 関数を記述したファイルの読み込み
// idをgetで受け取る
$id = $_GET['id'];
// idを指定して更新するSQLを作成 -> 実行の処理
$pdo = connect_to_db();
$sql = 'DELETE FROM t_customer WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// fetch()で1レコード取得できる.
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
}

// 一覧画面にリダイレクト
header('Location:todo_read.php');
