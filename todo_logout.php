<?php
session_start(); // セッションの開始
//セッション変数を空っぽにしましょう
$_SESSION = array(); // セッション変数を空の配列で上書き 
if (isset($_COOKIE[session_name()])) {
    //cookieの有効期限
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy(); //セッション破棄
header('Location:todo_login.php');
//ログアウトした後に移動するページ
//サービスによってログインしなくてもみれるページへ移動しても良い
exit();
