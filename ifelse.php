 <?php
date_default_timezone_set("Asia/Karachi");
echo "The time is " . date("h:i:sa");
 if(!empty($_POST["user"])){
    
    if($_POST["user"]==='ALI' && $_POST["pass"]==='12345'){

    echo "<script>alert('Successfully Login')</script>";
}
elseif($_POST["user"]==='sajid' && $_POST["pass"]==='12345'){
    echo "<script>alert('Welcome to Buraq Tech MR Sajid')</script>";
}
elseif($_POST["user"]==='hussain' && $_POST["pass"]==='12345'){
    echo "<script>alert('You are Not Invited MR Hussain')</script>";
}



else{

    echo "<script>alert('Invalid Username and Password')</script>";
}
 }
 else{
    echo "<script>alert('Invalid filed hy bhai')</script>";

 }
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post">

    <input type="text" placeholder="User Name" name="user"/>
    <input type="password" placeholder="User Name" name="pass"/>
    <button type="submit" name="login">Login</button>
    </form>
    
 </body>
 </html>