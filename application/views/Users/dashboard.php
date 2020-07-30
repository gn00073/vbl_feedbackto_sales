<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="<?php echo base_url('/css/main.css'); ?>" >

<?php


if($this->session->flashdata('Welcome_msg')){

    echo "<h2>".$this->session->flashdata('Welcome_msg')."</h2>";
}


?>

<h3 class="Page_Header">  <img src="<?php echo base_url('/images/vbl_rjcorp.png'); ?>"> Outsourced Employee Dashboard - 

<?php echo $this->session->userdata('First_Name') ;?>
</h3>


<?php

 $Location = $this->session->userdata('Last_Name');

//echo CI_VERSION;

/*
$query = $this->db->query("SELECT * FROM emlpoyee WHERE Location='$Location' ");
*/
//$query = $this->db->query("SELECT * FROM emlpoyee LEFT JOIN manpower_companies ON manpower_companies.mc_Code = emlpoyee.Manpower_Company WHERE Location='$Location' ORDER BY Date_Appointed DESC");
$query = $this->db->query("SELECT * FROM emlpoyee LEFT JOIN manpower_companies ON manpower_companies.mc_Code = emlpoyee.Manpower_Company LEFT JOIN designations ON designations.Designation_ID = emlpoyee.Designation WHERE Location='$Location' ORDER BY Date_Appointed DESC");

?>
<div class="Body_content"> 
<table name="Employee_Registration" id=Employee_Registration" class="blueTable">
<thead>
<tr>
<th>Employee Code</th>
<th>Employee Name</th>
<th>NIC</th>
<th>Date Appointed</th>
<th>Manpower Company</th>
<th>Department</th>
<th>Designation</th>
<th>Old Employee Code</th>
</tr>
</thead>

<tfoot>
<tr>
<td colspan="8">
<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
</td>
</tr>
</tfoot>
<?php
foreach ($query->result_array() as $row)
{
    echo "<tr>";
        echo "<td>";
            echo $row['Employee_Code'];    
        echo "</td>";
        echo "<td>";
            echo $row['Employee_Name'];
        echo "</td>";
        echo "<td>";
            echo $row['NIC'];
        echo "</td>";
        echo "<td>";
            echo $row['Date_Appointed'];
        echo "</td>";
        echo "<td>";
            echo $row['mc_Name'];
        echo "</td>";
        echo "<td>";
            echo $row['Department'];
        echo "</td>";
        echo "<td>";
            echo $row['Designation'];
        echo "</td>";
        echo "<td>";
            echo $row['OLD_EMP_CODE'];
        echo "</td>";
    echo "</tr>";
}

?>
</table>

</div>


<?php include 'includes/footer.php' ?>