<?php
class Worker{
	public $name;
	public $age;
	public $salary;
}
$obj =new Worker();
$obj->name="Ivan";
$obj->age=21;
$obj->salary=1000;
 
$obj2 =new Worker();
$obj2->name="Vanya";
$obj2->age=20;
$obj2->salary=2000;
echo "Summa age", $obj->age + $obj2->age;
echo "<br>";
echo "summa salary", $obj->salary+$obj2->salary;
