<?php
// app/Tools/SomeExampleClass.php
namespace App\Tools;
  
class Unique
{
    public function someFunction()
    {
         echo "Hello world and foo bar and stuff";
    }

    public function generate()
    {
    	return md5(microtime());
    }
}