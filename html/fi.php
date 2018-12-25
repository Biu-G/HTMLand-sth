<?php
echo "halo bitch<br>";
$f=$_FILES["file"];
if(!$f["error"]){echo "good no error<br>";}
else {echo $f["error"]."<br>";}
echo "NAMEIS ".$f["tmp_name"]." <br>";
$st="upload/".$f["name"];
echo "check this ".$st."<br>";
if(file_exists($st)){echo "already exist!<br>";}
else{
move_uploaded_file($f["tmp_name"],$st);
echo "DONE!<br>";
}
if(isset($_COOKIE["user"])){
echo "halo".$_COOKIE["user"]."<br>";
}else{
echo "fuck off bitch<br>";
}
?>
