<?php
require "config/connect_mysql.php";

$msg = "";

//รับค่าที่จะแก้ไข
$id = $_GET['id'];

$smsg = "";
if (!empty($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    $sql = "UPDATE members
            SET fullname='$fullname',
                tel = '$tel',
                email = '$email',
                password ='$password',
                status =  '$status'
                WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        $msg = "<div class='alert alert-success'>Add member success</div>";
        echo '<meta http-equiv="refresh" content="1;url=read_member.php">';
    } else {
        $msg = "<div class='alert alert-success'>Add member faill/div>";
    }
}

$sql = "UPDATE members SET fullname='Nida coco',tel='089995548'WHERE id='1'";
//$query = mysqli_query($connect, $sql); //read data in table

/*
if ($query) {
    echo "<div class='alert alert-success'>Edit member success</div>";
} else {
    echo "<div class='alert alert-success'>Edit member faill/div>";
}

*/

$sql_select = "SELECT*FROM members WHERE id='$id'";
$query_select = mysqli_query($connect, $sql_select);
$data = mysqli_fetch_assoc($query_select);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-success text-white">
        <h1 class="display-5">Update menber</h1>

    </div>
    <div class="container">
        <?php echo $msg; ?>
        <form method="POST" action="update_member.php?id=<?php echo $id ?>">
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" required value="<?php echo $data["fullname"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder="" required value="<?php echo $data["email"]; ?>">
                </div>
            </div>
            <div class=" form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder="" required value="<?php echo $data["password"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="" required value="<?php echo $data["tel"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="status" id="status" placeholder="" required value="<?php echo $data["status"]; ?>">
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