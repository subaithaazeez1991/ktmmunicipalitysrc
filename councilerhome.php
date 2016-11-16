

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
        <script type="text/javascript" src="calendar.js"></script>

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

include("connect.php");
session_start();

      //include("connect.php");
	  $id = $_SESSION['din'];

		$sql1=mysql_query("SELECT * from councilor_reg  where emailid='$id'");
		 while($row=mysql_fetch_array($sql1)){
		 
  
$wardname=$row["wardname"];
$name=$row["name"];
$address=$row["address"];
$pincode=$row["pincode"];
$emailid=$row["emailid"];
$mobile=$row["mobile"];

$age=$row["age"];
$gender=$row["gender"];
$occu=$row["occu"];

$status=$row["status"];
$photo=$row["photo"];







  }
?>
           
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
	<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
                            
                            
                            
                                                                       <p align="left"><a href="login.php"><strong> Logout</strong></a></p>

							<p class="meta"></p>
							<div class="entry">
								<p>
                                
                                
                                
                               			
								<td align="center"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                          <?PHP 

   echo '<img src="councillor/councillor/'.$photo.'"  style="width:228px;height:228px">';
?>
                        </td>
                    </tr>
					
                      </table></td>
                                
                                
                                
                 <div class="post">
							<h2 class="title"><a href="#"></a></h2>
							<p class="meta"></p>
							<div class="entry">
						
						
						
						
						
						
						
						
						
								<h3>&nbsp;</h3>

							
            <!--<img src="images/aw1.jpg" alt="" width="270" height="154" class="img-border">-->
            <p align="center">   <marquee  align="middle" behavior="scroll" direction="up" height="150" width="550" scrollamount="2" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()">
			 
								  <form name="compliantdetails" method="post" action="councilerhome.php" enctype="multipart/form-data">		  <div align="left">
		    <table class="one" align="center" width="450" height="1225" border="2">
		      <tr>
		        <td>&nbsp;</td>
		      </tr>
			   
			  

			  <tr><td><b><?php  echo "$name"; ?></b></td></tr>
        
        
        		<tr><td><b><?php  echo "$wardname"; ?> </b></td></tr>

        
		
		<tr><td><b><?php  echo "$address"; ?> </b></td></tr>
 		<tr><td><b><?php  echo "$emailid"; ?> </b></td></tr>
		<tr><td><b><?php  echo "$mobile"; ?> </b></td></tr>

		
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
		
	    
   </marquee></p>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							</div>
						</div>               
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                   </p>
							</div>
						</div>
						
						<div style="clear: both;">&nbsp;</div>
					</div>             
                                
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>My Duties</h2>
					<ul>
                        						<li><a href="comtest.php"><b>View User Complaints</b></a></li>
                                
						                        <li><a href="councilorup.php"><b>Update Profile</b></a></li>
               						                        <li><a href="send.php"><b>Send Message</b></a></li>
         
                                                

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
