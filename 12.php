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
  $complaintid=$_GET['complaintid'];
  $commi=$_GET['committee'];
  $sub=$_GET['subject'];
  $com=$_GET['complaint'];
  $query = "select * from complaint_details where complaintid=$complaintid ";
$result=mysql_query($query);


$row = mysql_fetch_array($result);
		 
 	
	$complaintimage=$row["complaintimage"];

  //$ima=$_GET['image'];
?>
<?php
if(isset($_POST['lbt']))
{
	  
		$q="update complaint_details set status='Forwarded to authority',sta='Forwarded to authority'  where complaintid='$complaintid'";
//and set status=$status

//$sql= "update staff set //Tid='$tid',Name='$name',HouseName='$hname',Street='$street',City='$city',State='$state',Pin='$pin',Dob='$dob',Gender='$gender',Doj='$doj',Mobile='$mo//bile',Email='$email',Qualification='$qual',Designation='$desig',Photo='$photo',Status='$status' where Tid='$tid'";




mysql_query($q);
header("Location: aucheck.php");
}
?>
 <div id="content">
						<div class="post">
							<h2 class="title"><a href="#"> </a></h2>
                            
                            
                            
                            
                            
                                                             <p align="left"><a href="complaintview.php"><strong> Go Back</strong></a>&nbsp; &nbsp;&nbsp; &nbsp;<a href="login.php"><strong> Logout</strong></a></p>    
                   
                            
                            
                            
                            
							<p class="meta"></p>
							<div class="entry">
								<p>                 <td align="center"><table width="150" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                                  <?PHP 
						  if($complaintimage!==NULL){

   echo '<img src="images/'.$complaintimage.'" style="width:328px;height:328px">'; }

?>
                        </td>
                    </tr>
                      </table></td>     


            
            
            
            
            
            
            
         <form name="Viewcomplaint" method="post" action="">
		<p>&nbsp;</p>

		  <table class="one" align="right" width="550" border="2" class="one">
          
          
          
          
          		<tr><td width="150" align="left">Complaint ID</td><td><span class="style6">:</span> <?PHP echo $complaintid; ?></td></tr>
          
          
                    		<tr><td width="150" align="left">Committee</td><td><span class="style6">:</span> <?PHP echo $commi; ?></td></tr>
                            
          		<tr><td width="150" align="left">Subject</td><td><span class="style6">:</span> <?PHP echo $sub; ?></td></tr>

                    		<tr><td width="150" align="left">Complaint</td><td><span class="style6">:</span> <textarea name="text" rows="10" cols="50" ><?php echo $com; ?></textarea></td></tr>
                            
                            
                            
                        
					 					   <td><input type="submit" value="Forward Complaint"  onClick="alert('Message Successfully Send To User');" name="lbt" /></td>
   
	 <td> <a href="adminhome.php"><font color="#003300"><b>Cancel</b></font></a> </td>
                      
 <p>&nbsp;</p>
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
