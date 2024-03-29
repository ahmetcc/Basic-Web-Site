<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="ayar.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant" />
    <link href="cssmenu/cssmenu.css" rel="stylesheet" />
    <style>
    	body {
            margin:0;
        }
        #menuDemo { text-align:center; padding:30px 16px;
    </style>
	
	<title>
	</title>
</head>
<body>
	<div class="ust">
		<h1>Kolay Yazılım Dersleri</h1>
		<b>Ahmet ÇAKIR</b>
	</div>
	<div id="menuDemo">
<!--start CssMenu-->
<div class="menu-icon-wrapper">
	<div class="menu-icon" onclick="toggleCssMenu(this)">
		<div class="three-line">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<div id="cssmenu">
    <ul>
        <li><a href="index.php">Anasayfa</a></li>
        <li><a href="index.php?git=php">PHP</a></li>
        <li><a href="index.php?git=C">C++</a></li>
        <li><a href="index.php?git=hakkimda">Hakkımda</a></li>
        <li><a href="index.php?git=iletisim">İletişim</a></li>
    </ul>
</div>
<script>
    function toggleCssMenu(icon) {
        var cssmenu = document.getElementById('cssmenu');
        if (icon.className.indexOf('active') == -1) {
            icon.className = 'menu-icon active';
			cssmenu.style.display = "block";
			setTimeout(function(){cssmenu.className = 'active';},0);            
        }
        else {
            icon.className = 'menu-icon';
			cssmenu.className = '';
			setTimeout(function(){cssmenu.style.display = "none";},411); 
        }
    }
</script>
<!--end CssMenu-->
</div>

	<div class="icerik">
		<?php 

		$a = @$_GET['git'];

		switch ($a) {
			case 'php':
				include 'php.php';
				break;

			case 'C':
			include 'C.php';
			break; 

			case 'hakkimda':
			include 'hakkimda.php';
			break;

			case 'iletisim':
			include 'iletisim.php';
			break;

			default:
			include 'anasayfa.php';
			break;
		}



		 ?>
		
	</div>

	<div class="footer">
		
	</div>
</body>
</html>