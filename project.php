<?php
include "connection.php";


//$formid=$_POST['formid'];
$date=$_POST['date'];
$name=$_POST['name'];
$class=$_POST['class'];
$acad=$_POST['acad'];
$day=$_POST['day'];
$adh=$_POST['adh'];
$place=$_POST['place'];
$state=$_POST['state'];
$nat=$_POST['nat'];
$rel=$_POST['rel'];
$gen=$_POST['gen'];
$caste=$_POST['caste'];
$addr=$_POST['addr'];
$pin=$_POST['pin'];
$bg=$_POST['bg'];
$pwd=$_POST['pwd'];

$sql="insert into details(date,name,class,
acad,day,adh,place,state,nat,rel,gen,caste,
addr,pin,bg,pwd) values('$date','$name','$class',
'$acad','$day','$adh','$place','$state','$nat','$rel','$gen','$caste',
'$addr','$pin','$bg','$pwd')";

$rs=mysqli_query($con,$sql);

if($rs)
{
        header("location:submit.php?fid=".$_POST['fid']."");
}
else{
        echo "failed";
}
mysqli_close($con);
