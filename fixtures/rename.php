<?php


$fn = function () {
    $bar = 'hello';


    echo $bar;
};

$fn();


function hello_world(): string
{
    echo 'hello';
}


hello_world();


(function () {
    hello_world();
})();


class Barkle
{
    private $bar;

    private $baz;

    public function doSomething(): string
    {

    }
}
