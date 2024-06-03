
<?php
    include('includes/connection.php');
    if(isset($_POST['userRegistration'])){
        $query = "INSERT INTO users VALUES(null, '$_POST[name]', '$_POST[email]', '$_POST[password]', $_POST[mobile] )";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo "<script type='text/javascript'>
                    alert('User Registered Successfully!');
                    window.location.href = 'index.php';
                </script>";
        }else{
            echo "<script type='text/javascript'>
                    alert('Error! Please try again!');
                    window.location.href = 'registration.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskWorks | Student Registration page</title>

    <!-- JQUERY file -->
    <script src="includes/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap file -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">

    <!-- CSS file -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body id="registration">
    <section>
        <h1 id="logintitle">TaskWorks</h1>
        <h5 id="loginsubhead">Where tasks works for you</h5>
    </section>
    <div class="row">
        <div class="col-md-3" id="register-home-page">
            <center><h3 style="margin-bottom: 20px;">Student registration</h3></center>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <input type="name" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile No." required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="userRegistration" value="Register" class="btn" style="margin-left:20px; background-color:#EDB5BF; font-weight: bold;" required>
                    <a href="./index.php" class="btn" style="margin-left:20px; background-color:#EDB5BF; font-weight: bold;">Go back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>