
<?php if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>KOTTAYAM MUNICIPALITY</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="csstab.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>

<script type="text/javascript">
        
        
     
        
        
        
 
function chk()
{
	var a=document.getElementById("name").value;
	if(a=="")
	{
	document.getElementById("nam").innerHTML="field is empty";	
	}
	else
	{
		document.getElementById("nam").innerHTML="";
	}
}




function chk2()
{
	var c=document.getElementById("password").value.length;
	if(c<=6)
	{
		document.getElementById("pass").innerHTML="password too short";
	}
	else
	{
		document.getElementById("pass").innerHTML="";
	}
}




function chk10()
{
	var c=document.getElementById("password").value.length;
	var t=document.getElementById("confirm").value.length;
	if(c!=t)
	
{
		alert("Password Mismatched");
	}
	else
	{
		document.getElementById("password").innerHTML="";
	}
}










function chk7()
{
	var x=document.getElementById("email").value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		document.getElementById("eml").innerHTML="Invalid E-mail ID";
	}
	else
	{
		document.getElementById("eml").innerHTML="";
	}
}		



 function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
				{
                    return true;
			}
					else if(charCode==32) {
					return true; }
					
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

function onlyNumbers(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if (charCode >= 48 && charCode <= 57) 
                   return true; 
				
					
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }		



</script>


<style type="text/css">
<!--
.style1 {
	color: #F90;
	font-size: 24px;
	font-weight: italic;
	font-family:"Times New Roman", Times, serif;
	alignment-adjust:middle
}
.style4 {font-size: 18px}
-->
</style>




</head>

<body>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="header-wrapper">
						<div id="header">
							<div id="logo">
								<h1><p align="left"><img src="images/t1.gif" alt=""/></p></h1>
								<p>&nbsp;</p>
						  </div>
						</div>
					</div>
					<!-- end #header -->
					<div id="menu-wrapper">
						<div id="menu">
							<ul>
								<li class="current_page_item"><a href="index.php">Home</a></li>
								<li><a href="AboutUs.php" >About Us</a></li>
								<li><a href="Contact.php" >Contact Us</a></li>
								<li><a href="login.php" >Login</a></li>
								
								
				
		
								
								
							</ul>
						</div>
					</div>
					<!-- end #menu -->
					<div id="banner">
						<div id="slider">
							<div class="viewer">
								<div class="reel">
									<div class="slide"><img src="images/kottayam1.jpg" width="980" height="270" alt="" /></div>

									<div class="slide"> <img src="images/a1.jpg" width="980" height="270" alt="" /> </div>
									<div class="slide"> <img src="images/a3.jpg" width="980" height="270" alt="" /> </div>
								</div>
							</div>
						</div>
						<script type="text/javascript">
				$('#slider').slidertron({
					viewerSelector: '.viewer',
					reelSelector: '.viewer .reel',
					slidesSelector: '.viewer .reel .slide',
					advanceDelay: 3000,
					speed: 'slow'
				});
			</script>
					</div>


				






 <?php
session_start();
include("connect.php");
$id = $_SESSION['hxt'];
if(isset($_POST['submit']))
{
$newuser=$_POST["txtnew"];

$new_pass1=$_POST["txtnwp"];
$new_cpass1=$_POST["txtcnf"];
if($new_pass1==$new_cpass1)
{
$sql=mysql_query("update login set username='$newuser',password='$new_pass1',utype='admin' where username='$id'");
echo '<script language="javascript">';
echo 'alert("Succesfully Updated  ")';
echo '</script>';

header("Location: login.php");

}
else
echo '<script language="javascript">';
echo 'alert("Invalid  ")';
echo '</script>';

}

?>

<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
                            
                            
                            
                            
                                                                                         <p align="left"><a href="adminhome.php"><strong> Go Back</strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="login.php"><strong> Logout</strong></a></p>    

							<p class="meta"></p>
							<div class="entry">
								<p>

																	  <form name="change" method="post" action="change.php" enctype="multipart/form-data">
		                                       <p align="center" class="style1">Change Your Password...	    </p>
		                                       <div align="left"></div>
		  <div align="left">
		    <table class="one" align="center" width="450" height="1225" border="2">
		      <tr>
		        <td>&nbsp;</td>
		      </tr>
			   
			  
		       
		      
  
		<tr><td><b>User Name:</b></td><td><input type="text" name="txtnew"  id="email" onBlur="chk7()"size="45" /></td>  <td>&nbsp; &nbsp;</td><td><span id="eml"></span></td></tr> 

  <tr><td><b>New password:</b></td><td><input type="password" name="txtnwp"  id="password" onBlur="chk2()" size="45" required/><span id="pass"></span></td></tr>

  <tr><td><b>Confirm password:</b></td><td><input type="password" name="txtcnf" id="confirm"  onBlur="chk10()" size="45" required/></td></tr>

  
  
  
  
  
  
  
  <tr><td><input type="submit" value="SUBMIT" onClick="alert('Succesfully Updated');" name="submit"/>
		<td><a href="adminhome.php"><font color="#006600"><b>CANCEL</b></font></a></td></tr>
        
    
        
 
     
              
            </table>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
		  </div>
		</form>
	
								
								
								
								
								
						
								
								
								
								
								</p>
							</div>
						</div>
						
						<div style="clear: both;">&nbsp;</div>
					</div>

  
  
  
  
 <div id="sidebar">
						<ul>
							
							<li>
								<h2>Categories</h2>
								<ul>
								<li><b><a href="te.php">Council</a></b></li>
						

							</ul>
								
								
							</li>
							<li>
					<h2>Latest News</h2>
					 <ul>
                     
				       <p align="center">   <marquee  align="middle" behavior="scroll" direction="up" height="150" width="550" scrollamount="2" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()">
                      
					      
				 <?php 
		
      include("connect.php");
		$sql1=mysql_query("SELECT * FROM news  ORDER BY nid asc")or die(mysql_error());
		 while($row=mysql_fetch_array($sql1)){
		 
		 
 	$nid=$row["nid"];
	$description=$row["description"];
	$title=$row["title"];
		 
		   
		  echo "<b><li><a href='News.php?nid=$nid&description=$description&title=$title'>".$row['title']. " </a></</b></li><br>";

		
		}
	    
   ?></marquee></p>
				  </ul>
			    </li>
							<li>
								<h2>Other Services</h2>
								<ul>
								   <li><a href="http://www.kottayammunicipality.in/" target="_blank"><b>Our Official Page</b></a></li>

									<li><a href="https://welfarepension.lsgkerala.gov.in/" target="_blank"><b>Sevana</b></a></li>
									<li><a href="http://www.kudumbashree.org/" target="_blank"><b>Kudumbashree</b></a></li>
									<li><a href="http://cr.lsgkerala.gov.in/" target="_blank"><b>Birth and Death Certificates</b></a></li>
									
								</ul>
							</li>
							
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2016. All rights reserved. Maintained by MCA Department RIT, Pampady.</p>
</div>
<!-- end #footer -->
</body>
</html>
