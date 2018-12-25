<?php
$servername_db="localhost";
$username_db="root";
$password_db="megvii";
$db_name="ali";
$conn=new mysqli($servername_db,$username_db,$password_db,$db_name);
if($conn->connect_error){
    dir("CONN FAILED->".$conn->connect_error);
}
echo "CONNECTED TO DB!<br>";
$username=$_POST["username"];
$password=$_POST["password"];
$sql="select * from info0 where username='{$username}' and password='{$password}'";
echo $sql,"<br>";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "WELCOME!"."{$username}<br>";
}else{
    echo "UR NOT REGISTERED<br>";
}
mysqli_close($conn);
?>
