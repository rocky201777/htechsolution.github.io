<?php

    if(isset($_POST['submit'])){

     	$name=$_POST['name'];
	  	$email=$_POST['email'];
	  	$subject=$_POST['subject'];
	  	$comments=$_POST['comments'];

	  	$to="yashsingh1857@gmail.com";
	  	$headers="From: $name<$email>";
	    echo $message="Name:$name \n\nEmail:$email \n\nSubject:$subject \n\nComments:$comments";
	    //if(mail($to, $subject, $message, $headers)){

	    	//echo "email send";
	    //}
	    //else{

	    	//echo "email failed!!please try again later";
	    //}
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>index page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	    <link rel="stylesheet" href="css/stylee.css">
	</head>

	<body>
    <div class="contaniner-fluid">
      <nav class="navbar navbar-expand-lg bg-danger">
        <ul class="ml-auto" style="height:10px;">
          <a href="http://facebook.com"><img src="image/facebook.jpg" style="height:30px;border-radius: 30px;">
          </a>
           <a href="http://youtube.com"><img src="image/youtube.jpg" style="height:40px;border-radius: 30px;">
           </a>
        </ul>
      </nav>
    </div>
    <div class="container-fluid">
      <a href="index.html" class="nav-link " style="font-size:30px; color: black;"><b>Rtechsolution</b></a>
    </div>
    <div class="contaniner-fluid  mt-1 bg-light">
      <nav class="navbar nav navbar-expand-lg">
        <ul class="navbar nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.html" style="color: black;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html" style="color: black;">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.html" style="color: black;">Contact us</a>
          </li>
          <li class="nav-item dropdown">
            <div class="dropdown show" style="font-weight: bold;">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: gray;">Services</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="webdesigning.html">Web Designing</a>
                <a class="dropdown-item" href="webdevelopment.html">Web Development</a>
                <a class="dropdown-item" href="Webapplication.html">Web application</a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <div class="container-fluid mt-5">
      <form class="text-danger" style="font-weight: bold;" method="post" action="process_contact.php">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for=name>Name</label>
              <input type="text" name="name" id="" value="" placeholder="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for=email>Email</label>
              <input type="email" name="email" id="" value="" placeholder="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for=subject>Subject</label>
              <input type="text" name="subject" id="" value="" placeholder="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for=comment>Comment</label>
              <textarea name="comments" id="" cols="20" rows="10" class="form-control" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="submit" id="" value="">Send Email</button>
          </div>
        </div>
      </form>
    </div>
    <div class="container-fluid bg-danger text-white" style="margin-top: 100px;">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h4 class="mt-5">CONTACT US</h4>
          <p>Sahastradhara Road Dehradun Uttarakhand</p>
          <p>8809670572</p>
          <p>yashsingh1857@gmail.com</p>
        </div>
      </div>
    </div>
  </body>
</html>         