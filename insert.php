<?php

//1. POSTデータ取得
$name = $_POST['name'];
$old = $_POST['old'];
$date = $_POST['date'];
$kinki = $_POST['kinki'];
$chart = $_POST['chart'];

//2. DB接続します
  //ザンプデーターベース
  try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=gs_db_class;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }




//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO kadai08_db1(id, name, old, date, kinki, chart)
                           VALUES(NULL, :name, :old, :date, :kinki, :chart)');

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':old', $old, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':kinki', $kinki, PDO::PARAM_STR);
$stmt->bindValue(':chart', $chart, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{

  
  //５．index.phpへリダイレクト
  header('Location: index.php');
}
?>
