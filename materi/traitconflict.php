<?php

trait A
{
    function doA()
    {
        echo "a";
    }
    function doB()
    {
        echo "b";
    }
}
trait B
{
    function doA()
    {
        echo "A";
    }
    function doB()
    {
        echo "B";
    }
}

class Sample
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}


$sample = new Sample();
$sample->doA();
$sample->doB();
