
<?php
require_once("controller.php");
if(isset($_POST["insert"])){
extract($_POST);
// insert into tablename call collum name(col1,col2,...) values($name,$email)

$query="insert into user(id,name,phone,email,password,address,image) values('','$name','$phone','$email','$pswd','$add','$img')";
$obj->myquery($query);


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Create Account</h2>
  <form action="" method="post">
  <div class="mb-3 mt-3">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Phone:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter phone" name="phone">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">address</label>
      <input type="text" class="form-control" id="email" placeholder="Enter full address" name="add">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">images</label>
      <input type="text" class="form-control" id="" placeholder="Enter image link here" name="img">
    </div>
    
    <button type="submit" class="btn btn-primary" name="insert">Submit</button>
  </form>
</div>

<!-- yaha se hum data fecth krwa rahe hy start yaha se  -->


<table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>address</th>
        <th>Images</th>
      </tr>
    </thead>
    <tbody>
     <?php 
     $obj->userdata();
     ?>
      
    </tbody>
  </table>

</body>
</html>
