<?php

class FunctionOverloading {

    public function __construct()
    {
        echo "this is parrent class construct class call"."<br>";
    }
    public function __call($name, $arguments)
    {
        if ($name=="test")
        {
           $parameter=count($arguments);
        }

        if($parameter==2)
        {
            echo "two parameter passed";
        }else{
            echo 'not match this parameter';
        }
    }


}
$obj=new FunctionOverloading();
$obj->test('azizur','rahman');

