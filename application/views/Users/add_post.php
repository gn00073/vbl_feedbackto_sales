<?php include 'includes/header.php' ?>

<div class="container">

<h2>Feedback to Sales</h2>
<?php if($this->session->flashdata('msg')){
    echo "<h3>". $this->session->flashdata('msg'). "</h3>";
} 
?>
<hr>

<?php echo validation_errors(); ?>

<?php echo form_open('Feedback/Feedback_Form');?>
<fieldset class="form-horizontal">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Outlet_Name">Outlet Name</label>  
  <div class="col-md-4">
  <input id="Outlet_Name" name="Outlet_Name" type="text" placeholder="Outlet Name" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Owner_Name">Owner's Name</label>  
  <div class="col-md-4">
  <input id="Owner_Name" name="Owner_Name" type="text" placeholder="Owner's Name" class="form-control input-md">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Owner_contact">Owner's Contact</label>  
  <div class="col-md-4">
  <input id="Owner_contact" name="Owner_contact" type="text" placeholder="Owner's Contact" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Area">Nearest DB/DO Area</label>
  <div class="col-md-4">



    <select id="Area" name="Area" class="form-control">

    
  <?php 
  if(count($getAreas)):
    foreach($getAreas as $Areas):
  ?> 
      <option value="<?php echo $Areas->autoID ; ?>"><?php echo $Areas->Territory_Name ; ?></option>
  <?php 
    endforeach;
  else:
  endif;


  
  ?>
    </select>

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="remarks">Remarks</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="remarks" name="remarks">Your remarks..</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Image</label>
  <div class="col-md-4">
    <input id="image" name="image" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Submit</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>

<?php echo  form_close();?>


</div>

<?php include 'includes/footer.php' ?>

<script>
$("#Area").chosen();

</script>