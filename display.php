<?php
   include "connection.php"
?>

<html>
    <head>
        <title>display</title>
        <style>
            body{
                
                background:black;
                background-image:url("wallp.jpg");
                background-repeat:no-repeat;
                background-position:center;
                color:white;
            }
            h1{
                background-color:orange;
                width:400px;
                text-align:center;
                margin:auto;
                border-radius:7px;
                margin-bottom:10px;
            }
            h2{
                margin-top:5px;
                background-color:orange;
                width:300px;
                text-align:center;
                margin:auto;
                border-radius:7px;
            
            }
            table {
                border-radius: 10px;
                width:35%;
                /*border-collapse: collapse;*/
                /*border: 3px solid orange;*/
                text-align: center;
                vertical-align: middle;
                font-size:17px;
            }

            th,td{
                padding:5px;
                border-radius: 3px;
                border:3px solid white;
                
            }
            .center{
                margin-top:30px;
	            margin-left:auto;
	            margin-right:auto;
            }

            .update{
                margin:auto;
                height:40px;
                width:80px;
                background-color:orange;
                color:white;
                text-align:center;
                padding:5px;
                border-radius:5px;
                font-weight:bold;
                font-size:16px;
                margin-top:10px;
            }
            .btn{
                text-align:center;
                margin:auto;
            }
            
            </style>
    </head>
<body>
    <h1>LOGIN SUCCESSFUL!</h1>
    <?php 
    $fid=$_GET['fid'];
    $sql="Select * from details where formid='$fid'";
    $result=mysqli_query($con,$sql);
    /*while($row1=mysqli_fetch_array($result))
    {  
        echo "Date: " ,$row1['date'];
        echo "<br>";
        echo "Name: ",$row1['name'];
    }*/
    while($row1=mysqli_fetch_array($result))
    {   
        
        ?>
        <h2>Welcome <?php echo $row1['name'];?></h2>
        <table class="center">
                    <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td>Formid:</td><td><?php echo $row1['formid'];?></td></tr>
                <tr>
                
                <td>Date:</td><td><?php echo $row1['date'];?></td></tr>
                <tr>
                <td>Name:</td><td><?php echo $row1['name'];?></td></tr>
                <tr>
                <td>Class:</td><td><?php echo $row1['class'];?></td></tr>
                <tr>
                <td>Academic year:</td><td><?php echo $row1['acad'];?></td></tr>
                <tr>
                <td>Date of birth:</td><td><?php echo $row1['day'];?></td></tr>
                <tr>
                <td>Place:</td><td><?php echo $row1['place'];?></td></tr>
                <tr>
                <td>State:</td><td><?php echo $row1['state'];?></td></tr>
                <tr>
                <td>Nationality:</td><td><?php echo $row1['nat'];?></td></tr>
                <tr>
                <td>Religion:</td><td><?php echo $row1['rel'];?></td></tr>      
                <tr>
                <td>Gender:</td><td><?php echo $row1['gen'];?></td></tr>
                <tr>
                <td>Caste:</td><td><?php echo $row1['caste'];?></td></tr>
                <tr>
                <td>Address:</td><td><?php echo $row1['addr'];?></td></tr> 
                <tr>
                <td>Pin code:</td><td><?php echo $row1['pin'];?></td></tr>
                <tr>
                <td>Blood group:</td><td><?php echo $row1['bg'];?></td></tr>
            <?php
                }
            ?>
        </table>
        <div class="btn">
        <button class="update">UPDATE</button>
        
        <button class="update" onclick="window.location.href='http://localhost/school%20webpg/shruti.html';">HOME</button>

</body>
</html>
