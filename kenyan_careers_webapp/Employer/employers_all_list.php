 <?php
    include_once('emp_dbconnect.php');
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

    <?php
    $sql = "SELECT * FROM employer_details where emp_id=1";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck>0)
    {
      while ($row = mysqli_fetch_assoc($result))
      {
        echo $row['emp_name']. "<br>";
      }
    }
      ?>
   </body>
 </html>
