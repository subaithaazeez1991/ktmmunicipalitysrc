
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>KOTTATAM MUNICIPALITY</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="csstab.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.0.js"></script>
</head>



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









<?php

session_start();
include("connect.php");

?>

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


//$id = $_SESSION['din'];
  $complaintid=$_GET['complaintid'];

 $query = "select * from complaint_details where complaintid=$complaintid ";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
		 
 		$userid=$row["userid"];
	//$complaintimage=$row["complaintimage"];
	
	 $qu = "select * from user_reg where userid=$userid ";
$re=mysql_query($qu);


$row = mysql_fetch_array($re);

if(isset($_POST['lbt']))
{
$complaintid=$_POST["complaintid"];
$userid=$_POST["userid"];
//$name=$_POST["name"];
//$wardnumber=$_POST["wardnumber"];
$committee=$_POST["committee"];
//echo $committee;
$subject=$_POST["subject"];
//$houseno=$_POST["houseno"];
$street=$_POST["street"];
//$emailid=$_POST["emailid"];
//$mobile=$_POST["mobile"];
$complaint=$_POST["complaint"];
$complaintimage=$_POST["complaintimage"];


					

$q=mysql_query("insert into adminview(complaintid,userid,committee,subject,complaint,compalaintimage)values('".$complaintid."','".$userid."','".$committee."','".$subject."','".$complaint."','".$image_name."')");
header("Location: councilerhome.php");
}
?>
<?php

//session_start();
//include("connect.php");
//$id = $_SESSION['abc'];

//$u1=mysql_query("select userid from user_reg emailid='$id'");

//if($u1)
//{ 
 //while($res=mysql_fetch_array($u1))
//{
  //$user=$res['userid'];

//}
//}


?>		
<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
                            
                            
                                                                                            <p align="left"><a href="11.php"><strong> Go Back</strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="login.php"><strong> Logout</strong></a></p>

							<p class="meta"></p>
							<div class="entry">
								<p>
		<form name="complaint" method="post" action="" enctype="multipart/form-data">
		
		  <p>&nbsp;</p>
		  <table align="right" width="550" border="2" class="one">              
		
        
        
        
        
       
        
        
        
        
		<tr><td><b>complaintid:</b></td><td><input type="Label" name="complaintid" readonly value="<?php  echo "$complaintid"; ?>" size="10" /></td></tr>
        
				<tr><td><b>userid:</b></td><td><input type="Label" name="userid"  value="<?php  echo "$userid"; ?>"size="45" /></td></tr>

        
		<tr><td><b>Name</b></td><td><input type="Label" name="name" value="<?php  echo "$name"; ?>" size="45" /></td></tr>
        
        
        
		<tr><td><b>Address:</b></td><td><input type="label" name="address" value="<?php  echo "$address"; ?>" size="45" /></td></tr>
        
        
		<tr><td><b>Street:</b></td><td><input type="label" name="street" value="<?php  echo "$street"; ?>" size="45" /></td></tr>
        
        
		
                      <tr> <td><b>Standing Committee</b></td>
                       
						 <td><label><select name="committee" >
                          <option value="Finance" selected="selected">Finance</option>
                          <option value="Development" >Development</option>
                          <option value="welfare">Welfire</option>
                          <option value="Health">Health</option>
                          <option value="Public works" >Public works</option>
                          <option value="Education, Artsand Sports">Education, Artsand Sports</option>
                         
                          </select></label></td>
                  </tr>
                      
                      
                      
                      
                      
                      
                
                      
                      
                      
                      
                      
                      
		
		<tr><td><b>Subject:</b></td><td><input type="text" name="subject" size="45" /></td></tr>

		
		 <tr><td><b>Complaint Written:</b></td><td><label for="complaint"></label><textarea name="complaint" id="complaint" cols="45" rows="25"></textarea></td></tr><br/>
		
		
		
		
		<tr><td><b>Complaint Image:</b></td><td><label for="complaintimage" value="<td align="center"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                          <?PHP 

   echo '<img src="'.$complaintimage.'"  style="width:250px;height:228px">' ?>
                        </span></td>
                    </tr>
                      </table></td>         "/></label></td></tr>
     


		
		
		
		<tr><td><input type="submit" value="SEND" name="lbt"/>
	 <td> <a href="councilerhome.php"><font color="#003300"><b>Cancel</b></font></a> </td>
		
<?php 

					   
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




