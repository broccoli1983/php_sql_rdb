<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>ログイン画面</title>
</head>

<body>
  <!-- passwordを送るのでGETはNG、POSTを使う -->
  <form class="w-25 mx-auto" action="todo_login_act.php" method="POST">
    <fieldset>
      <legend class="h3 mt-2 mb-3 font-weight-normal">ログイン画面</legend>
      <div>
        ユーザー名 <input type="text" name="username" class="form-control" required autofocus />
      </div>
      <div>
        パスワード <input type="password" name="password" class="form-control" required>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
      <!-- 登録フォームへ -->
      <a href="todo_register.php">新規登録はこちら</a>
    </fieldset>
  </form>

</body>

</html>