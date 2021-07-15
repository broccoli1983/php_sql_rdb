<?php

// var_dump($_POST);
// exit();


session_start();
include('functions.php');
check_session_id();

$pdo = connect_to_db();

if (
  !isset($_POST['last_name']) || $_POST['last_name'] == '' ||
  !isset($_POST['first_name']) || $_POST['first_name'] == '' ||
  !isset($_POST['rubi_last_name']) || $_POST['rubi_last_name'] == '' ||
  !isset($_POST['rubi_first_name']) || $_POST['rubi_first_name'] == '' ||
  !isset($_POST['email']) || $_POST['email'] == '' ||
  !isset($_POST['birthday']) || $_POST['birthday'] == '' ||
  !isset($_POST['gender_id']) || $_POST['gender_id'] == '' ||
  !isset($_POST['tel']) || $_POST['tel'] == '' ||
  !isset($_POST['job_id']) || $_POST['job_id'] == '' ||
  !isset($_POST['zip']) || $_POST['zip'] == '' ||
  !isset($_POST['address']) || $_POST['address'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}
$id = $_POST['id'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$rubi_last_name = $_POST['rubi_last_name'];
$rubi_first_name = $_POST['rubi_first_name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$gender_id = $_POST['gender_id'];
$tel = $_POST['tel'];
$job_id = $_POST['job_id'];
$zip = $_POST['zip'];
$address = $_POST['address'];


$sql = 'INSERT INTO t_customer(id, last_name, first_name, rubi_last_name, rubi_first_name, email, birthday, gender_id, tel, job_id, zip, address, created_at, updated_at) VALUES(NULL,:last_name, :first_name, :rubi_last_name, :rubi_first_name, :email, :birthday, :gender_id, :tel, :job_id, :zip, :address, sysdate(), sysdate())';
// var_dump($sql);
// exit();

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
$stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindValue(':rubi_last_name', $rubi_last_name, PDO::PARAM_STR);
$stmt->bindValue(':rubi_first_name', $rubi_first_name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_INT);
$stmt->bindValue(':gender_id', $gender_id, PDO::PARAM_INT);
$stmt->bindValue(':tel', $tel, PDO::PARAM_INT);
$stmt->bindValue(':job_id', $job_id, PDO::PARAM_INT);
$stmt->bindValue(':zip', $zip, PDO::PARAM_INT);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$status = $stmt->execute();



if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header("Location:todo_input.php");
  // header("Location:thanks.html");
  exit();
}
