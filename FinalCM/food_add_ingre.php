<?php

$Finame = $_POST['Finame'];
$Finum = $_POST['Finum'];
$Fname = $_POST['Fname'];

session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';

if ($Finame == "" || $Finum == "") {
    echo '<script type = "text/javascript">alert("빈칸에 모두 입력해주세요.")</script> ';
    echo "<script>window.location.replace('main.php')</script>";
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into food(Fname, Finame, Finum) values ('$Fname','$Finame','$Finum') ;";
    // use exec() because no results are returned
    $conn->exec($sql);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


echo '<script type = "text/javascript">alert("추가 되었습니다.")</script> ';
echo "<script>window.location.replace('main.php')</script>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

