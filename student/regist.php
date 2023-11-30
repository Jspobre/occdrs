<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for form styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="../init/controllers/regist_process.php">
        <div class="row">
            <div class="col-md-4">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="col-md-4">
                <label for="middle_name">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name" required>
            </div>
            <div class="col-md-4">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required>
            </div>
            <div class="col-md-6">
                <label for="year_level">Year Level:</label>
                <input type="text" id="year_level" name="year_level" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender" required>
            </div>
            <div class="col-md-6">
                <label for="date_ofbirth">Date of Birth:</label>
                <input type="text" id="date_ofbirth" name="date_ofbirth" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="complete_address">Complete Address:</label>
                <input type="text" id="complete_address" name="complete_address" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email_address">Email Address:</label>
                <input type="email" id="email_address" name="email_address" required>
            </div>
            <div class="col-md-6">
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" id="mobile_number" name="mobile_number" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="col-md-6">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
        </div>
        <!--
        <input type="hidden" id="status" name="status" value="Active">
        -->
        <div class="row">
            <div class="col-md-12">
                <input type="submit" value="Register">
            </div>
        </div>
    </form>
</body>
</html>
