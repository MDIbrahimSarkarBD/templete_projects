<?php 

include 'dbCon.php';
function Insert($con, $sql){
       if (mysqli_query($con, $sql)) {
        echo "<script> alert('data insert');</script>";
                 
     }

}
function valueHas($value){
    if(isset($_POST[$value])){
        return $_POST[$value];
    }else{
        return "";
    }
}

if (isset($_POST['profession'])) {
    // image upload
    $img_type  = $_FILES['picture']['type'];
    $img_size  = $_FILES['picture']['size'];


    // CV file upload...
      $fullname           = valueHas('fullname');
      $profession         = valueHas('profession');
      $picture            = $img_name;
      $objective          = valueHas('objective');
      $father             = valueHas('father');
      $gender             = valueHas('gender');
      $dob                = valueHas('dob');
      $nationality        = valueHas('nationality');
      $address            = valueHas('address');
      $email              = valueHas('email');
      $mobile             = valueHas('mobile');
      $education          = valueHas('education');
      $experience         = valueHas('experience');
      $skills             = valueHas('skills');
      $certificate1       = valueHas('certificate1');
      $certificate2       = valueHas('certificate2');
      $certificate3       = valueHas('certificate3');
      $language1          = valueHas('language1');
      $language2          = valueHas('language2');
      $language3          = valueHas('language3');

      $values = "('$fullname', '$profession', '$picture', '$objective', '$father', '$gender', '$dob', '$nationality',
      '$address', '$email', '$mobile', '$education', '$experience', '$skills', '$certificate1', '$certificate2', 
      '$certificate3', '$language1', '$language2', '$language3')";


     
    $sql = "INSERT INTO cv (`fullname`, `profession`, `picture`, `objective`, `father`, `gender`, `dob`, `nationality`, `address`, `email`, `mobile`, `education`, `experience`, `skills`, `certificate1`, `certificate2`, `certificate3`, `language1`, `language2`, `language3`) VALUES $values ";
    
    Insert($con, $sql);
      
 }

 



?>