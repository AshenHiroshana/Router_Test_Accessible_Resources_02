    <?php
        $host = "localhost";
        $uname = "root";
        $pwd = "1234";
        $db = "routertest";
        $con = new mysqli($host,$uname,$pwd,$db);



        function find(){
            global $con;
            $q2 = "select id,name from employee";
            $st1 = $con->prepare($q2);
            $st1->execute();
            $result = $st1->get_result();
            $employees=[];
            while ($employee = $result->fetch_assoc()){
                array_push($employees,$employee);
            }
            $st1->close();
            $con->close();
            header('Content-Type: application/json');
            echo json_encode($employees);
        }
        function findOne($para){
            global $con;
            $q2 = "select id,name from employee where id = ".$para;
            $st1 = $con->prepare($q2);
            $st1->execute();
            $result = $st1->get_result();
            $employee = $result->fetch_assoc();
            $st1->close();
            $con->close();
            header('Content-Type: application/json');
            echo json_encode($employee);
        }

    ?>
