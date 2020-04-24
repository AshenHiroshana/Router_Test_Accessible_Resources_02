<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee</title>

</head>
<body>
<h1>Employee</h1>
    <?php

        require_once("./dao/employeedao.php");

        class EmployeeController{

            public static function find(){
                $emp = EmployeeDao::getAll();
                $employees = json_encode($emp);
                echo($employees);
            }
            public static function findOne($para){
                $emp = EmployeeDao::getOne($para);
                $employee = json_encode($emp);
                echo($employee);
            }
        }
    ?>
</body>
</html>