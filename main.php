<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>phpでフォーム送信</title>
</head>
<body>
<form action="./confirm.php" method="post">
    <div id="contents">
        <div id="name">
          お名前　<input type="text" name="name">
        </div>
        <div id="mail">
          メールアドレス　<input type="text" name="mail">
        </div>
        <div id="toiawase">
          お問い合わせ内容　<textarea name="toiawase"></textarea>
        </div>
        </br>
        </br>
        <input type="submit" value="確認">
    </div>
</form>
</body>
</html>