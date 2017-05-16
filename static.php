<?php

class Student {
    public static $depertments='CSE';
    public function admission()
    {
        echo "this is students choice"." ".self::$depertments;
    }
}


class Result extends Student{


    public static function info()
    {
        echo self::$depertments." student can go to 423 No room";
    }

}

 Result::info();