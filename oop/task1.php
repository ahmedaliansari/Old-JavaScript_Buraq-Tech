 <?php 
 require_once("schoolclass.php");

 class school extends classname{

public function name($name){
    echo "School Name is ".$name;


}
public function address($add){
    echo "Address:".$add;
}


 }

 $obj=new school;
 $obj->name("Islamia Public School");
 echo "<br>";
 $obj->address("Gulshan Behar");
 echo "<br>";
 $obj->stdname("Muzammil");
 echo "<br>";
 $obj->age(12);
 echo "<br>";
 echo $obj->v();




 
 ?>