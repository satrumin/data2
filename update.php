<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $programme = $_POST['programme'];
    $email = $_POST['email'];
    $years = $_POST['years'];
    $level = $_POST['level'];
    $hstatus = $_POST['hstatus'];
    $address = $_POST['address'];

    $sql = "UPDATE studentinformation SET 
            Fname='$fname', Lname='$lname', Programme='$programme', Email='$email', Years='$years', 
            Level='$level', Hstatus='$hstatus', Address='$address' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Student</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="programme">Programme:</label>
                <input type="text" class="form-control" id="programme" name="programme" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="years">Years:</label>
                <input type="number" class="form-control" id="years" name="years" required>
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" class="form-control" id="level" name="level" required>
            </div>
            <div class="form-group">
                <label for="hstatus">Housing Status:</label>
                <input type="text" class="form-control" id="hstatus" name="hstatus" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
