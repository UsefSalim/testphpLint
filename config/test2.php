<?php

$data = array(1,2);
$a = array(1

=> 2);

class Foo{
    const DATA = 'data';
    function bar($baz)
    {
        if ($baz = 900)  echo 'Hello!';
        elseif ($baz = 9000)   echo 'Wait!';
        else  echo 'Ha?';
        if (is_array($baz)) 
            foreach ($baz as $b) {
                echo $b;
            }
        
    }
}


$foo = new Foo();
$foo->bar(900);

var_dump($data);
