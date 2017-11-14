<?php
/**
 * Created by PhpStorm.
 * User: Dimitris
 * Date: 5/31/2016
 * Time: 12:48 AM
 */
function db_conn(){

 $obj= new class_database(['database_type' => DB_TYPE,
     'database_name' => DB_NAME,
     'server' => DB_SERVER,
     'username' => DB_USER,
     'password' => DB_PASSWORD,
     'charset'=> DB_CHARSET
 ]);
    return $obj;

}

function return_details($id){

    $obj=db_conn();
    $result = $obj->select("certificates",["Surname","name","e-mail","type_id"],['PassID'=>$id]);
    return $result;
}

function randomString($length = 3)
{
    $str = "";
    $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;

}




