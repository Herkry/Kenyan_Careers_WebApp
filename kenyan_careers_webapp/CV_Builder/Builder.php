<?php
    if(isset($_POST) && is_array($_POST) && count($_POST)){
        $data=array();
        echo'<pre>POST '; print_r($_POST);echo '</pre>';

        if(isset($_POST['FirstName'])){
            $pat='`[^a-z0-9\s]+$`i';
            if(empty($_POST['FirstName']) || preg_match($pat,$_POST['FirstName'])){
                die('Invalid input for FirstName field.');
            }else{
                $data['FirstName']=$_POST['FirstName'];
            }

            if(!isset($_POST['Surname'])){
                die('You did not submit the correct form.');
            }
            $data['Surname']=$_POST['Surname'];
            $data['LastName']=$_POST['LastName'];
            $data['Country']=$_POST['Country'];
            $data['City']=$_POST['City'];
            $data['PostalAddress']=$_POST['PostalAddress'];
            $data['EmailAddress']=$_POST['EmailAddress'];
            $data['PhoneNumber']=$_POST['PhoneNumber'];

            $data['AlmaMater'] = $_POST['AlmaMater'];
            $data['Degree'] = $_POST['Degree'];
            $data['EductaionCountry'] = $_POST['EductaionCountry'];
            $data['EductaionCity'] = $_POST['EductaionCity'];
            $data['EnrollmentDate'] = $_POST['EnrollmentDate'];
            $data['GraduationDate'] = $_POST['GraduationDate'];

            $data['PreviousEmployer'] = $_POST['PreviousEmployer'];
            $data['JobTitle'] = $_POST['JobTitle'];
            $data['JobCountry'] = $_POST['JobCountry'];
            $data['JobCity'] = $_POST['JobCity'];
            $data['StartDate'] = $_POST['StartDate'];
            $data['EndDate'] = $_POST['EndDate'];
            $data['JobDescription'] = $_POST['JobDescription'];

            $data['PreviousInternshipEmployer'] = $_POST['PreviousInternshipEmployer'];
            $data['IntershipCountry'] = $_POST['IntershipCountry'];
            $data['InternshipCity'] = $_POST['InternshipCity'];
            $data['InternshipStartDate'] = $_POST['InternshipStartDate'];
            $data['InternshipEndDate'] = $_POST['InternshipEndDate'];
            $data['InternshipDescription'] = $_POST['InternshipDescription'];
            $data['InternshipReference'] = $_POST['InternshipReference'];
            $data['ReferenceEmailAddress'] = $_POST['ReferenceEmailAddress'];
            $data['ReferencePhoneNumber'] = $_POST['ReferencePhoneNumber'];

            $data['Text1']=date('Y-m-d H:i:s');

            require_once 'createFDF.php';

            // file name will be <the current timestamp>.fdf
            $fdf_file=time().'.fdf';

            // the directory to write the result in
            $fdf_dir=dirname('kenyan_careers_webapp/CV_Builder/MyCV/KenyanCareerPDFTemplate.pdf');

            // need to know what file the data will go into
            $pdf_doc='kenyan_careers_webapp/CV_Builder/KenyanCareerPDFTemplate.pdf';

            $fdf_data=createFDF($pdf_doc,$data);

            if($fp=fopen($fdf_dir.'/'.$fdf_file,'w')){
                fwrite($fp,$fdf_data,strlen($fdf_data));
                echo $fdf_file,' written successfully.';
                header("Location: Application_Process/qualifications.php")
            }
            else{
                die('Unable to create file: '.$fdf_dir.'/'.$fdf_file);
            }
            fclose($fp);
        }
    }else{
        echo 'You did not submit a form.';
    }
?>
