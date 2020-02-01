<?php
session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user WHERE Uid='$userid'");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    foreach ($rows as $rs) /* name, userid, phone */ {
        $name = $rs['Uname'];
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
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
                <!-- 소모임 메뉴 -->
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
                                <a href="main.php" class="button-list"><span class="fa fa-bars"></span>쿠밍매니저</a>
                        </ul>
                    </div>
                </div>				</div>
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
                                <span class="board-icon"> Modification</span>
                                <a href="mypage_modi.php">재료수정</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-메인 구간-!>
                <div class="card-grid active">
                    <div class="mypage-layout">
                        <!-- Board Nav Region -->
                        <div class="mypage-subnav">
                            <span class="mypage-tip"><i class="fa fa-info-circle" aria-hidden="true"></i><?php echo $userid ?></span>
                        </div>

                        <div class="form">
                            <form id="myInfoForm">
                                <input type="hidden" name="_csrf" value="2a06285c-ae7a-45e2-b4d6-60a3c9c7db89">
                                <table>
                                    <tbody><tr>
                                            <th><?php echo $name ?>님</th>
                                            <td>
                                                재료를 수정합니다.
                                            </td>
                                        </tr>
                                    <td>

                                    </td>   
                                    <tr>
                                        <th><?php echo $name ?>님의 재료</th>
                                    </tr>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM ingre WHERE Iid='$userid'");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    foreach ($rows as $rs) /* name, userid, phone */ {
        $Iname = $rs['Iname'];
        echo "<td onclick=\"window.location='mypage_modi_check.php?Iname=$Iname';\">$Iname</td>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
                                    </tbody></table>

                            </form>
                        </div>
                        <div class="form-button-region">
                            <button type="button" class="button-lg button-blue" onclick="location.href = 'mypage.php'">수정 취소</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</html>