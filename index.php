<!DOCTYPE html>
<html>
	<head>
		<title>Infinite Scroll XKCD</title>
		<meta name="viewport" content="user-scalable=no, width=device-width, maximum-scale=1.0">
		<link href="http://cdn.materialdesignicons.com/1.7.22/css/materialdesignicons.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="main.css" rel="stylesheet">
		<script src="main.js"></script>
	</head>
	<body>
		<div id="header">
			<h1><span class="link" onclick="window.location.href='./#1309';window.location.reload();">Infinite Scroll</span> XKCD</h1>
			All comics are from <a href="http://xkcd.com">xkcd.com</a>, by Randall Munroe.<br><br>
		</div>
		<div id="txt"></div>
		<div class="fab" onclick="prevTen()" id="back"><i class="mdi mdi-arrow-left"></i></div>
		<div class="fab" onclick="modalShow('1')"><i class="mdi mdi-dots-vertical"></i></div>
		<div id="overlay"></div>
		<div id="modal"><i class="mdi mdi-timer-sand"></i></div>
		<div id="modal1">
			<strong>Jump</strong><br><br>
			<small>
				Select Comic:
				<select id="jump">
					<?php
					$upto = json_decode(file_get_contents("http://xkcd.com/info.0.json"),true)["num"];
					echo "<option value=\"".$upto."\">Latest</option>";
					for ($i=1;$i<=$upto;$i++) {
						echo "<option>".$i."</option>";
					}
					?>
				</select><br><br>
				<button onclick="window.location.href='./#'+$('jump').value;window.location.reload();">OK</button><button onclick="modalHide()">CANCEL</button>
			</small>
		</div>
	</body>
</html>
