<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style2.css"/>
    <title>ログイン</title>
</head>

<body>

    <header>
    <div class="container">
    <div class="login-form">
    </div>
</header>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                </div>
            </div>
        </nav>
    </header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。
 -->
 <div class="input-form">
    <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>
    
    <div class="karte-form">
    <a class="navbar-brand" href="index.php">カルテ入力</a>
<div></div>

</body>

</html>
