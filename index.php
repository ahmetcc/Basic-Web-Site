<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="ayar.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant" />
    <link href="cssmenu/cssmenu.css" rel="stylesheet" />
	
	<title>
	</title>
</head>
<body>
	<div class="ust">
		<h1>Kolay PHP Dersleri</h1>
		<b>Youtube Kanalı</b>
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
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Creative</a></li>
        <li><a href="#">Studio</a></li>
        <li><a href="#">Press</a></li>
        <li><a href="#">Contact</a></li>
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
		
	</div>

	<div class="footer">
		
	</div>
</body>
</html>