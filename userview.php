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
  $nam=$_GET['name'];
	   
		$ward=$_GET['wardnumber'];
		$add=$_GET['address'];
		$houseno=$_GET['houseno'];
		$str=$_GET['street'];
		$emailid=$_GET['emailid'];
		$mobile=$_GET['mobile'];

?>
<div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
                            
                            
                            
                            
                                                    <p align="left"><a href="view.php"><strong> Go Back</strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="login.php"><strong> Logout</strong></a></p>    

							<p class="meta"></p>
							<div class="entry">
								<p>
         


							
								
			<form name="userview" method="post" action="">	
            				
				 <p align="center" class="style1">User Details....	    </p>				
		<p>&nbsp;</p>
		  <table class="one" align="right" width="550" border="2">
		<tr><td width="150" align="left"><span class="style10">Ward Number</span></td><td><span class="style6">:</span> <?PHP echo $ward; ?></td></tr>

		<tr><td width="150" align="left"><span class="style10">Address</span></td><td><span class="style6">:</span> <?PHP echo $add; ?></td></tr>
        <tr><td width="150" align="left"><span class="style10">House No</span></td><td><span class="style6">:</span> <?PHP echo $houseno; ?></td></tr>

		<tr><td width="150" align="left"><span class="style10">Street</span></td><td><span class="style6">:</span> <?PHP echo $str; ?></td></tr>
        <tr><td width="150" align="left"><span class="style10">Email ID</span></td><td><span class="style6">:</span> <?PHP echo $emailid; ?></td></tr>

		<tr><td width="150" align="left"><span class="style10">Mobile</span></td><td><span class="style6">:</span> <?PHP echo $mobile; ?></td></tr>
        
        
        
        
        
        
        
		
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
