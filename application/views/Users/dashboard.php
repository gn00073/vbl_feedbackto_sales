<?php include 'includes/header.php' ?>

<h3> Dashboard </h3>

<?php


if($this->session->flashdata('Welcome_msg')){

    echo "<h3>".$this->session->flashdata('Welcome_msg')."</h3>";
}



?>



<?php include 'includes/footer.php' ?>