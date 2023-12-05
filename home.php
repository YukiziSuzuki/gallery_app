<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ホーム</title>
<link href="Page/home.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<ul class="bigbotan">
	
	<li><div class="box1">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=春&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="春" class="botan">
				<input type="hidden" name="word" value="春" >
				<input type="hidden" name="color" value="#FFBDED">

		</form>
	</div></li>
	
	<li><div class="box2">
	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=夏&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>

		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="夏" class="botan">
				<input type="hidden" name="word" value="夏" >
				<input type="hidden" name="color" value="#ADFF2F">

		</form>
	</div></li>
	
	<li><div class="box3">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=秋&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="秋" class="botan">
				<input type="hidden" name="word" value="秋" >
				<input type="hidden" name="color" value="#EB6238">

		</form>
	</div></li>
		
	<li><div class="box4">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=冬&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="冬" class="botan">
				<input type="hidden" name="word" value="冬" >
				<input type="hidden" name="color" value="#6495ED">

		</form>
	</div></li>	
		
	</ul>
	
	<ul class="bigbotan">
	
	<li><div class="box8">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=犬&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>
		<form action="Page/gallery.php" method="get" class="botan">

			<input type="submit" value="犬" class="botan">
			<input type="hidden" name="word" value="犬" >
			<input type="hidden" name="color" value="#DEB887">

		</form>
	</div></li>
	
	<li><div class="box9">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=猫&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="猫" class="botan">
				<input type="hidden" name="word" value="猫" >
				<input type="hidden" name="color" value="#2F4F4F">

		</form>
	</div></li>	
	</ul>
	
	<ul class="bigbotan">
	
	<li><div class="box5">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=絶景&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="絶景" class="botan">
				<input type="hidden" name="word" value="絶景" >
				<input type="hidden" name="color" value="#FFFF00">

		</form>
	</div></li>
	
	<li><div class="box6">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=滝&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="滝" class="botan">
				<input type="hidden" name="word" value="滝" >
				<input type="hidden" name="color" value="#00BFFF">

		</form>
	</div></li>	
		
	<li><div class="box7">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=城&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="城" class="botan">
				<input type="hidden" name="word" value="城" >
				<input type="hidden" name="color" value="#D3D3D3">

		</form>
	</div></li>
	</ul>
	
	
	<ul class="bigbotan">
	
	<li><div class="box1">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=桜&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="桜" class="botan">
				<input type="hidden" name="word" value="桜" >
				<input type="hidden" name="color" value="#FFBDED">

		</form>
	</div></li>
	
	<li><div class="box2">
	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=森&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>

		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="森" class="botan">
				<input type="hidden" name="word" value="森" >
				<input type="hidden" name="color" value="#ADFF2F">

		</form>
	</div></li>	
		
	<li><div class="box3">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=紅葉&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="紅葉" class="botan">
				<input type="hidden" name="word" value="紅葉" >
				<input type="hidden" name="color" value="#EB6238">

		</form>
	</div></li>	
		
	<li><div class="box4">	
	<?php
		//FlickrAPI用リクエストURLを生成する
		$req = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7fb7b8498b0bae2a0bf5035c803eabe&format=rest&text=雪&extras=url_m&sort=interestingness-desc&per_page=15";
		//FlickrAPIを用いてXMLデータをダウンロードする
		$xml= simplexml_load_file($req);

		$r = mt_rand(0,10);

		$url_m = $xml->photos->photo[$r]->attributes()->url_m;
		echo "<img src=".$url_m." alt=/>";	
	?>


		<form action="Page/gallery.php" method="get" class="botan">

				<input type="submit" value="雪" class="botan">
				<input type="hidden" name="word" value="雪" >
				<input type="hidden" name="color" value="#6495ED">

		</form>
	</div></li>		
		
	</ul>	
	
</body>
</html>