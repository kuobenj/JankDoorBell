<?php
	if (!empty($_POST['ring_val'])) {
	    //echo "Hello world!"; //Your code here
	    exec("ring.py")
	  }
?>
<html>
<title>
Status' Jank Door Bell
</title>
<body>
	<center>
	<h2>Status' Jank Door Bell</h2>
	<form action="index.php" method="post">
		<input type="hidden" name="ring_val" value="run">
		<input style="height:90%;width:100%;background-color:red;color:#00ff00;font-size:1000%;" type="submit" value="RING">
	</form>
	</center>
</body>
</html>