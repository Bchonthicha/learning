<?php

    echo "hello";
    function A()
    {
        echo"OK";
    }
    A();

    //array
    //1
    $a=array();
    //2
    $a1 =array(10,"pp",array(10,10));
    var_dump($a1);
    print_r ($a1);
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    //3
    //array append
    //3.1  sortform
    $a2[] ='20';
    var_dump($a2);
    //3.2  
    array_push($a2,"30");
    var_dump($a2);
    //
    echo $a2[1];
    //----
    //4. obj key value
    //4.1 dictionary
    //4.2 class
    //--

    //4.1.1 empty
    $obj1= array(); //key-value -> associated ,js var obj1={}
    //4.2.1 init value
    //js var obj2={"name":"A","age":20}
    $obj1=array("name"=>"B");
    var_dump($obj1);
    var_dump(json_encode($obj1));
    //4.2
    class User{
        public $name;
        public $age;

    }
    $user1 = new User();
    $user1->name ="B";
    $user1->age =20;
    var_dump($user1);
    var_dump(json_encode($user1));
    //---
    $C=json_decode(json_encode($user1));
    var_dump($C);
    //--
    $str_user= json_encode($user1);
    $C1 = json_decode($str_user);
    var_dump($C1);
    /*
    $C1["name"] =$C1["name"]."0001";
    var_dump($C1);*/   //error
    $C1->name =$C1->name."002";
        var_dump($C1);
    //--
     $C2 = json_decode($str_user,true);
    var_dump($C2);
    //----- aaco
    $C2["name"] =$C2["name"]."0001";
    var_dump($C2);
    //
?>