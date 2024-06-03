<?php
    include('includes/connection.php');
    if(isset($_POST['userLogin'])){
        $query = "SELECT email,password,name,sid FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'";

        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run)){
            echo "<script type='text/javascript'>                    
                    window.location.href = 'user_dashboard.php';
                </script>";

        }else{
            echo "<script type='text/javascript'>
                    alert('Wrong Credentials!');
                    window.location.href = 'user_login.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskWorks | User login page</title>

    <!-- JQUERY file -->
    <script src="includes/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap file -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">

    <!-- CSS file -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body id="user_login">
<section>
        <h1 id="logintitle">TaskWorks</h1>
        <h5 id="loginsubhead">Where tasks works for you</h5>
    </section>
    <div class="row">
        <div class="col-md-3" id="login-home-page">
            <center><h3 style="margin-bottom: 20px;">Student login</h3></center>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="userLogin" value="Login" class="btn" style="background-color:#EDB5BF; font-weight: bold;" required>
                    <a href="./index.php" class="btn" style="margin-left:20px; background-color:#EDB5BF; font-weight: bold;">Go back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>