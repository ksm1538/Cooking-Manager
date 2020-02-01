<?php

session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';

$Fname = $_POST['food_name'];
$IMGname = $_POST['IMG_name'];
$foodtext = nl2br($_POST[food_text]);
$foodtext1 = $_POST['food_text'];
$Iname0 = $_POST['Iname0'];
$Inum0 = $_POST['Inum0'];

$Iname1 = $_POST['Iname1'];
$Inum1 = $_POST['Inum1'];

$Iname2 = $_POST['Iname2'];
$Inum2 = $_POST['Inum2'];

$Iname3 = $_POST['Iname3'];
$Inum3 = $_POST['Inum3'];

$Iname4 = $_POST['Iname4'];
$Inum4 = $_POST['Inum4'];

$Iname5 = $_POST['Iname5'];
$Inum5 = $_POST['Inum5'];

$Iname6 = $_POST['Iname6'];
$Inum6 = $_POST['Inum6'];

$Iname7 = $_POST['Iname7'];
$Inum7 = $_POST['Inum7'];

$Iname8 = $_POST['Iname8'];
$Inum8 = $_POST['Inum8'];

$Iname9 = $_POST['Iname9'];
$Inum9 = $_POST['Inum9'];


if ($Fname == '' || $IMGname == '' || $foodtext == '' || $Iname0 == '' || $Inum0 == '') {
    echo '<script type = "text/javascript">alert("빈칸을 입력해주세요.")</script> ';
} else {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "insert into food(Fname, Finame,Finum,Text,IMGname) values ('$Fname','$Iname0','$Inum0','$foodtext','$IMGname');";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    if ($Iname1 != '' && $Inum1 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname1','$Inum1');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname2 != '' && $Inum2 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname2','$Inum2');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname3 != '' && $Inum3 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname3','$Inum3');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname4 != '' && $Inum4 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname4','$Inum4');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname5 != '' && $Inum5 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname5','$Inum5');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname6 != '' && $Inum6 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname6','$Inum6');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname7 != '' && $Inum7 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname7','$Inum7');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname8 != '' && $Inum8 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname8','$Inum8');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    if ($Iname9 != '' && $Inum9 != '') {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into food(Fname, Finame,Finum) values ('$Fname','$Iname9','$Inum9');";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
echo "<script>window.location.replace('food_add.php')</script>";
?>

