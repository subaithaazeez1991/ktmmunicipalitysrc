<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form name="Memdetails" method="post" action="">
		
		<table align="right" width="400" border="2">

		<tr><td><b>to:</b></td><td><input type="text" name="to" size="30" /></td></tr>
		<tr><td><b>title:</b></td><td><input type="text" name="title" size="30" /></td></tr>
        <tr><td><b>matter:</b></td><td><input type="text" name="matter" size="30" /></td></tr>
		<tr><td><input type="submit" value="Insert" name="lbt"/></td><td><a href="Index.php"><font color="#FFFFFF" size="3"><b>Cancel</b></font></a></td></tr>
		</table>
		</form>
		
		<?php
		
		
			
		
		
		
		
        if(isset($_POST["lbt"]))
        {
			
			
			
			


			
			
			
			
			
			
			
			
			
			
			
			   // $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
           //$string_shuffled = str_shuffle($string);
           //$p = substr($string_shuffled, 1, 4);
		   // $p = base64_encode($password);

			  
			   $a=$_POST["to"];
			   $b=$_POST["title"];
			   $d=$_POST["matter"];
			  
			   
//$to = "somebody@example.com";
//$subject = "My subject";
$txt = "OTP!";
$headers = "From: News@example.com" . "\r\n" ;
mail($a,$b,$d,$headers);
echo "Mail Sent.";

			   
			/*if((strcmp($a,"")==0)&&(strcmp($b,"")==0)){
			   	
			   }else*/{
				   require_once("connect.php");
				   $q="insert into authority values(".$a."','".$b."','".$d."')";			   
				   mysql_query($q);
				   
			   }
	   }
       
        ?>
</body>
</html>