<?php


echo "<h1>Test Content</h1>";
echo "<p>This page is being accessed directly.</p>";

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "onlineschooldocuments_db";
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../../vendor/autoload.php';

function sendemail_verify($email,  $name){
    $mail = new PHPMailer(true);

    try{
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->Username = "occdrs.system@gmail.com";
    $mail->Password = "zhrz rjzw qlmb tdjs";

    $mail->SMTPSecure = "tls";

    $mail->Port = 587;


    $mail->setFrom("occ-drs.system@gmail.com",$name);
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "Oas Community College Document Request System";

    $email_template = "
    <h2>Your requested document is now available for pickup at the registrar's office</h2>
    <h5>You may claim it personally or by an authorized person only.</h5>
    <h6>Thank you for using OCCDRS!</h6>
     ";
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debugging
    // $mail->Debugoutput = 'html'; // Display debug output as HTML
    
   $mail->Body = $email_template;
   
   $mail->send();

    }
    catch (Exception $e){
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

        
  


        $name = 'Oas Community College';
    
        $sql_insert = "INSERT INTO tbl_notification (email_address ) VALUES ('$email')";

        if (mysqli_query($conn, $sql_insert)) {
            sendemail_verify($email, $name);
          
            header("Location: request.php?success=1"); // Redirect to request.php with a success parameter
            exit(); // Make sure to exit to prevent further execution
        } else {
            $msg = "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
        }
        
    }


//hello bro hahahahaha
?>

