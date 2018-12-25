<?php
$name_err="";
$name=isset($_GET["name"])?$_GET["name"]:"";
if(empty($name)){
$name_err="NAME IS A MUST BITCH ! BUCK FILL YOUR NAME!<br>";
}else if(!preg_match("/^[a-zA-Z ]*$/",$name)){
$name_err="THATS NOOT YOUR NAME BITCH!<br>";
}
?>


<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
NAME:<input type="text" name="name">
<span class="error">*<?php echo $name_err;?></span>
<br>
<input type="submit" name="submit">
</form>

