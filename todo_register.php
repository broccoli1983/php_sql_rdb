<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link href='http://fonts.googleapis.com/css?family=Roboto:300,100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.rawgit.com/necolas/normalize.css/v2.1.3/normalize.css">
  <link rel="stylesheet" href="css/register.css">
  <title>ID/パスワード新規登録画面</title>
</head>

<body>
  <form class="w-25 mx-auto" action="todo_register_act.php" th:action="@{/login}" method="POST">
    <legend class="h5 mt-2 mb-3 font-weight-normal">ID・パスワード新規登録画面</legend>
    <div class="row">
      <div>
        ユーザー名 <input type="text" name="username" class="form-control" required autofocus />
      </div>
      <div>
        パスワード<input id="password" required type="password" name="password" class="form-control">
        <!-- id=password-labelで強さのグラデーションをコントロール -->
        <label id="password-label" alt="New password" placeholder="New password" data-info="Very weak"></label>
        <!-- パスワードのprogressbar-->
        <div class="progress" id="strength-bar"></div>
      </div>

      <div>
        <button type="submit" class="btn btn-outline-primary">登録</button>
      </div>
      <!-- ログインフォームへ -->
      <a href="todo_login.php">ログインはこちら</a>
      </fieldset>
    </div>
  </form>
  <!-- progressbar.js -->
  <!-- These are probably out dated so you might want to use newest versions -->
  <script src="https://cdn.rawgit.com/dropbox/zxcvbn/v1.0/zxcvbn.js"></script>
  <script src="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/0.6.1/dist/progressbar.js"></script>
  <script src="register.js"></script>
</body>

</html>