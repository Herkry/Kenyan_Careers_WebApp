<?php
//This is a file that forwards all the user input to the database
//It also sends verification code via Email Address
//Utilises PHPMailer path: phpmailer/PHPMailerAutoload.php

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
      $category = $_POST['category'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $location = $_POST['location'];
      $address = $_POST['address'];
      $url = $_POST['url'];

      $sql = "UPDATE employer_details SET emp_category='$category', emp_name='$name', emp_email='$email',emp_phone='$phone',emp_location='$location',emp_address='$address',emp_url='$url' WHERE emp_id=7";

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
                   header('Location: employer_profile.php');
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
