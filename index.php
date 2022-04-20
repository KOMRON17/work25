<?php
class Worker{
	private $name;
	private $age;
	private $salary;
	public function setName($n){
	    $this->name= $n;
	}
    public function getName(){
	    return $this->name;
    }
    public function setAge($a){
	    $this->age= $a;
    }
    public function getAge(){
	    return $this->age;
    }
    public function setSalary($s){
	    $this->salary= $s;
    }
    public function getSalary(){
	    return $this->salary;
    }
}
$obj =new Worker();
$obj->setName("Ivan");
$obj->setAge(21);
$obj->setSalary(1000);
 
$obj2 =new Worker();
$obj2->setName("Ivan");
$obj2->setAge(21);
$obj2->setSalary(1000);

echo "Summa age", $obj->getAge() + $obj2->getAge();
echo "<br>";
echo "summa salary", $obj->getSalary()+$obj2->getSalary();