<?php

setcookie("login","",time()-1);//for delete the cookie //destroy the cookie 
header("location:login.php");
	
?>