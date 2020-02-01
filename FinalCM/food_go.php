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
                </div>				
            </div>
        </div>
    </div>
    <div class="nav-container ">
        <div class="container post-container">
            <div class="content">
                <div class="post box">
                    <div class="post-info" data-role="post-info">
                        <div class="post-contact">
                            <span class="contact-name dropdown">
                                <?php echo $Fname ?>
                            </span>

                        </div>

                    </div>


                    <!-- Market Product Region -->

                    <div class="post-content">
                         <input type="submit" class="button-lg button-blue" value="요리하기" onclick="location.href='make_food.php?Fname=<?php echo $Fname?>';"/><br><br><br>
                        <?php

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM food where Fname='$Fname'");
                            $stmt->execute();
                            $rows = $stmt->fetchAll();
                            foreach ($rows as $rs) /* name, userid, phone */ {
                                $Finame = $rs['Finame'];
                                $Finum = $rs['Finum'];
                                $IMG = $rs['IMGname'];
                                if ($IMG != NULL) {
                                    echo "<image src='Food_image/$IMG' width='400' height='250'><br>";
                                }
                                $Text = $rs['Text'];
                                if ($Text != NULL) {
                                    echo "내용 : $Text <br><br>";
                                }

                                echo "<tr><th>재료 이름 : $Finame,     </th><td>재료 수량 : $Finum</td></tr><br>";
                            }
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                        $conn = null;
                        ?>
                    </div>
                    <hr class="post-hr">
                </div>
                <div class="form-button-region">

                    <input type="submit" class="button-lg button-blue" value="수정" onclick="location.href = 'food_modi.php?Fname=<?php echo $Fname ?>';"/>
                    <input type="submit" class="button-lg button-blue" value="목록" onclick="location.href = 'main.php'">
                    <input type="submit" class="button-lg button-blue" value="삭제" onclick='location.href = "food_delete.php?Fname=<?php echo $Fname ?>";'>


                </div>
            </div>

        </div>

</html>