<?php

$gorokusya = file_get_contents("db/gorokusya.txt");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>迫真ゲーム部語録集</h1>
    </section>
    <section>
        <h1>語録所有者者一覧</h1>
        <p><?php echo $gorokusya;?></p>
    </section>
    <section>
        <h1>語録所有者追加フォーム</h1>
        <form action="syatouroku.php" method="POST">
            <input type="text" name="name">
            <input type="submit">
        </form>
    </section>
</body>

</html>
