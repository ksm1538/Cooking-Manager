<?php
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
                                <a href="food_ingreadd"><?php echo $Fname ?>재료 추가</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-메인 구간-!>
                <div class="card-grid active">
                    <div class="mypage-layout">
                        <!-- Board Nav Region -->
                        <div class="mypage-subnav">
                        </div>
                        <form action="food_add_ingre.php" method="POST">


                            <input type="hidden" name='Fname' value=<?php echo $Fname ?>>
                            <br>
                            재료 이름 : <input type="text" name='Finame'>
                            재료 수량 : <input type="text" name='Finum'>
                            <input type = "submit" value="수정" onclick="window.location = 'food_add_ingre.php'"/>
                        </form>


                        <div class="form-button-region">
                            <button type="button" class="button-lg button-blue" onclick="location.href = 'main.php'">수정 취소</button>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</html>