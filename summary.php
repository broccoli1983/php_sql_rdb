<?php
include('functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行

$sql = 'SELECT * FROM t_customer
          INNER JOIN (SELECT id, COUNT(id) AS cnt
          FROM t_customer GROUP BY id) AS cnt_cst
          ON t_customer.id = cnt_cst.id';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output = "";
    // foreach ($result as $record) {
    //     $output .= "<tr>";
    //     $output .= "<td>{$record["id"]}</td>";
    //     $output .= "<td>{$record["last_name"]}</td>";
    //     $output .= "<td>{$record["first_name"]}</td>";
    //     $output .= "<td>{$record["rubi_last_name"]}</td>";
    //     $output .= "<td>{$record["rubi_first_name"]}</td>";
    //     $output .= "<td>{$record["email"]}</td>";
    //     $output .= "<td>{$record["birthday"]}</td>";
    //     $output .= "<td>{$record["gender"]}</td>";
    //     $output .= "<td>{$record["tel"]}</td>";
    //     $output .= "<td>{$record["job"]}</td>";
    //     $output .= "<td>{$record["zip"]}</td>";
    //     $output .= "<td>{$record["address"]}</td>";
    //     // edit deleteリンクを追加
    //     $output .= "<td>
    //        <button><a href='todo_edit.php?id={$record["id"]}'>編集</a></button>
    //        </td>";
    //     $output .= "<td>
    //        <button><a href='todo_delete.php?id={$record["id"]}'>削除</a></button>
    //        </td>";
    //     // $output .= "<td><a href='todo_edit.php?id={$record["id"]}' class='iconlink'><i class='fas fa-edit'></i></a></td>";
    //     // $output .= "<td><a href='todo_delete.php?id={$record["id"]}' onclick='return confirm_del();' class='iconlink'><i class='fas fa-trash-alt'></i></a></td>";
    //     $output .= "</tr>";
    // }

    // $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
    // 今回は以降foreachしないので影響なし
    unset($record);
}
$cnt .= "<p>{$record["cnt"]}</p>";
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>アカウント登録状況</title>
</head>

<body>
    <fieldset>
        <legend>アカウント登録状況</legend>
        <a href="todo_input.php">ユーザー情報一覧</a>
        <table border="1" class="table table-hover" class="table-responsive">
            <thead>
                <p>ユーザー登録数</p>
            </thead>
            <tbody>
                <?= $cnt ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>