 <?php 
 $num=10;

 for($i=0;$i<=$num;$i++){

    echo "<br>I have lost my Life ".$i." Times";
 }

 $a=10;
 while($a<=10){

    echo $a."<br>I am While Loop<br>";
    $a++;
 }

$name=array("Bilal","Shoaib","Asharif","Sajjad");


for($i=0;$i<4;$i++){
    echo "<br>".$name[$i];

}


 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">

  <?php 
  for($hussain=1;$hussain<=10;$hussain++){
  ?>
    <div class="col-sm-4">
    <img src="1 (4).jpg" width="100%" alt="">
    </div>
    <?php }?>


 
  </div>
</div>

</body>
</html>
