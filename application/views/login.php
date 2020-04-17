<?php include 'partials/header.php' ?>


<div class="container">

<h2>Login</h2>

<?php if($this->session->flashdata('error_msg')){
    echo "<h3>". $this->session->flashdata('error_msg'). "</h3>";
} 
?>

<?php echo validation_errors(); ?>

<?php echo form_open('Login/LoginUser');?>
<hr>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="Email" placeholder="Email" name="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
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
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>

<?php echo  form_close();?>


</div>



<?php include 'partials/footer.php' ?>