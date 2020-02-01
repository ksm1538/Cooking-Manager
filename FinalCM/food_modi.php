<?php
session_start();
$userid = $_SESSION['userid'];

$servername = 'localhost';
$dbname = 'CM';
$username = 'cm';
$password = 'cm';

$Fname = $_GET['Fname'];
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
                                <a href="main.php" class="button-list"><span class="fa fa-bars"></span>쿠킹매니저</a>
                            </li>

                        </ul>
                    </div>
                </div>				</div>
        </div>
    </div>
    <div class="nav-container ">
        <div class="container post-container">

            <div class="content">

                <!-- action button Region -->
                <div class="action affix-top">
                    <div class="action-box">
                        <ul>
                            <a class="action-icon none" id="back-top" href="food_modi.php" style="display: none;">
                                <i class="fa fa-caret-up" aria-hidden="true"></i>
                            </a>
                        </ul>
                    </div>
                </div>



                <div class="board-subject">
                    <!-- Board Head Region -->
                    <div class="board-head">
                        <ul>
                            <li class="board-title">
                                <span class="board-icon">FOOD_MODIFICATION</span>
                                <a href="food_modi.php">요리 수정</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="card-grid active">


                    <div class="board-list post-list card-view" style="position: relative; height: 700px;">
                        <form method="POST" action="food_modimodi.php">
                            <table>

                                <tbody>								
                                    <tr>
                                        <th>내용</th>
                                    </tr>
                                </tbody></table>
                            <textarea name='food_text' style="position: relative; height: 300px; width: 800px;"></textarea><hr>
                            <input type="hidden" name="Fname" value=<?php echo $Fname ?>>


                            <br>
                            <input type="submit" class="button-lg button-blue" onclick="location.href = 'food_modimodi.php'" value="내용 수정">
                            <button type="submit" class="button-lg button-blue" onclick="location.href = 'main.php'">취소</button></form>
                        <table> 
                            <tbody><tr>
                                    <th><재료를 수정하려면 재료를 클릭하세요.> </th>
                                </tr>                                            
                                <?php
                                try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT Finame FROM food where Fname='$Fname'");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    foreach ($rows as $rs) /* name, userid, phone */ {
                                        $Finame = $rs['Finame'];
                                        echo "<tr><td onclick=\"window.location='food_check.php?Finame=$Finame&Fname=$Fname';\">$Finame</td></tr>";
                                    }
                                } catch (PDOException $e) {
                                    echo "Error: " . $e->getMessage();
                                }
                                $conn = null;
                                ?><input type="submit" class="button-lg button-blue" onclick="location.href = 'food_addingre.php?Fname=<?php echo $Fname ?>'" value="재료 추가">

                            </tbody></table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</html>