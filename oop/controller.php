 
 <?php 
session_start();
 define('DB_HOST','localhost');
 define('DB_USERNAME','root');
 define('PASSWORD','');
 define('DB_NAME','ecommerce');

 class controller{
public $con="";
public $host=DB_HOST;
    public $un=DB_USERNAME;
    public $pass=PASSWORD;
    public $db=DB_NAME;
public function __construct(){
    $this->con=new mysqli($this->host,$this->un,$this->pass,$this->db);
    if($this->con->errno){

        echo mysqli_errno();
    }

    else{

       }}
        //database end here
    public function myquery($input){

        $this->con->query($input);
    }

    public function userdata(){

        $fetch=$this->con->query("select *from user");
while($row=mysqli_fetch_array($fetch)){
    echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["phone"]."</td>";
echo "<td>".$row["email"]."</td>";
echo "<td>".$row["address"]."</td>";
echo "<td>".$row["image"]."</td>";
echo "</tr>";
}
        
    }
    // Yahan se login ka function Start Huga
    public function login($email,$pass){

$que=$this->con->query("select *from user where email='$email' and password='$pass'");
if($que===true){

    while($row=mysqli_fetch_array($que)){
        $_SESSION["username"]=$row["name"];
        $_SESSION["email"]=$row["email"];
      header("Location:welcome.php");
    }
}
else{


    echo "<script>alert('ایمیل یا پاسورڈ غلط ہے دوبارہ کوشش کریں۔')</script>";
}

    }
    
    
    
    }
 $obj=new controller;


 ?>