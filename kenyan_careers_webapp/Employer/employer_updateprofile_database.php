<?php
//This is a file that forwards all the user input to the database
//It also sends verification code via Email Address
//Utilises PHPMailer path: phpmailer/PHPMailerAutoload.php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kenyan_careers_webapp_db";
    

     $conn = mysqli_connect($servername,$username,$password,$dbname) or die("Could not connect!");

    if ($conn->connect_error)
    {
      die("Connection Failed: ". $conn->connect_error);
    }

    if (isset($_POST['submit']))
   {
      //Initialization of the values
      //$name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $location = $_POST['location'];
      $address = $_POST['address'];
      $url = $_POST['url'];
      //session id
      $emp_id = $_SESSION['myid'];
        echo $emp_id;
        echo("<pre>");
        print_r($_POST);
        echo("</pre");



      $sql = "UPDATE employer_details SET emp_email='$email',emp_phone='$phone',emp_location='$location',emp_address='$address',emp_url='$url' WHERE emp_id='$emp_id'";

        if ($conn->query($sql) === TRUE)
                {
                   require_once('phpmailer/PHPMailerAutoload.php');
                   //send email to client
                   $mail = new PHPMailer();
                   $mail->isSMTP();
                   $mail ->SMTPAuth=true;
                   $mail ->SMTPSecure = 'ssl';
                   $mail->Host = 'smtp.gmail.com';
                   $mail->Port = '465';
                   $mail->isHTML(true);
                   $mail->Username = 'usaidizihub@gmail.com';
                   $mail->Password = 'Qwetu307';
                   $mail->SetFrom('no-reply@howcode.org');
                   $mail->Subject = 'KenyaCareer Account Update';
                   $mail->Body = '
                   You have successfully updated your account.
                   If this was not you, visit the help platform in our Website';
                   $mail->AddAddress($email);
                   $mail->Send();

                   if ($mail->send())
                   {
                       echo "Message has been sent successfully";
                   }
                   else
                   {
                       echo "Message could not be sent";
                   }
                   //Verification page
                   header('Location: employer_homepage.php');
                }
                else
                {
                   echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
       else
       {
           echo "An error occurred";
           }
           $conn->close();
 ?>
