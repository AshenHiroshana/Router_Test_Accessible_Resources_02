<?php
//var_dump($_SERVER);
$urlparts = explode("?", $_SERVER['REQUEST_URI']);
$fullurl = $urlparts[0];
$parameters = "";
if (isset($_GET['message'])){
    $parameters = $_GET['message'];
}

$url = explode("/", $fullurl);
$source = $url[2];
$method = "";
if(sizeof($url)>=4){
    $method = $url[3];
}

switch ($source) {

    case "employee" :
        require_once("controllers/employee.php");
        switch ($method){
            case "display" : display($parameters); break;
            case "finish"  : finish($parameters);
        }
        break;

    case "project" :
        require_once("controllers/project.php");
        switch ($method){
            case "display" : display($parameters); break;
            case "finish"  : finish($parameters);
        }
        break;



}

?>