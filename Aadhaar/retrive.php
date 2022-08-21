<?php
include 'connection.php';
$sql="SELECT * FROM registration";
$res=$connection->query($sql);
echo"<table border=2 bgcolor='pink'>";
echo"<tr><th> Aadhaar Number</th><th>Full Name</th><th>Father Name</th><th>Mobile Number</th>
<th>Email</th><th>Date of Birth</th><th>Gender</th><th>Address</th><th>Image</th></tr>";
while ($row=mysqli_fetch_array($res)) {
    
    ?>
    <tr>
        <td><?php echo $row['adhar_number']?></td>
        <td><?php echo $row['full_name']?></td>
        <td><?php echo $row['father_name']?></td>
        <td><?php echo $row['mobile']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['dob']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['address']?></td>
       <td><img src="AadhaarImage\<?php echo$row['adhar_number'].$row['image']?>"height="100px" width="100px"></td>
   </tr>
    <?php 
}       
?>