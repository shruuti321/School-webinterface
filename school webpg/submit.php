<?php
    include "connection.php"
?>

<html>
    <head><title>Submitted</title>
    <style>
            body{
                
                background:lightblue;
                color:white;
            }
            .box{
                background:transparent;
                background:linear-gradient(to top,rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
	
                width:280px;
                height:200px;
                text-align:center;
                margin:auto;
                margin-top:180px;
                border-radius:7px;
            }

            h1{
                margin:auto;
                font-size:40px;
            }
            h2{
                margin-top:5px;
                
                margin-bottom:3px;
            }
            
            .btn{
                margin-top:20px;
                width:80px;
                height:40px;
                font-size:15px;
                border-radius:5px;
                background-color:orange;
                color:white;
                /*margin-left:4px;*/
                margin-bottom:5px;
                margin-left:auto;
                font-weight:bold;
                
            }
            </style>
    </head>
    <body>
        <?php
            $fid=$_GET['fid'];
;
            $sql="select * from details where formid='$fid'";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            hello <?php echo $row['name'];?>
       <div class="box">
            <h1>Registration Successful!</h1>
            <h2>Your Formid is:<?php echo $row['formid']; ?></h2>
        
                <button class="btn" value="HOME" onclick="window.location.href='http://localhost/school%20webpg/shruti.html';">HOME</button>
                
         
            
            <?php
            }
            ?>
        </div>
    </body>
    </html>