  <?php
  
 class config{
//we need 4 thing to connect database below give root is a default username and password leave blank
    private $username="root";
    private $host="localhost";
    private $databasename="ecommerce";
    private $password="";
   
    public $con="";


public function __construct(){

$this->con=mysqli_connect($this->host,$this->username,$this->password,$this->databasename);

if($this->con->connect_errno){

    echo "not connect";
}
else{

    echo  "connected";
}
}
 } 
 $obj=new config;

  
  ?>