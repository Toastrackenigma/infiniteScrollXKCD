<?php
$limit = json_decode(file_get_contents("http://xkcd.com/info.0.json"),true)["num"];
if (isset($_GET["xkcd"])&&intval($_GET["xkcd"])) {
	for ($i=$_GET["xkcd"];$i<$_GET["xkcd"]+10;$i++) {
		if ($i<=$limit&&$i!=404) {
			$json = json_decode(file_get_contents("http://xkcd.com/".$i."/info.0.json"),true);
			echo "<div class=\"comic\"><br><h2>".$i.": ".$json["title"]."</h2><strong>Date:</strong> <em>".$json["year"]."-".$json["month"]."-".$json["day"]."</em><br><br><img draggable=\"false\" src=\"".$json["img"]."\"><br><br><em><strong>Alt Text:</strong> ".htmlentities($json["alt"])."</em><br><br></div><br><br>";
		}
	}
}
?>
