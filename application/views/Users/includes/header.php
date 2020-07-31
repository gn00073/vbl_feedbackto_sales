
<?php
if(!$this->session->userdata('Logged_In')){
    redirect('Home/Login');
}


?>




<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="<?php echo base_url('/images/vbl_icon.png'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Varun Beverages Lanka</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <![endif]-->
  </head>
  <body>
	
<!-- Navigation Bar  Cording -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Varun Beverages Lanka Pvt Ltd</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="<?php echo base_url('index.php/Users/Index'); ?>">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manpower Employees<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('index.php/Users/Register_Employee'); ?>">Register New</a></li>
            <li><a href="<?php echo base_url('index.php/Users/Index'); ?>">View Employees Details</a></li>
            <li><a href="#">Rates Updates</a></li>
            <li><a href="#">View Attendance</a></li>

          </ul>
        </li>
      </ul>
  
      <ul class="nav navbar-nav navbar-right">
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?php echo $this->session->userdata('First_Name') ;
              echo " ";
               echo $this->session->userdata('Last_Name');
               $User = $this->session->userdata('Last_Name');
              ?> 
              <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="<?php  echo base_url('index.php/Login/LogoutUser'); ?>">Logout</a></li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Navigation Bar  Cording -->