<?php include 'partials/header.php' ?>
<link rel="stylesheet" href="<?php echo base_url('/css/main.css'); ?>" >
<body class="Body_Login">
<div class="container" id="Login" >

<h2></h2>

<?php if($this->session->flashdata('error_msg')){
    echo "<h3>". $this->session->flashdata('error_msg'). "</h3>";
} 
?>

<?php echo validation_errors(); ?>

<?php echo form_open('Login/LoginUser');?>
<hr>
<img src="<?php echo base_url('/images/vbl_rjcorp.png'); ?>">
<div class="form_login">
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="Email" placeholder="Email" name="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="Password" placeholder="Password" name="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-labeled btn-primary" class="glyphicon glyphicon-user">Login</button>
    </div>
  </div>

<?php echo  form_close();?>


</div>

</div>
</body>
<?php include 'partials/footer.php' ?>