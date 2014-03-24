<?php
error_reporting(E_ALL);

#echo "script started \n ";

#$file = 'Wireless_sensor_lab/scan_programs.py' or die(' 1 Could not open file!');

//run the scan program that create a file in the current directory
system('/usr/bin/python /afs/informatik.uni-goettingen.de/user/d/d.siddapurahemashe/public_html/Wireless_sensor_lab/scan_programs.py',$retval);

#echo error_get_last() . "\n";
#echo $retval;

#echo getcwd() . "\n";
//read the program to a array and send the list
class MyClass
{
    public name;
    public path; 
    // Class properties and methods go here
    public function setname($newval)
    {
        $this->name = $newval;
    }
 
    public function getname()
    {
        return $this->name;
    }
    public function setpath($newval)
    {
        $this->path = $newval;
    }
 
    public function getpath()
    {
        return $this->path;
    }

}

$obj = new MyClass;


$file = fopen("programlist","r");
while(! feof($file))
{
  $temp=fgetcsv($file,0,"|");
  $obj = new MyClass;
  $obj->setname($temp[1]);
  $obj->setpath($temp[4]);
  print $obj->getname(). "".$obj.getpath();
}

fclose($file);
$pattern="/|/";
$file = 'programlist' or die(' 2 Could not open file!');
$file_handle = fopen($file, "r") or die("file doesn't exist");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   if(preg_match($pattern, $line, $matches))
	   echo $matches[0];
   else
	echo "No match";

}
fclose($file_handle);
//get the post request

//execute the script to build and run the program

//scan the folder for specific directories: images,pdf,text

//send back the data if the request is made
?>
