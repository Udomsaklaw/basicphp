<?php
require "config/connect_mysql.php";

//รับค่าที่จะแก้ไข
$id = $_GET['id'];

$sql = "DELETE FROM members WHERE id = '$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    echo "<div class='alert alert-success'>Delete member success</div>";
    echo '<meta http-equiv="refresh" content="1;url=read_member.php">';
} else {
    echo "<div class='alert alert-success'> member faill/div>";
}
