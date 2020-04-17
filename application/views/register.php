<?php include 'partials/header.php' ?>

<div class="container">

<h2>Register</h2>
<?php if($this->session->flashdata('msg')){
    echo "<h3>". $this->session->flashdata('msg'). "</h3>";
} 
?>
<hr>

<?php echo validation_errors(); ?>

<?php echo form_open('Register/RegisterUser');?>

    <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="First_Name" placeholder="First Name" name="First_Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="Last_Name" placeholder="Last Name" name="Last_Name">
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="Email" placeholder="Email" name="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password" name="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Repeat Password</label>
    <input type="password" class="form-control" id="Repeat_Password" placeholder="Repeat Password" name="Repeat_Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">File path of the selected image.</p>
  </div>

  <button type="submit" class="btn btn-default">Register</button>
</form>
<?php echo  form_close();?>


</div>

<?php include 'partials/footer.php' ?>