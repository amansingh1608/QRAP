	<?php
	session_start();
	if(isset($_SESSION["user"]))
	{}
	else
		{echo "you are not logged in :";
		exit();	
		}
	?>
	<html>
	<head>

<link type="text/css" rel="stylesheet" href="save.css">

	</head>


    <body bgcolor=#000000>


    	

        <form action="QRGenerator.php" method="post">
        	<div class="container"><br> <br>
        		<center><img src="QRAP.png" height="250px" width="480px"> </center>
        		<h1> <center>  <font face="Sylfaen" size="30px" color="#181919"> <b> Subject Code </font> </center></b> </h1> <br> 
    	 <center>
         <input type="text" name="name" placeholder="Subject Code">	<br>
          <span>
        <button class="button"> <span> Submit </span> </button> 
  		  </span>
  		</div>
	    </form>
		</center>
	    

	</body>

	</html>