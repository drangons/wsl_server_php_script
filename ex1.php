<?php
error_reporting(-1);
ini_set('display_errors', 'On');
class MyClass
{
    var $name;
    var $pp;
    // Class properties and methods go here
    public function setname($newval)
    {
        $this->name = $newval;
    }

    public function getname()
    {
        return $this->name;
    }

    public function setpp($val)
    {
        $this->pp = $val;
    }

    public function getpp()
    {
        return $this->pp;
    }

}


$file = fopen("programlist","r");
$a = array();
while(! feof($file))
{
  $temp=fgetcsv($file,0,"|");
  #print $temp[4];
  $obj = new MyClass;
  $obj->setname($temp[1]);
  //print $obj->getname(); 
  $obj->setpp($temp[4]);
  //print $obj->getpp();
  $a[]=$obj;
}

foreach($a as $x)
{
	print $x->getname().PHP_EOL;
}

?>
