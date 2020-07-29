
<?php  include 'partials/header.php' ?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div  style="width:100%; height:20%;">
<!--
  <img class="mySlides w3-animate-fading" src="<?php echo base_url('images\slide_show\1.jpg'); ?>" style="width:100%">
-->
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>


<?php include 'partials/footer.php' ?>