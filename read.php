<?php
include 'conn.php';

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Attempt to fetch student information
$sql = "SELECT * FROM studentinformation";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error fetching student information: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Students</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional styles specific to this page */
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: calc(100% - 10cm); /* Set maximum width for the container */
            margin-left: 5cm; /* Set left margin */
            margin-right: 5cm; /* Set right margin */
        }
        .table-minimized {
            width: 100%; /* Make table responsive */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">View Students</h1>
        <table class="table table-striped table-minimized">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Programme</th>
                    <th>Email</th>
                    <th>Years</th>
                    <th>Level</th>
                    <th>Housing Status</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["Fname"] . "</td>
                                <td>" . $row["Lname"] . "</td>
                                <td>" . $row["Programme"] . "</td>
                                <td>" . $row["Email"] . "</td>
                                <td>" . $row["Years"] . "</td>
                                <td>" . $row["Level"] . "</td>
                                <td>" . $row["Hstatus"] . "</td>
                                <td>" . $row["Address"] . "</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No students found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
