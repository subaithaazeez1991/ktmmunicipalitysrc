
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
//session_start();
//include("connect.php");
require_once("connect.php");
$s= "select * from user_reg";
$s1=mysql_query($s);
$i = 1;
while($row = mysql_fetch_array($s1))
  {
  $i++;
  }
$i=$i+100;




	$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
           $string_shuffled = str_shuffle($string);
          $p = substr($string_shuffled, 1, 4);
		   


//$txt = "OTP!";
//$headers = "From: News@example.com" . "\r\n" ;
//mail($emailid,$p,$txt,$headers);
//echo "Mail Sent.";
	
	

		 



		


if(isset($_POST['lbt']))
{
	
	
	
	
	
	
	
	
$userid=$_POST["useridtxt"];
$name=$_POST["nametxt"];
$wardnumber=$_POST["wardnumbertxt"];
$address=$_POST["addresstxt"];
$houseno=$_POST["housenotxt"];
$street=$_POST["streettxt"];
$emailid=$_POST["emailidtxt"];
$mobile=$_POST["mobiletxt"];
$otp1=$_POST["otp1"];
$otp=$_POST["otp"];
$sta=0;
if($otp1==$otp)
{
$q="insert into user_reg(userid,name,wardnumber,address,houseno,street,emailid,mobile,pwd,status) values('".$userid."','".$name."','".$wardnumber."','".$address."','".$houseno."','".$street."','".$emailid."','".$mobile."','".$otp."','".$sta."')";
mysql_query($q);
header("Location: changepassword.php");
}
else
{
echo "one time password is not match";
}
}
		
?>


      

<!--<div style="position:absolute;left:0px;top:0px;right:0px;bottom:0px;height:768px;width:1024px;>-->
<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
							<p class="meta"></p>
							<div class="entry">
								<p>

										  <form name="usereg" method="post" action="user_reg.php" enctype="multipart/form-data">
		                                       <p align="center" class="style1">Type Your Details...	    </p>
		                                       <div align="left"></div>
		  <div align="left">
		    <table class="one" align="center" width="450" height="1225" border="2">
		      <tr>z
		        <td>&nbsp;</td>
		      </tr>
			   
			  

			  <tr><td><b>User Id</b></td><td><input type="Label" name="useridtxt" readonly value="<?php  echo "$i"; ?>" size="10" /></td></tr>
        
		<tr><td><b>Name</b></td><td><input type="text" name="nametxt" id="name" onBlur="chk();" onKeyPress="return onlyAlphabets(event,this);"  size="45" required/></td><td>&nbsp; &nbsp;</td><td width="138"> <span id="nam"></span></td></tr>
        
        
        
        
		<tr><td><b>ward Number</b></td><td><input type="text" name="wardnumbertxt"  onBlur="chk();"  onKeyPress="return onlyNumbers(event,this);" maxlength="2" size="45" /></td></tr>
        
		<tr><td><b>Address</b></td><td><input type="text" name="addresstxt"  size="45" /></td></tr>
        
        
		<tr><td><b>House NO</b></td><td><input type="text" name="housenotxt"  onBlur="chk();"  onKeyPress="return onlyNumbers(event,this);" maxlength="3" size="45" /></td></tr> 
        
		<tr><td><b>Street</b></td><td><input type="text" name="streettxt" size="45" /></td></tr>
        
		<tr><td><b>Email ID</b></td><td><input type="text" name="emailidtxt"  id="email" onBlur="chk7()"size="45" /></td>  <td>&nbsp; &nbsp;</td><td><span id="eml"></span></td></tr> 
        
		<tr><td><b>Mobile</b></td><td><input type="text" name="mobiletxt" onKeyPress="return onlyNumbers(event,this);" maxlength="10" size="45" required /></td></tr>
		<tr><td><b>One time password </b></td><td><input type="Label" name="otp1" readonly value="<?php  echo "$p"; ?>" size="45" /></td></tr>
 
		<tr><td><b> Enter one time Password</b></td><td><input type="text" name="otp"  id="password" size="45"></td> </tr>
        
  
			  
		      <tr><td><input type="submit" value="Insert" onClick="alert('Succesfully Inserted');" name="lbt"/>
              
              
	 <td> <a href="index.php"><font color="#003300"><b>Cancel</b></font></a> </td>

</tr>

              
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