<?php
include("connection.php");
   $id= $_GET['ID'];
   $update= "SELECT * FROM users WHERE ID='$id'";
   $result = mysqli_query($conn,$update);
   $data = mysqli_fetch_array($result);  
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="welcome.php" method="post">
        <div class="table">

            <legend>
                <h1>upadate here</h1>
            </legend>
            <div class="data">
                <p>Fisrt name: <input type="text" placeholder="Enter your f.name" name="fname" value="<?php echo  $data['First_Name'];?>"></p>
                <p>Last Name : <input type="text" placeholder="enter yopur last name" name="lname"></p>
            </div>
            <div class="data">
                <p>Contact: <input type="number" placeholder="Enter number" name="number"></p>
                <p>Email: <input type="email" placeholder="Enter valid email" name="email"></p>
                <div class="select">
                    <p>Gender:</p>

                    <input type="radio" id="Male" name="gender" value="Male">
                    <label for="Male">Male</label><br>
                    <input type="radio" id="Female" name="gender" value="Female">
                    <label for="Female">Female</label><br>

                </div>

            </div>
            <div class="data">
                <p>Hobbies: <input type="text" placeholder="Entr hobbies" name="Hobbies">
                </p>
                <p>Countries: <select name="con" id="">
                        <option value="India">India</option>
                        <option value="Other contries">Other countries</option>

                    </select></p>
                <p>Password: <input type="password" placeholder="Enter strong Password" name="password"></p>
            </div>
            <div class="btn">
                <input type="submit" name="sub_btn" value="submit">
            </div>

        </div>
    </form>
</body>

</html>