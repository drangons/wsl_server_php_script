<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
echo 'Current PHP version: ' . phpversion()."\n";
#echo "System info:".phpinfo();
echo 'Current script owner: ' . get_current_user();
?>

<?php

/*ini_set('display_errors',1);
error_reporting(E_ALL);

echo getcwd() . "\n";

//chdir('/afs/informatik.uni-goettingen.de/user/d/d.siddapurahemashe/');

echo getcwd() . "\n";
// set file to read
$file = 'scan_programs.py' or die(' 1 Could not open file!');

// open file

$fh = fopen($file, 'r')or die(' 2 Could not open file!');

echo error_get_last() . "\n";

// read file contents

$data = fread($fh, filesize($file)) or die('Could not read file!');

// close file

fclose($fh);

// print file contents

echo $data;

*/?>


<?php
HttpResponse::setCache(true);
HttpResponse::setContentType('text/plain');
HttpResponse::setData("This is a sample");
HttpResponse::send();
?>


</body>
</html> 
