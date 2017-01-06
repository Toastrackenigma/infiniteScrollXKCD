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
		<div id="txt">
			<h1>Infinite Scroll XKCD</h1>
			All comics are from <a href="http://xkcd.com">xkcd.com</a>, by Randall Munroe.<br><br>
			Jump to comic #:
			<select onchange="window.location.href='./#'+this.value;window.location.reload();" id="jump">
				<?php
				$upto = json_decode(file_get_contents("http://xkcd.com/info.0.json"),true)["num"];
				for ($i=1;$i<=$upto;$i++) {
					echo "<option>".$i."</option>";
				}
				?>
			</select>&emsp;<button onclick="window.location.href='./#<?=$upto?>';window.location.reload();">Current</button><br><br>
		</div>
		<div id="loading"></div>
		<div id="loadingMsg">
			<i class="mdi mdi-timer-sand"></i>
		</div>
	</body>
</html>