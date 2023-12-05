<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ギャラリー</title>
<link href="gallery.css" rel="stylesheet" type="text/css">
</head>

<?php
	//入力されたワードを変数にセットする
	if(isset($_GET['word'])&&isset($_GET['color'])) {
		$word = $_GET['word'];
		$color = $_GET['color'];
	} else {
		$word= "夏";
		$color = "#00FFCB";
	}
?>
	
	
<body bgcolor = <?php echo $color ?>>
	
	<?php
	
	//FlickrAPI用リクエストURLを生成する
	$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=".$word."&extras=url_m&sort=interestingness-desc&per_page=300";
	//FlickrAPIを用いてXMLデータをダウンロードする
	$xml= simplexml_load_file($req);
	
	?>
	<div class="box1">
	<ul class="gazou">
	<?php
		
	for($i=0; $i<5; $i++){
		$r = mt_rand(0,250);
		$url_q = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<li><img src=".$url_q." alt=/></li>";
	}
	
	?>
</ul></div>	


	<div class="box1">
		<ul class="gazou">		
		<?php
			$r = mt_rand(0,250);
			$url_q = $xml->photos->photo[$r]->attributes()->url_m;
		?>
			<li><img src="<?php echo $url_q ?>" alt=/ class="left"></li>	


		<li><div class="box17">
			<p style = "color:<?php echo $color?>" class="mozi"><?php echo $word; ?></p>
			</div></li>

		<?php	
			$r = mt_rand(0,250);
			$url_q = $xml->photos->photo[$r]->attributes()->url_m;
		?>		
		<li><img src="<?php echo $url_q ?>" alt=/ class="right"></li>
		</ul>
	</div>
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=7; $i<12; $i++){
		$r = mt_rand(0,250);
		$url_q = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<li><img src=".$url_q." alt=/></li>";
	}
?>
</ul></div>
	
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=12; $i<16; $i++){
		$r = mt_rand(0,250);
		$url_q = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<li><img src=".$url_q." alt=/></li>";
	}
?>
</ul></div>
	
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=16; $i<21; $i++){
		$r = mt_rand(0,250);
		$url_q = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<li><img src=".$url_q." alt=/></li>";
	}
?>
</ul></div>
	
	
<div class="box1">
<ul class="gazou">
<?php
	for($i=21; $i<25; $i++){
		$r = mt_rand(0,250);
		$url_q = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<li><img src=".$url_q." alt=/></li>";
	}
?>
</ul></div>	
	
<div class="bottan">
	<a href="../home.php" class="btn-circle-border-double">戻る</a>
</div>	
	
	
	
</body>
</html>