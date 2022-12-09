<html>

    <head>
        <meta charset="utf-8">
        <title>データ入力</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/post.css">
    </head>

    <body>
        <div class="wrapper">

            <form action="write.php" method="post" class="form">

                    お名前: <input type="text" name="name" class="text_form">
                    email: <input type="text" name="email" class="text_form">
                    満足度:
                    <div class="satisfy radio">
                        <input type="radio" name="satisfy" value="1">1 不満足
                        <input type="radio" name="satisfy" value="2">2 やや不満足
                        <input type="radio" name="satisfy" value="3">3 普通
                        <input type="radio" name="satisfy" value="4">4 やや満足
                        <input type="radio" name="satisfy" value="5">5 満足
                    </div>
                    理解度:
                    <div class="comp radio">
                        <input type="radio" name="comp" value="1">1 理解出来なかった
                        <input type="radio" name="comp" value="2">2 やや理解出来なかった
                        <input type="radio" name="comp" value="3">3 どちらでもない
                        <input type="radio" name="comp" value="4">4 やや理解出来た
                        <input type="radio" name="comp" value="5">5 理解出来た
                    </div>
                <input type="submit" value="送信" class="form_btn">
            </form>

        </div>
    </body>

</html>