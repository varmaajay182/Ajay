<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="First_name" class="col-form-label" >First Name:</label>
            <input type="text" class="form-control" placeholder="Change Name" name="fname">
          </div>
          <div class="form-group">
            <label for="Last_name" class="col-form-label" >Lirst Name:</label>
            <input type="text" class="form-control" placeholder="Change Name" name="lname">
          </div>
          <div class="form-group">
            <label for="number" class="col-form-label" >Contact:</label>
            <input type="number" class="form-control" placeholder="Can you change number" name="number">
          </div>
          <div class="form-group">
            <label for="Email" class="col-form-label" >Email:</label>
            <input type="email" class="form-control"  name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control"  placeholder="Password" name="password">
           </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Change Value</button>
      </div>
    </div>
  </div>
</div>
<h2>user list</h2>
<table>
<form  method="post">
        <div class="search">
            <label for="search">search:</label>
            <input type="text" placeholder="search " name="search">
        </div>
        <div class="btn">
                <input type="submit" name="sub_btn" value="submit">
            </div>
    </form>
  <tr>
    <th>Index No</th>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Phone_No</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Hobbies</th>
    <th>Countries</th>
    <th>password</th>
    <th colspan="2" text-aligns="center"> Action</th>
    
  </tr>
  
 
<?php 

include('connection.php');

$searchData= $_POST['search'];

$search = "SELECT * FROM users
WHERE First_Name LIKE '%$searchData%' OR Last_Name LIKE '%$searchData' OR Phone_No LIKE '%$searchData' OR Email LIKE '%$searchData' OR Gender LIKE '%$searchData'OR Hobbies LIKE '%$searchData' OR Countries LIKE '%$searchData';";

$result = mysqli_query($conn,$search);

   while($data = mysqli_fetch_array($result)){
    echo "<tr>";
     echo "<td>".$data["ID"]."</td>";
     echo "<td>".$data["First_Name"]."</td>";
     echo "<td>".$data["Last_Name"]."</td>";
     echo "<td>".$data["Phone_No"]."</td>";
     echo "<td>".$data["Email"]."</td>";
     echo "<td>".$data["Gender"]."</td>";
     echo "<td>".$data["Hobbies"]."</td>";
     echo "<td>".$data["Countries"]."</td>";
     echo "<td>".$data["password"]."</td>";
     echo "<td><a href='update.php?ID=".$data["ID"]."' class='btn btn-info' >Edit</a></td>";
    //  echo "<td><input type='button' name='edit' value='edit' class='btn btn-info' data-toggle='modal' data-target='#exampleModal' data-whatever=' '></td>";
     echo "<td><input type='button' name='delete' value='delete' class='btn btn-info'></td>";
     echo "</tr>";
    }  
?>



</table>
<Script>$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Change The Value of Table ' )
  modal.find('.modal-body input').val(recipient)
})</Script>
</body>
</html>
