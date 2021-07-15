<?php

function connect_to_db()
{
  $dbn = 'mysql:dbname=gsacf_d08_10_002;charset=utf8;port=3306;host=localhost';
  $user = 'root';
  $pwd = '';

  try {
    return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
  }
}

// ログイン状態のチェック関数
//sessionstartとセットでないと動かない
function check_session_id()
{
  if (
    //session_idが一致しないoridが一致しない
    !isset($_SESSION['session_id']) || $_SESSION['session_id'] != session_id()
  ) {
    header('Location:todo_login.php');
  } else {
    session_regenerate_id(true);
    $_SESSION['session_id'] = session_id();
  }
}
