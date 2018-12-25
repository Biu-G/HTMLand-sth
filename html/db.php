<?php
$server="localhost";
$username="root";
$password="megvii";
$dbname="pdb";
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
echo "OOPS ".$conn->connect_error."<br>";
}else{
echo "CONNECTED<br>";
}
$sql="update fighters set name='BB' where id=3;";
//$sql="select * from fighters where name='Buck' order by id DESC ;";
$res=$conn->query($sql);
/*while($row=mysqli_fetch_array($res)){
echo $row['id']." ".$row['name']."<br>";
}*/
if(!$res){
echo "OOPS ".$res->error."<br>";
}else{
echo "UPDATED<br>";
}
$conn->close();
?>
