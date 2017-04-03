<!DOCTYPE HTML>
<html lang="en">
  
<head>
  <title>Faith Drum Co. | Contact Us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
   <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
       <img id="logoex" src="img/barrel.png"style="float:left" height="165" width="100">
        <div class="left">
        <div id="logo_text">
          <h1>Faith Drum Company</h1>
          <h2 id="headtitle">Your #1 source for industrial size containers in the Humboldt area.</h2>
        </div>
       </div>
        <img id="logoex" src="img/barrel.png" style="float:right" height="165" width="100">
      </div>
      <div id="menubar">
        <ul id="menu" class="menuex">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="inventory.html">Inventory</a></li>
          <li class="selected"><a href="contact.html">Contact Us</a></li>
          <li><a href="location.html">Location</a></li>
          <li><a href="faq.html">FAQ</a></li>
        </ul>
      </div>
    </div>s
     <div id="site_content">

        <h3></h3>
        <h4 id="links"> <a href=""></a>
        </h4>
        <h5></h5>
        <p></p>
        <div id="hasbeensent">
        <h3>Your message has been sent.</h3>
        <h3>Thank you for contacting us!</h3>
        <h3>We will get back with you as soon as possible.</h3>
      </div>
     
        
      </div>
    </div>
 
   <div id="content_footer"></div>
    <div id="footer">

			<div class="footer-right">

				<div class="footer-icons">

					


				</div>

			</div>
          <a href="index.html">Home</a> |
          <a href="about.html">About</a> |
          <a href="inventory.html">Inventory</a> |
          <a class= "selected" href="contact.html">Contact Us</a> |
          <a href="location.html">Location</a> | 
          <a href="faq.html"> FAQ</a> |<br>
      | Copyright &copy; 2017 Faith Drum Company | <a class="numadd" href="https://www.google.com/maps/uv?hl=en&pb=!1s0x887eb3f87825e43b:0xdec9765174d6afbc!2m19!2m2!1i80!2i80!3m1!2i20!16m13!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!3m1!7e115!4s/maps/place/faith%2Bdrum%2Bcompany/@35.8328314,-89.017747,3a,75y,333.88h,90t/data%3D*213m4*211e1*213m2*211sYa9p61CEH3jKWbwye99j2w*212e0*214m2*213m1*211s0x0:0xdec9765174d6afbc!5sfaith+drum+company+-+Google+Search&imagekey=!1e2!2sYa9p61CEH3jKWbwye99j2w&sa=X&ved=0ahUKEwiIsOTtq6nSAhXM7SYKHR9qAOUQpx8IXTAK">9200 TN-152, Humboldt, TN, 38343</a> |<br> | <a href="tel:731-234-8707">Call Wayne at 731-234-8707</a> | |
        

  </div>


<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "samkinzer@gmail.com";
  $email = $_REQUEST['email'];
  $comment = $_REQUEST['message'];
  
  //send email
  mail($admin_email, $comment, "From:" . $email);
  
  //Email response
  
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 
  
<?php
  }
?>