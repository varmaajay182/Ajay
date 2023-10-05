<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php include("connection.php")?>
<?php 



  
 if(isset($_POST['sub_btn'])){
    if($_POST['fname'] != '' && $_POST['lname'] != '' && $_POST['number'] != '' && $_POST['email'] != '' && $_POST['gender'] != '' &&  $_POST['Hobbies'] != ''  && $_POST['con'] != '' && $_POST['password'] != '' ){
        $fname  = $_POST['fname'];
        $lname  = $_POST['lname'];
        $number  = $_POST['number'];
        $email  = $_POST['email'];
        $gender  = $_POST['gender'];
        $Hobbies  = $_POST['Hobbies'];
        $con  = $_POST['con'];
        $password  = $_POST['password'];
        
        // $sql = "INSERT INTO users(First_Name, Last_Name, Phone_No,Email,Gender,Hobbies,Countries,password) VALUES ( $fname,$lname,$number ,$email , $gender,$Hobbies , $con , $password )";
            $sql = "INSERT INTO users(First_Name, Last_Name, Phone_No,Email,Gender,Hobbies,Countries,password) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['number']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['Hobbies']."','".$_POST['con']."','".$_POST['password']."')";
           
            if (mysqli_query($conn, $sql)) {
                header("Location: list.php");
                die();
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            } 
        
    }
    
       
    
   
    
}
else{
    echo "you are wrong";
}



?>

</body>
</html>