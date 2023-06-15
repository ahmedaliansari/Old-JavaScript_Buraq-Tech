 <?php 
 require_once("birds.php");

 
 class animal extends birds{
//we are learning two type of OOP pillar Polymorphism and Encapsulate
    public $alpha="ali";
    public function __construct(){

$this->sound("Mew mEw");
    }
private function sound($sound){
echo "<br/>This My Pet animal Sound is ".$sound;

}

public function name($name,$nasal){
    echo "<br/>My Pet Animal Name ".$name." And Nasal Is ".$nasal;


}

public function age($age)
{
    return $age;
}


 }

 $obj=new animal;

$obj->birdsname("Toota");

//  $obj->name("Mano","Persian Cat");
//  $obj->sound("Mew Mew");
 echo"<br/>My pet animal age is ". $obj::age(1);
 $obj->time("4bje");
 $obj->date("12-12-2022");

 
 
 ?>