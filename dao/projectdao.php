<?php
require_once("./entity/project.php");
require_once("./dao/employeedao.php");
class ProjectDao{

    public static function getAll(){

        require("db.php");
        $q1 = "select id,name,supervisor from project";
        $st1 = $con->prepare($q1);
        $st1->execute();
        $project = $st1->fetchAll(PDO::FETCH_CLASS,"Project");
        $employees =  EmployeeDao::getAll();
        foreach($project as $p){
            foreach($employees as $e){
                if($p->getSupervisor()==$e->getId()){
                    $p->setSupervisor($e);
                }
            }
        }
        return $project;

    }

    public static function getOne($id){

        require("db.php");
        $q2 = "select id,name,supervisor from project where id = ".$id;
        $st2 = $con->prepare($q2);
        $st2->execute();
        $project = $st2->fetchAll(PDO::FETCH_CLASS,"Project");
        $employees =  EmployeeDao::getAll();
        foreach($project as $p){
            foreach($employees as $e){
                if($p->getSupervisor()==$e->getId()){
                    $p->setSupervisor($e);
                }
            }
        }
        return $project;

    }
}
?>