<?php 
    $u_con= file_get_contents("php://input");
    $u_obj = json_decode( $u_con ,true);
    $u_obj["name"]  = $u_obj["name"]."ccccc";
    echo json_encode($u_obj);
    //echo $u_obj;
        //echo "test". $_GET ['uname']." ". $_GET['role'];

?>