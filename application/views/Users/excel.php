<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="<?php echo base_url('/css/main.css'); ?>" >


<h3 class="Page_Header"> Manpower Employee
</h3>


<?php




$query = $this->db->query("SELECT * FROM emlpoyee LEFT JOIN manpower_companies ON manpower_companies.mc_Code = emlpoyee.Manpower_Company LEFT JOIN designations ON designations.Designation_ID = emlpoyee.Designation WHERE emlpoyee.Status=1 ORDER BY Date_Appointed DESC");

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