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
      $logo = $_POST['logo'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $location = $_POST['location'];
      $address = $_POST['address'];
      $url = $_POST['url'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];

      if ($password = $cpassword)
      {
        //After submission, generate a verification key
        function generateRandomString($length = 10)
        {
          return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',ceil($length/strlen($x)) )),1,$length);
        }

        $verificationkey = generateRandomString();
        $password_string = mysqli_real_escape_string($conn,$password);
        $passHash = password_hash($password_string, PASSWORD_DEFAULT);
        $sql = "INSERT INTO employer_details(emp_logo,emp_category, emp_name, emp_email, emp_phone, emp_location, emp_address, emp_url, emp_password, emp_verification) values ('$logo','$category','$name','$email','$phone','$location','$address','$url','$passHash','$verificationkey')";

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
                   $mail->Subject = 'KenyaCareer Account';
                   $mail->Body = 'Your account has been created successfully.
                   Log in and get to access our service. Use this key for your verification:'.$verificationkey;
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
                   header('Location: signupverification.php');
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
       }

 ?>
