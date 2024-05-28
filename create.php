<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        .form-container {
            background-color: greenyellow;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            max-width: 400px;
            width: 100%;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="mb-4 text-center">Add New Student</h1>
        <form method="post" action="">
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
                <select class="form-control" id="level" name="level" required>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Certificate">Certificate</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hstatus">Housing Status:</label>
                <select class="form-control" id="hstatus" name="hstatus" required>
                    <option value="On Campus">On Campus</option>
                    <option value="Off Campus">Off Campus</option>
                    <option value="With Family">With Family</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Add</button>
        </form>
    </div>
</body>
</html>
