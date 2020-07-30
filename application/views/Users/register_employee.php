<?php include 'includes/header.php' ?>

<div class="container">

<h3>Register Employee</h3>
<?php if($this->session->flashdata('msg')){
    echo "<h4>". $this->session->flashdata('msg'). "</h4>";
} 
?>
<hr>

<?php echo validation_errors(); ?>

<?php echo form_open('Employee/Register_Form');?>
<fieldset class="form-horizontal">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Employee Name">Employee Name</label>  
  <div class="col-md-4">
  <input id="Employee_Name" name="Employee_Name" type="text" placeholder="Employee Name" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NIC">NIC</label>  
  <div class="col-md-4">
  <input id="NIC" name="NIC" type="text" placeholder="NIC" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Date_Visited">Date Appointed</label>  
  <div class="col-md-4">
  <input id="Date_Appointed" name="Date_Appointed" type="date" data-provide="datepicker" placeholder="Date Appointed" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Location">Location</label>
  <div class="col-md-4">



    <select id="Location" name="Location" class="form-control">
<!--
    <option value="9802">Nugegoda DO</option>
    <option value="9803">Avissawella DO</option>
    <option value="9805">Kadawatha DO</option>
    <option value="9806">Kaduwela DO</option>
    <option value="9807">Rathmalana DO</option>
    <option value="9809">Kaluthara DO</option>
    <option value="9810">Dambulla DO</option>
    <option value="9811">Pettah DO</option>
    <option value="9814">Maradana DO</option>
    <option value="9818">Negambo DO</option>
    <option value="9820">Nittambuwa DO</option>
    <option value="9822">Kandy DO</option>
    <option value="9823">Galle DO</option>
    <option value="9200">Ranala VBL</option>
-->
  <?php 
  
  if(count($getAreas)):
    foreach($getAreas as $Areas):
  ?> 
      <option value="<?php echo $Areas->Code ; ?>"><?php echo $Areas->Distribution_Name ; ?></option>
  <?php 
    endforeach;
  else:
  endif;


 
  ?>
    </select>

  </div>

  
</div>





<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Manpower_Company">Manpower Company</label>
  <div class="col-md-4">



    <select id="Manpower_Company" name="Manpower_Company" class="form-control">

    <option value="11">Micronet</option>
    <option value="12">Ceylon</option>
    <option value="13">SM Holdings</option>
    <option value="14">Exor</option>
    <option value="15">Mareena</option>
    <option value="16">Wickckramarachchi</option>
    <option value="17">Tasma</option>
    <option value="18">Meritime</option>
    <option value="19">BEE</option>
    <option value="20">Siyatha</option>
    <option value="21">Tharuneth</option>
    <option value="22">Egale</option>
  <?php 
  /*
  if(count($getmanpower_companies)):
    foreach($getmanpower_companies as $MC):
  ?> 
      <option value="<?php echo $MC->mc_Code ; ?>"><?php echo $MC->mc_Name ; ?></option>
  <?php 
    endforeach;
  else:
  endif;

*/
  
  ?>
    </select>

  </div>

  
</div>




<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Manpower_Company">Designation</label>
  <div class="col-md-4">



    <select id="Designation" name="Designation" class="form-control">

    <option value="01">SUPERVISOR</option>
    <option value="02">ACCOUNTS CLERK</option>
    <option value="03">DATA ENTRY OPERATOR</option>
    <option value="04">STORE KEEPER</option>
    <option value="05">WH ASSISTANT</option>
    <option value="06">CASH COLLECTOR</option>
    <option value="07">DRIVER</option>
    <option value="08">PORTER</option>
    <option value="09">JANITOR</option>
    <option value="10">PSR</option>
    <option value="11">OPERATOR</option>
    <option value="12">LABOUR</option>
    <option value="13">CHECKER</option>
    <option value="14">FORK LIFT</option>
    <option value="15">NURSE</option>
    <option value="16">ELECTRICIAN</option>
  <?php 
  /*
  if(count($getmanpower_companies)):
    foreach($getmanpower_companies as $MC):
  ?> 
      <option value="<?php echo $MC->mc_Code ; ?>"><?php echo $MC->mc_Name ; ?></option>
  <?php 
    endforeach;
  else:
  endif;

*/
  
  ?>
    </select>

  </div>

  
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Department">Department</label>
  <div class="col-md-4">



    <select id="Department" name="Department" class="form-control">

    <option value="1">ADMIN</option>
    <option value="2">F&A</option>
    <option value="3">SHIPPING</option>
    <option value="4">LOGISTIC</option>
    <option value="5">ADMIN</option>
    <option value="6">SALES</option>
  <?php 
  /*
  if(count($getmanpower_companies)):
    foreach($getmanpower_companies as $MC):
  ?> 
      <option value="<?php echo $MC->mc_Code ; ?>"><?php echo $MC->mc_Name ; ?></option>
  <?php 
    endforeach;
  else:
  endif;

*/
  
  ?>
    </select>

  </div>

  
</div>








<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="remarks">Remarks</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="remarks" name="remarks"></textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="OLD_EMP_CODE">Old Employee Code</label>  
  <div class="col-md-4">
  <input id="OLD_EMP_CODE" name="OLD_EMP_CODE" type="text" placeholder="Old Employee Code" class="form-control input-md">
    
  </div>
</div>



<!-- File Button  
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Image</label>
  <div class="col-md-4">
    <input id="image" name="image" class="input-file" type="file">
  </div>
</div>
-->
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
$("#Location").chosen();
$("#Manpower_Company").chosen();
$("#Designation").chosen();
$("#Department").chosen();
$("#Date_Visited").datepicker();
</script>