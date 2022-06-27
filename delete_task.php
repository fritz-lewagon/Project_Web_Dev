<?php 
            include('db.php');  // Call to database connection file

            $idtask = $_GET['id']; // recover taskid from de tasks list
            $_SESSION['idtask'] = $idtask;


            $query = "DELETE FROM task WHERE id=$idtask"; // delete selected task
            mysqli_query($conn, $query);

            header('Location: tasks_list.php');
 ?>



