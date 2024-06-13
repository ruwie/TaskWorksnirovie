<?php
    include('../includes/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskWorks | Manage Task</title>

    <!-- JQUERY file -->
    <script src="includes/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap file -->
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">

    <!-- CSS file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body id="user_dashboard">
    <!-- Header  -->
    <section>
    <div class="row" id="header">
        <div class="col-md-12" >
            <div class="col-md-4" style="display: inline-block;">
                <h3 class="text-white">TaskWorks</h3>
                </div>
                <div class="col-md-6" style="display: inline-block;text-align: right;">
                    <b>Email: </b> Test@gmail.com
                    <span style="margin-left: 25px;"><b>Name: </b>Test users </span>
                </div>            
        </div>
    </div>
    </section>
    <section id="header2">
        <div class="container">
            <div class="row justify-content-between">
                <nav class="col-12">
                    <a href="admin_dashboard.php">Dashboard</a>
                    <a href="create_task.php">create task</a>
                    <a href="manage_task.php">Manage task</a>
                    <a href="index.php">Log out</a>
                </nav>
            </div>
        </div>
    </section>
    <!-- Header ends here -->
    <section>
        <h1 class="" style="text-align: center; padding-top: 50px; font-size: 40pt; color: white;">
        Manage student task
        </h1>
    </section>

    <table class="table" style="background-color: whitesmoke;width:75vw;margin-left: 10vw;">
        <tr>
            <th>S. No</th>
            <th>Task ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $sno = 1;
            $query = "select * from tasks";
            $query_run = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $row['tid']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['end_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
                
                <?php
            }
        ?>
    </table>
</body>
</html>
