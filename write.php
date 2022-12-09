<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $satisfy = $_POST['satisfy'];
    $comp = $_POST['comp'];
    $time = date('Y-m-d H:i:s');

    // ファイルに書き込み

    $file = fopen('data/data.txt', 'a');
    fwrite($file, $time ."\t". $name ."\t". $email ."\t". $satisfy ."\t". $comp . "\n");
    fclose($file);
    
?>


<html>

    <head>
        <meta charset="utf-8">
        <title>データ登録</title>

        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/write.css">
    </head>

    <body>
        <div class="wrapper confirm">

            <div class="confirm_main">
                <h1>書き込みしました。</h1>

                <ul class="confirm">
                    <li><a href="read.php">確認する</a></li>
                    <li><a href="post.php">戻る</a></li>
                </ul>
            </div>

        </div>
    </body>

</html>
