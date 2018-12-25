<?php
$to="403113270@qq.com";
$subject="holo";
$message="do you hear me IM BUCK!";
$from="403113270@qq.com";
$headers="FROM-? ".$from;
if(mail($to,$subject,$message,$headers)){
echo "SENT !"."<br>";
}else {echo "FAILED"."<br>";}
?>
