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
        input[type="password"],
        select {
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
                <select id="course" name="course" required>
                    <option value="">Select Course</option>
                                            <option value="Bachelor in Elementary Education - BEEd
                        ">Bachelor in Elementary Education - BEEd
                        </option>
                    <!-- <option value="BS Information Technology">BS Information Technology</option> -->
                    <option value="Bachelor of Secondary Education - BSEd (Major in English)">Bachelor of Secondary Education - BSEd (Major in English)</option>
                    <option value="BS Information Technology with Specialization in Animation">BS Information Technology with Specialization in Animation</option>
                    <option value="Bachelor of Secondary Education - BSEd (Major in Mathematics)">Bachelor of Secondary Education - BSEd (Major in Mathematics)
</option>
                    <option value="Bachelor of Secondary Education - BSEd (Major in Science)">Bachelor of Secondary Education - BSEd (Major in Science
                    )</option>                
                    <option value="Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Electrical Technology)">Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Electrical Technology)</option>           
                    <option value="Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Automotive Technology)">Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Automotive Technology)</option>
                    <option value="Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Food and Service Management)">Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Food and Service Management)</option>
                    <option value="Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Welding and Fabrication Technology)">Bachelor in Technical -Vocational Teacher Education BTVTED (Major in Welding and Fabrication Technology)</option>
                    <option value="Bachelor of Science in Office Administration - BSOA">Bachelor of Science in Office Administration - BSOA</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="year_level">Year Level:</label>
                <select id="year_level" name="year_level" required>
                    <option value="">Select Year Level</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                    <!-- Add other year level options here -->
                </select>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Prefer not to say</option>
                    </select>
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
   
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevents the default form submission

            // Get the selected gender, course, and year level values
            var selectedGender = document.getElementById('gender').value;
            var selectedCourse = document.getElementById('course').value;
            var yearLevel = document.getElementById('year_level').value;

            // Create an object to hold the form data
            var formData = {
                gender: selectedGender,
                course: selectedCourse,
                year_level: yearLevel
            };

            // Send form data to the backend using fetch
            fetch('/your-backend-endpoint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData),
            })
            .then(response => {
                // Handle response or perform further actions
                console.log('Form data submitted:', formData);
                // You can redirect or display a success message here
            })
            .catch(error => {
                // Handle errors
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
