<!--คำนวนเงินทอน-->
<?php
//Check Submit Form
if (!empty($_POST['submit']))
{

    $price = $_POST['price'];
    $money = $_POST['money'];

    $change = $money - $price;

}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>โปรแกรมคิดเงินทอน</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-primary">
        <h1 class="display-4 text-center text-white">โปรแกรมคิดเงินทอน</h1>
    </div>
    <div class="container">
        <form class="col-md-6 offset-md-3" method="POST" action="exercise_change.php">
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label"><b>ราคาสินค้า</b></label>
                <div class="col-sm-9">
                    <input type="number" step=".01" class="form-control" name="price" id="inputName" placeholder="กรอกราคาสินค้า" required value="<?=$_POST['price'];?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label"><b>จ่ายเงินมา</b></label>
                <div class="col-sm-9">
                    <input type="number" step=".01" class="form-control" name="money" id="inputName" placeholder="กรอกจำนวนเงิน" required value="<?=$_POST['money'];?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" name="submit" value="คำนวน">
                    <hr>
                <b>เงินทอน <?=number_format($change);?> บาท</b>
                </div>

            </div>
        </form>
    </div>


    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>