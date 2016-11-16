
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
<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
                            
                            
                            
                            
                                                                         <p align="left"><a href="adminhome.php"><strong> Go Back</strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="login.php"><strong> Logout</strong></a></p>    
       
                            
                            
                            
                            
							<p class="meta"></p>
							<div class="entry">
								<p>
            
		<form name="view" method="post" action="">
		
		  <p>&nbsp;</p>
		  <table align="left" width="400" border="2" class="one">
		   
			   

		<tr><th><span class="style2">User ID</span></th>
		<th><span class="style2">Complaint Id</span></th>

		<th><span class="style2">Name</span></th>
        		<th><span class="style2">Address</span></th>


		<th><span class="style2">Compalint</span></th>
		<th><span class="style2">Delete</span></th>


<?php
//session_start();
require_once("connect.php");
//$id = $_SESSION['din'];
$query = "select s.userid,s.name,s.address,c.userid,c.complaintid,r.sta,r.userid,r.complaintid,r.complaint,r.committee,r.subject from user_reg s ,adminview r,complaint_details c where r.complaintid=c.complaintid  and r.userid=c.userid and s.userid = c.userid and r.userid=s.userid order by r.complaintid desc"; //complaints from users are forwarded by the councilors are fetch from the database for admin view
$result=mysql_query($query);
?>


<br /><br /><br /><br />
		
 
     
           		


<?php
$i=1;
while($row = mysql_fetch_array($result))
	{
		
		$complaintid=$row['complaintid'];
		$id=$row['userid'];
	    $nam=$row['name'];
		$add=$row['address'];
		//$str=$row['street'];
		$commi=$row['committee'];
		$sub=$row['subject'];
		$com=$row['complaint'];
		//$ima=$row['image'];

				$sta=$row['sta'];


		echo "<tr>";
   echo "<td><input type='checkbox' name='check[$i]' value='".$row['complaintid']."'/>";   
  $i++;
  
  
  
				
		?>
        
      
      
      
     
      
     <?php echo $id; ?>
<td>     <?php echo $complaintid; ?></td>

		 <td><?php echo $nam; ?></td>
        		<td><?php echo $add; ?></td>


		<td><span class="post">   <?php  echo "<a href='12.php?complaintid=$complaintid&committee=$commi&subject=$sub&complaint=$com'>$sta</a>";  ?>
</span></td> <!--The page is redirected to 12.php after select the link-->

      
      
      
 <td> <?php echo "<input type='submit' name='reject' value='Delete'/>";?>

</td>   
      
      
   
    
</tr>
  
		
<?php







if(isset($_POST['reject'])){
                if(isset($_POST['check'])){
                    foreach ($_POST['check'] as $value){
                        $sql = "DELETE from adminview WHERE complaintid= '$value'";
						$q="DELETE from complaint_details WHERE complaintid= '$value'";
                        mysql_query($sql) or die (mysql_error());
						                        mysql_query($q) or die (mysql_error());

                    }
                }
				header("Location: complaintview.php");
            }			




 
} 
?> 
		
 
        



</table>
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
