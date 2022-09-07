<?php

$age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム02</title>
</head>

<body>
    <form action="02_result.php" method="POST">
        <div>
            <label for="name">名前</label><br>
            <input type="text" name="name" id="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

</body>

</html>
