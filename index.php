<?php
//var_dump($_SERVER);
$urlparts = explode("?", $_SERVER['REQUEST_URI']);
$fullurl = $urlparts[0];
$parameters = "";
if (isset($_GET['id'])){
    $parameters = $_GET['id'];
}

$url = explode("/", $fullurl);
$source = $url[2];
$method = "";
if(sizeof($url)>=4){
    $method = $url[3];
}

switch ($source) {

    case "employee" :
        require_once("controllers/employeecontroller.php");
        switch ($method){
            case "find" :
                if ($parameters == ""){
                    find();
                }else{
                    findOne($parameters);
                }
                break;
        }
        break;

    case "project" :
        require_once("controllers/projectcontroller.php");
        switch ($method){
            case "find" :
                if ($parameters == ""){
                    find();
                }else{
                    findOne($parameters);
                }
                break;
        }
        break;



}

?>