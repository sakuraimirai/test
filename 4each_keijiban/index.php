<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>PHP</title>
 
<link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body> 


 
<img src="4eachblog_logo.jpg">


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
<side>
  
              <div id="side">
    
<h2>人気の記事</h2>
		<ul>
			<li>PHPオススメ本</li>
			<li>PHP　MyAdminの使い方</li>
			<li>いま人気のエディタTop5</li>
			<li>HTMLの基礎</li>
		</ul>
   

		<h2>オススメリンク</h2>
		<ul>
			<li>インターノウス株式会社</li>
			<li>XAMPPのダウンロード</li>
			<li>Eclipseのダウンロード</li>
			<li>Braketsのダウンロード</li>
		</ul>
    

		<h2>カテゴリ</h2>
		<ul>
			<li>HTML</li>
			<li>PHP</li>
			<li>MySQL</li>
			<li>JavaScript</li>
		</ul>
        </div >
 
       </side>
        

        

    
    

<div id= "left">  
    <h1>プログラミングに役立つ情報</h1>
    <p>2017年1月15日</p>
   

  
 
  


  


<title>お問い合わせフォームを作る</title>
<link rel="stylesheet" type="text/css"href="style.css">
  	 
<h1>入力ネーム</h1>
    
    
    
    
    
<form method="post"action="insert.php">
<div>
<label>ハンドルネーム</label>
<br>
<input type="text" class="text" size="50"name="handlename">
</div>
            
<div>
<label>タイトル</label>
<br>
<input type="text" class="text" size="50" name="title">
</div>

            
            
<div>
<label>コメント</label>    
<br>
<textarea cols="35" rows="7"name="comments"></textarea>
</div>
        
<div>
<input type="submit" class="submit" value="投稿する">
</div>

<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keijiban");
?>
<div class=‘kiji’>
<h3>タイトル</h3>
<div class=‘contents’>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
<div class=‘handlename’>posted by 通りすがり</div>
</div>
</div>


<?php     
while ($row = $stmt->fetch()) {
echo "<div class='kiji'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='contents'>";
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</div>";
echo "</div>";
}
?>     

</form>
    
    
    

  </div>

	 
  
 
</main> 
         
<footer>
    
    copyright(C)internous 4each blog is the one which provides A to Z abaut programing.
</footer>


</body>
</html>