<?php
require "config/connect_mysql.php";

$msg = "";

if (!empty($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $status = $_POST['status'];


    $sql = "INSERT INTO members(fullname,email,tel,password,status) 
                VALUES ('$fullname','$email','$tel','$password','$status')";

    $query = mysqli_query($connect, $sql);

    if ($query) {
        $msg = "<div class='alert alert-success'>Add member success</div>";
        echo '<meta http-equiv="refresh" content="1;url=read_member.php">';
    } else {
        $msg = "<div class='alert alert-success'>Add member faill/div>";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-success text-white">
        <h1 class="display-5">Add New menber</h1>

    </div>
    <div class="container">
        <?php echo $msg; ?>
        <form method="POST" action="create_member.php">
            <form>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="password" id="password" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Tel</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tel" id="tel" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="status" id="status" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <input type="submit" name="submit" value="Submit" class="btn btn-info">
                    </div>
                </div>
            </form>
    </div>
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html