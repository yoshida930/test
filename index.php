<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>4eachblog　掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=yuki1;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");
 ?>    
<img src="4eachblog_logo.jpg"/>
<header>
	<ul>
		<li>トップ</li>
		<li>プロフィール</li>
		<li>4eachについて</li>
		<li>登録フォーム</li>
		<li>問い合わせ</li>
		<li>その他</li>
	</ul>
</header>
<main>
	<div class="main-container">
		<div class="left">
			<h1>プログラミングに役立つ掲示板</h1>
             <h2>入力フォーム</h2>
              <form method="post" action="insert.php">
                <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="60" name="handlename">
                </div>

                <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="60" name="title">
                </div>

                <div>
                <label>コメント</label>
                <br>
                <textarea cols="60" rows="7" name="comments"></textarea>
                </div>

                <div>
                <input type="submit" class="submit" value="投稿する"> 
                </div>
              </form>
            <br>
         <?php
            while ($row = $stmt->fetch()){
                echo "<div class='gray_box'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='comments'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo "</div>";
                echo "</div>";
            }
         ?>
        </div>
      </div>   
		<div class="right">
			<h2>人気の記事</h2> 
			<ul>
				<li>PHP オススメ本</li>
				<li>PHP MyAdminの使い方</li>
				<li>今人気のエディタ Top5</li>
				<li>HTMLの基礎</li>
			</ul>
			<h2>オススメリンク</h2>
			<ul>
				<li>インターノウス株式会社</li>
				<li>XAMPPのダウンロード</li>
				<li>Eclipsのダウンロード</li>
				<li>Bracketsのダウンロード</li>
			</ul>
			<h2>カテゴリ</h2>
			<ul>
				<li>HTML</li>
				<li>PHP</li>
				<li>MySQL</li>	  
				<li>JavaScript</li>
			</ul>
		</div>    
</main>
<footer>
copyright 　internous｜ 4each blog is the one witch provides A to Z  about programing.
</footer>
 </body>
</html>