<style>
body {
background-color: gray;
} 
</style>
<font color="white">
<a href="/">« Back</a></br>
<?php
function listdir($dir){
	$dirstring = "";
	$files = scandir($dir);
	foreach($files as $file) {
		if(pathinfo($file, PATHINFO_EXTENSION) == "png" AND $file != "index.php"){
			$dirstring .= "<li><a href='$dir/$file'>$file</a></li>";
		}
	}
	return $dirstring;
}
echo listdir(".");
?>
</font>
