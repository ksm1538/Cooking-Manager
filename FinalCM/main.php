<?php
session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';
?>
<html>
    <link rel="stylesheet" href="fontello.css">
    <link rel="stylesheet" href="clien.css" id="whiteCss">
    <link rel="stylesheet" href="clien.small.css" id="small" disabled="">
    <link rel="stylesheet" href="large.css" id="large" disabled="">
    <link rel="stylesheet" href="jquery-ui.css">




    <div class="menu-side" id="style-scrollbar">

        <div class="nav-group">
            <div class="group-menu dropdown-menu dropdown-menu-right">

                <div class="group-menu-inner" data-role="gnb-somoim-menu2">


                    <ul>
                        <li><a href="main.php"><span class="icon-number">1</span><span class="board-name">요리레시피</span></a></li>


                        <li><a href="recommend.php"><span class="icon-number">2</span><span class="board-name">쿠킹데일리</span></a></li>


                        <li><a href="mypage.php"><span class="icon-number">3</span><span class="board-name">마이페이지</span></a></li>


                    </ul>
                    <button type="submit" class="button-lg button-blue" onclick="window.location = 'User_logout.php';"/>로그아웃</button>


                    <div class="group-sub-menu">
                        <ul>
                            <li class="group-menu-action">
                                <a href="main.php" class="button-list"><span class="fa fa-bars"></span>쿠킹매니저</a>

                            </li>

                        </ul>
                    </div>
                </div>				
            </div>
        </div>
    </div>
    <div class="nav-container ">
        <div class="container post-container">
            <div class="content">

                <!-- action button Region -->




                <div class="board-subject">
                    <!-- Board Head Region -->
                    <div class="board-head">
                        <ul>
                            <li class="board-title">
                                <span class="board-icon">i</span>
                                <a href="main.php">요리레시피</a>
                            </li>
                            <li>
                                <button type="submit" class="button-lg button-blue" onclick="location.href = 'food_add.php'">요리추가</button>
                            </li>
                        </ul>


                    </div>
                </div>
                <div class='card-grid active'>              
                    <div class="board-list post-list card-view" style="position: relative; height: 6210px;">
<?php
$i = 0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT DISTINCT Fname, IMGname FROM Food GROUP BY Fname");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    foreach ($rows as $rs) /* name, userid, phone */ {
        $Fname = $rs['Fname'];
        $IMG = $rs['IMGname'];
        if ($i == 0) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 0px;'>";
        }
        if ($i == 1) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 0px;'>";
        }
        if ($i == 2) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 414px;'>";
        }
        if ($i == 3) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 414px;'>";
        }
        if ($i == 4) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 828px;'>";
        }
        if ($i == 5) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 828px;'>";
        }
        if ($i == 6) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 1242px;'>";
        }
        if ($i == 7) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 1242px;'>";
        }
        if ($i == 8) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 1656px;'>";
        }
        if ($i == 9) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 1656px;'>";
        }
        if ($i == 10) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 2070px;'>";
        }
        if ($i == 11) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 2070px;'>";
        }
        if ($i == 12) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 2484px;'>";
        }
        if ($i == 13) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 2484px;'>";
        }
        if ($i == 14) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 2898px;'>";
        }
        if ($i == 15) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 2898px;'>";
        }
        if ($i == 16) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 3312px;'>";
        }
        if ($i == 17) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 3312px;'>";
        }
        if ($i == 18) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 3726px;'>";
        }
        if ($i == 19) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 3726px;'>";
        }
        if ($i == 20) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 4140px;'>";
        }
        if ($i == 21) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 4140px;'>";
        }
        if ($i == 22) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 4554px;'>";
        }
        if ($i == 23) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 4554px;'>";
        }
        if ($i == 24) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 4968px;'>";
        }
        if ($i == 25) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 4968px;'>";
        }
        if ($i == 26) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 5382px;'>";
        }
        if ($i == 27) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 5382px;'>";
        }
        if ($i == 28) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 5796px;'>";
        }
        if ($i == 29) {
            echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 5796px;'>";
        }



        echo "<div class='item'>"
        . "<div class='card-content has-image' data-role='card-content'>"
        . "<div class='card-image'>"
        . "<image src='Food_image/$IMG' width='400' height='250'>"
        . "</div>"
        . "</div>"
        . "<div class='list-title' data-role='list-title' data-toggle-custom='dropdown'>"
        . "<a class='list-subject' href='food_go.php?Fname=$Fname' data-role='cut-string' style='display:block;'>"
        . "$Fname"
        . "</a>"
        . "<div class='card-content has-image'>"
        . "<div class='card-preview'>";
        $a = $conn->prepare("SELECT * FROM Food WHERE Fname='$Fname'");
        $a->execute();
        $b = $a->fetchAll();
        foreach ($b as $rs) /* name, userid, phone */ {
            $name = $rs['Finame'];
            echo "$name. ";
        }
        echo
        "</div>"
        . "</div>"
        . "</div>"
        . "</div>"
        . "</div>";
        $i++;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
                    </div>




                </div>

            </div>
            </html>