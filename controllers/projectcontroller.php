<?php
$host = "localhost";
$uname = "root";
$pwd = "1234";
$db = "routertest";
$con = new mysqli($host,$uname,$pwd,$db);



function find(){
    global $con;
    $q2 = "select id,name,supervisor from project";
    $st1 = $con->prepare($q2);
    $st1->execute();
    $result = $st1->get_result();
    $projects=[];
    while ($project = $result->fetch_assoc()){
        array_push($projects,$project);
    }
    $st1->close();
    $con->close();
    header('Content-Type: application/json');
    echo json_encode($projects);
}
function findOne($para){
    global $con;
    $q2 = "select id,name,supervisor from project where id = ".$para;
    $st1 = $con->prepare($q2);
    $st1->execute();
    $result = $st1->get_result();
    $project = $result->fetch_assoc();
    $st1->close();
    $con->close();
    header('Content-Type: application/json');
    echo json_encode($project);
}

?>
