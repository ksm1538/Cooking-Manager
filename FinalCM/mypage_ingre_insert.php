<?php

session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';

$iname1 = $_POST['iname1'];
$inum1 = $_POST['inum1'];



if ($iname1 != "" && $inum1 != "") {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "insert into ingre(Iid, Iname,Inum) values ('$userid','$iname1','$inum1');";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
} else {
    echo '<script type = "text/javascript">alert("재료 또는 수량을 입력하지 않으셨습니다.")</script> ';
}
echo "<script>window.location.replace('mypage_plus.php')</script>";
?>


