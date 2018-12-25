<?php
$damn=array(
"halo"=>array(
"world",
37
),
"bitch"=>array(
"yep",
false
)
)
?>
<h1>HALO BITCH<h1>
<pre>
<?php
print_r($damn);
echo date("Y/m/d->z")."<br>";
?>
</pre>
<?php require "pure.php" ?>
<?php
$fd=fopen("bitch",'r') or exit("CANNOT OPEN IT");
while(!feof($fd)){
echo fgets($fd);
echo "<br>";
}
fclose($fd);
?>
