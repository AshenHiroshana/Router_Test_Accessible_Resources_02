<?php
require_once("./entity/employee.php");
class EmployeeDao{

    public static function getAll(){

        require("db.php");
        $q2 = "select id,name from employee";
        $st1 = $con->prepare($q2);
        $st1->execute();
        $employee = $st1->fetchAll(PDO::FETCH_CLASS,"Employee");
        return $employee;

    }

    public static function getOne($id){

        require("db.php");
        $q2 = "select id,name from employee where id = ".$id;
        $st2 = $con->prepare($q2);
        $st2->execute();
        $employee = $st2->fetchAll(PDO::FETCH_CLASS,"Employee");
        return $employee;

    }
}
?>