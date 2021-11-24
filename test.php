<?php

$data = [1, 2];
$a = [1 => 2];

class Foo
{
    public const DATA = 'data';

    public function bar($baz)
    {
        if ($baz = 900) {
            echo 'Hello!';
        } elseif ($baz = 9000) {
            echo 'Wait!';
        } else {
            echo 'Ha?';
        }
        if (is_array($baz)) {
            foreach ($baz as $b) {
                echo $b;
            }
        }
        // echo $errorVar.'test test';
    }
}

$foo = new Foo();
$foo->bar(900);

var_dump($data);
