<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasks List</title>
  <link rel = "stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
<?php 
$conn = mysqli_connect(  // connect to the database
  'localhost',  // host (machine) where the database is located. In our case it is the machine where the php pages are located.
  'root',       // user with permission to access the database
  'root',    // password of this user
  'tasks'   // database name
) or die(mysqli_erro($mysqli));  // End of program if conex not successfull

 ?>

    <section class="list-tasks">
        <h4> Tasks List</h4>
        <table class="content-table">
            <thead>
              <tr>
                <!-- header of the tasks table -->
                <th>TaskID</th>
                <th>Title</th>
                <th>Description</th>
                <th>User</th>
                <th>Created at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

                $query = "SELECT * FROM task INNER JOIN users on task.iduser = users.iduser"; 
                $result_tasks = mysqli_query($conn, $query);    

                while($row = mysqli_fetch_assoc($result_tasks)) 
                {   ?> <!-- do a loop while a tasks exist in a recorset $result_tasks -->
                <tr>
                  <!-- Show tasks in a table. One row per task -->
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
          </tr>
          <?php
             } 
          ?> <!-- end of loop while -->
        <h4> The database has been successfully installed !!</h4>  
        </tbody>
          </table>
    </section>
    </body>
</html>