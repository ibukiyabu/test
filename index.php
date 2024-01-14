<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");

$stmt = $pdo->query("
select * from diworks_keijiban
");



  ?>

    <header>

        <img src="diblog_logo.jpg" alt="ロゴ" class="logo">
        <ul class="menu">
          <li>トップ</li>
          <li>プロフィール</li>
          <li>D.I.Blogについて</li>
          <li>登録フォーム</li>
          <li>問い合わせ</li>
          <li>その他</li>
        </ul>
    </header>

    <div class="container">
        <div class="main">
            <h1 class="title">プログラミングに役立つ掲示板</h2>

            <div class="postspace">
                <h2>入力フォーム</h2>
                <form method="post" class="post" action="insert.php">
                  
                    <label>ハンドルネーム</label>
                    <input type="text" class="name" size="35" name="handlename">

                    <label>タイトル</label>
                    <input type="text" class="post-title" size="35" name="title">

                    <label>コメント</label>
                    <textarea cols="35" rows="7" name="comments"></textarea>

                    <input type="submit" class="submit" value="投稿する">
                </form>
            </div>

          <?php
          while ($row = $stmt->fetch()) {
          echo "<div class='history'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='contents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
          }
            

          ?>

        </div>
        

        <div class="sidebar">
            <div class="links">
              <p class="subtitle">人気の記事</p>
              <a href="">PHPオススメの本</a>
              <a href="">PHP MyAdminの使い方</a>
              <a href="">今人気のエディタTop5</a>
              <a href="">HTMLの基礎</a>
            </div>
    
            <div class="links">
              <p class="subtitle">オススメリンク</p>
              <a href="">ディーアイワークス株式会社</a>
              <a href="">Eclipseのダウンロード</a>
              <a href="">Braketsのダウンロード</a>
            </div>
    
            <div class="links">
              <p class="subtitle">カテゴリー</p>
              <a href="">HTML</a>
              <a href="">PHP</a>
              <a href="">MySQL</a>
              <a href="">JavaScript</a>
            </div>
          </div>

    </div>


    <footer>
        <P>Copyright D.I.Works D.I.Blog is the one which povides A to Z about programing</P>
    </footer>

</body>
</html>