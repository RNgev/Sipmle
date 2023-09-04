<?php

$file = fopen("info.txt", "w");
$txt = "lat " . $_GET["lat"] . "long" . $_GET["long"];
fwrite($file, $txt);
fclose($file);

?>
