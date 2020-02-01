<?php

session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';

$Text = $_POST['food_text'];
$Fname = $_POST['Fname'];


if ($Text != "") {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $a = "UPDATE food SET Text='$Text' WHERE Fname = '$Fname' AND Text IS NOT NULL";

        // use exec() because no results are returned
        $conn->exec($a);
    } catch (PDOException $e) {
        echo $a . "<br>" . $e->getMessage();
    }
}

if ($Text == "") {
    echo '<script type = "text/javascript">alert("적어도 하나의 칸에 수정할 내용을 입력해주세요.")</script> ';
    echo "<script>window.location.replace('main.php')</script>";
}
echo '<script type = "text/javascript">alert("수정 되었습니다.")</script> ';
echo "<script>window.location.replace('main.php')</script>";
