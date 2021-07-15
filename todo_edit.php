<?php
include('functions.php'); // 関数を記述したファイルの読み込み
$id = $_GET['id']; // 送信されたidをgetで受け取る

// DB接続&id名でテーブルから検索
$pdo = connect_to_db();
$sql = 'SELECT * FROM t_customer WHERE id=:id';
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

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link rel="stylesheet" href="css/input.css">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <title>ユーザー情報（編集画面）</title>
</head>

<body>
  <div class="form_group">
    <form action="todo_update.php" method="POST">
      <fieldset>
        <legend>ユーザー情報（編集画面）</legend>
        <a href="todo_read.php">一覧画面</a>
        <div>
          <!-- htmlのタグに初期値として設定 -->
          <div class="form_item">
            <div class="name-group">
              <p class="form_item_label">名前</p><input type="text" name="last_name" value="<?= $record["last_name"] ?>">&nbsp;<input type="text" name="first_name" value="<?= $record["first_name"] ?>">
            </div>
          </div>
          <div class="form_item">
            <div class="rubi-name-group">
              <p class="form_item_label">ふりがな</p><input type="text" name="rubi_last_name" value="<?= $record["rubi_last_name"] ?>">&nbsp;<input type="text" name="rubi_first_name" value="<?= $record["rubi_first_name"] ?>">
            </div>
          </div>
          <div class="form_item">
            <p class="form_item_label">メールアドレス</p><input type="email" name="email" value="<?= $record['email'] ?>">
          </div>
          <div class="form_item">
            <p class="form_item_label">生年月日</p><input type="text" name="birthday" value="<?= $record['birthday'] ?>">
          </div>
          <div class="form_item">
            <p class="form_item_label">性別</p><input type="text" name="sex" value="<?= $record['sex'] ?>">
          </div>
          <div class="form_item">
            <p class="form_item_label">電話番号</p><input type="text" name="tel" value="<?= $record['tel'] ?>">
          </div>
          <div class="form_item">
            <p class="form_item_label">職業</p><select name="job" value="<?= $record['job'] ?>">
              <option value="">選択してください</option>
              <option value="公務員">公務員</option>
              <option value="経営者・役員">経営者・役員</option>
              <option value="会社員">会社員</option>
              <option value="自営業">自営業</option>
              <option value="自由業">自由業</option>
              <option value="専業主婦">専業主婦</option>
              <option value="パート・アルバイト">パート・アルバイト</option>
              <option value="学生">学生</option>
              <option value="その他">その他</option>
            </select>
          </div>
          <div class="form_item">
            <p class="form_item_label">郵便番号</p><input type="text" name="zip" value="<?= $record['zip'] ?>">
          </div>
          <div class="form_item">
            <p class="form_item_label">住所</p><input type="text" name="address" value="<?= $record['address'] ?>">
          </div>
          <!-- idを見えないように送る
      input type="hidden"を使用する!
      form内に以下を追加 -->
          <input type="hidden" name="id" value="<?= $record['id'] ?>">
          <div>
            <button type="submit" class="btn btn-primary">更新</button>
          </div>

      </fieldset>
    </form>
  </div>

</body>

</html>