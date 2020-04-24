<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>

</head>
<body>
<h1>Project</h1>
    <?php
    require_once("./dao/projectdao.php");

    class ProjectController{

        public static function find(){
            $pro = ProjectDao::getAll();
            $projects = json_encode($pro);
            echo($projects);
        }
        public static function findOne($para){
            $pro = ProjectDao::getOne($para);
            $project = json_encode($pro);
            echo($project);
        }
    }
    ?>
</body>
</html>