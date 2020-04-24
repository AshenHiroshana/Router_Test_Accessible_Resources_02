<?php

class Project{
    public $id;
    public $name;
    public $supervisor;

    function __construct(){

    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSupervisor(){
        return $this->supervisor;
    }


    function setId($id){
        $this->id=$id;
    }
    function setName($name){
        $this->name=$name;
    }
    function setSupervisor($supervisor){
        return $this->supervisor=$supervisor;
    }

}

?>