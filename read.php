<html>

    <head>
        <meta charset="utf-8">
        <title>データ表示</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/read.css">
    </head>
    
    <body>
        
        <div class="wrapper display">

            <table class="table" border="1">

                <tr>
                    <th>時間</th>
                    <th>名前</th>
                    <th>email</th>
                    <th>満足度</th>
                    <th>理解度</th>
                </tr>
                <?php

                    // ファイルから読み込み
                    $openFile = fopen('./data/data.txt', 'r');
                    while (!feof($openFile)) {
                        $line = fgets($openFile);
                        if (trim($line) != null){
                            list($time,$name,$email,$satisfy,$comp) = explode("\t",$line);
                            echo "<tr>\n";
                            echo "<td>$time</td><td>$name</td><td>$email</td>";
                            echo "<td>$satisfy</td><td>$comp</td>\n";
                            echo "</tr>\n";
                        }
                    };
                    fclose($openFile);

                ?>
            </table>
            
        </div>
    
    </body>

</html>