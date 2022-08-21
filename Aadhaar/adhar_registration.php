<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
<div class="sideimage">
    
</div>    
<h2><u>REGISTER AADHAAR</u> </h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td >
                    Full Name
                </td>
                <td>
                    <input type="text" name="fullname" required>
                </td>
            </tr>
            <tr>
                <td>
                    Father Name
                </td>
                <td>
                    <input type="text" name="fathername" required>
                </td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="number" name="mobile" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob" id="" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><select name="gender" id="" required>
                <option value="Select">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" id="" cols="30" rows="7" required></textarea></td>
            </tr>
            <tr>
                <td>Upload image</td>
                <td><input type="file" name="image" id="" required accept=".png,.jpeg,.jpg,.svg,.webp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="sub"></td>
            </tr>
        </table>
 
    </form>
    <?php
    if(isset($_POST['sub'])){  
    $fullname=$_POST['fullname'];
    $fathername=$_POST['fathername'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $image=$_FILES['image']['name'];
    $filetmpname = $_FILES['image']['tmp_name'];
    $num=rand(1111111111111111,9999999999999999);
    $sql="INSERT INTO registration VALUES('$fullname','$fathername','$mobile','$email','$dob','$gender','$num','$address','$image')" ;
    $res=$connection->query($sql);
    if ($res) {
        echo"<script> alert('Record Inserted Successfully')</script>";
    }
    $folder = 'AadhaarImage/';
    move_uploaded_file($filetmpname, $folder.$num.$image);
    }
    ?>
</body>
</html>