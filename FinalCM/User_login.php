<?php

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';

$uid = $_POST['userid'];
$upass = $_POST['userpass'];


if ($_POST['userid'] == "" || $_POST['userpass'] == "") {
    echo '<script type = "text/javascript">alert("아이디 또는 패스워드를 입력해주세요.")</script> ';
    echo "<script>window.location.replace('login.php')</script>";
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user WHERE Uid='$uid'");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    foreach ($rows as $rs) /* name, userid, phone */ {
        $userid = $rs['Uid'];
        $userpass = $rs['Upass'];
    }
    if ($_POST['userid'] != "" || $_POST['userpass'] != "") {
        if ($uid == $userid) {
            if ($upass == $userpass) {
                session_start();
                $_SESSION['userid'] = $uid;
                error_reporting(E_ALL ^ E_NOTICE);
                header('Location: ./main.php');
            } else {
                echo '<script type = "text/javascript">alert("아이디나 패스워드를 잘못입력하셨습니다.")</script> ';
                echo "<script>window.location.replace('login.php')</script>";
            }
        } else {
            echo '<script type = "text/javascript">alert("아이디나 패스워드를 잘못입력하셨습니다.")</script> ';
            echo "<script>window.location.replace('login.php')</script>";
        }
    } else {
        echo '<script type = "text/javascript">alert("아이디나 패스워드를 잘못입력하셨습니다.")</script> ';
        echo "<script>window.location.replace('login.php')</script>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>