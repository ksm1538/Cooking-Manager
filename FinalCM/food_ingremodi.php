<?php

session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';
$Finame = $_POST['Finame'];
$Fname = $_POST['Fname'];
$num = $_POST['num'];

if ($num == 0) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "delete from food WHERE Fname = '$Fname'&&Finame='$Finame'";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    echo '<script type = "text/javascript">alert("수정 되었습니다.")</script> ';
    echo "<script>window.location.replace('main.php')</script>";
} else {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE food SET Finum='$num' WHERE Fname = '$Fname' && Finame='$Finame'";

        // use exec() because no results are returned
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    echo '<script type = "text/javascript">alert("수정 되었습니다.")</script> ';
    echo "<script>window.location.replace('main.php')</script>";
}
?>


