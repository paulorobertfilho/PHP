<?php
include('conn.php');

for($x = 0; $x <50; $x++){
$file = file_get_contents('https://loripsum.net/api/3/short',true);
$uTime = time();
$query = "INSERT INTO `bposts` ( `content`, `date`) VALUES ('".$file."' ,$uTime )";
$result = mysqli_query($link,$query);
// echo $query;
}
