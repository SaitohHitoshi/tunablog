<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>サイトウのブログ</title>
    <link rel="stylesheet" href="css/multiColumn.css">
    <style media="screen">
        body{
            display: flex;
            flex-direction: column;
        }
        .header{
            height: 70px;
            text-align: center;
            background-color: #eee;
        }
        .glovalNavigation{
            height: 70px;
            text-align: center;
            background-color: #888;
            color: #fff;
        }
        main{
            display: flex;
            min-height: 100vh;
            margin: 10px 0 10px 0;
        }
        .content{
            flex: 1;
            background-color: #eee;
            text-align: center;
            margin-right: 10px;
        }
        .localNavigation{
            text-align: center;
            background-color: #888;
            color: #fff;
            width: 250px;
        }
        .footer{
            height: 70px;
            text-align: center;
            background-color: #eee;
        }
    </style>
</head>

<body>
<header class="header">
    <p>サイトウ</p>
</header>
<div class="glovalNavigation">
    <p>自己紹介文</p>
</div>
<main>
    <div class="content">
        <p>ブログの中身とか入れたい</p>
    </div>
    <div class="localNavigation">
        <p>メニューとか入れたい</p>
    </div>
</main>
<footer class="footer">
    <p>ツイッターとかインスタのアカウント貼りたい</p>
</footer>
</body>
</html>
