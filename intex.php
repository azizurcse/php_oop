<?php

class Overloading {

    public function __construct()
    {
        echo "this is parrent class construct class call"."<br>";
    }


}

class OverloadingExtends extends Overloading{

//    public function __construct()
//    {
//        echo "this is child class construct class call";
//    }
//
      public function test()
      {
          echo "hello this is overloading practise";
      }

}

$odj=new OverloadingExtends();
$odj->test();