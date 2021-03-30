<?php
$server="localhost";
$username="root";
$pass="";
$dbname="trial";
$con=mysqli_connect($server,$username,$pass,$dbname);
if(!$con)
{
    echo "not connected susseccfully\n";
}
else
{
    $usname=$_POST["username"];
    $opswd=$_POST["oldpswd"];
    $npswd=$_POST["newpswd"];
    $real=mysqli_query($con,"SELECT `pswd` FROM `mytable` WHERE `name` = '$usname'");
    $arr=mysqli_fetch_row($real);
    $realpwd=$arr[0];
    echo $realpwd;
    if($realpwd==$opswd)
    {
        $query="UPDATE `mytable` SET `pswd` = '$npswd' WHERE `mytable`.`pswd` = '$opswd';";
        mysqli_query($con,$query);
    }
else{
    echo "invalid password";
}
}

?>