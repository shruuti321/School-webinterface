<?php
//$login=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include "registration.php";
  
    $fid=$_POST['fid'];
    $pswd=$_POST['pswd'];
    $sql="SELECT * FROM Details WHERE formid='$fid' AND pwd ='$pswd'";
    $result=mysqli_query($con,$sql);
    $no_of_rows=mysqli_num_rows($result);
    if($no_of_rows==1)
    {
        //$login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['fid']=$fid;
        //echo "<h1><center> Login successful </center></h1>"; 
        
       // echo "<h2><center> Welcome $fid </center></h2>"; 
       header("location: display.php?fid=".$_POST['fid']."");
       

        }  
        else{  
            $showError=true;
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
        
        //header("location: Rooms.php");
        //echo"login complete";
        //  echo var_dump($_SESSION); 
    }
    

?>

