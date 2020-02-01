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




                <div class="board-subject">
                    <!-- Board Head Region -->
                    <div class="board-head">
                        <ul>
                            <li class="board-title">
                                <span class="board-icon">FOOD_ADD</span>
                                <a href="food_add.php">요리추가</a>
                            </li>

                        </ul>


                    </div>
                </div>

                <div class="card-grid active">


                    <div class="board-list post-list card-view" style="position: relative; height: 700px;">
                        <form method="POST" action="food_insert.php">
                            <table>

                                <tbody>
                                    <tr>  
                                        <th>요리명</th>
                                        <td>
                                            <input type="text" name="food_name" />
                                        </td>
                                    </tr>								
                                    <tr>
                                        <th>이미지명</th>
                                        <td>
                                            <input type="text" name="IMG_name" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>내용</th>
                                    </tr>
                                </tbody></table>
                            <textarea name='food_text' style="position: relative; height: 300px; width: 800px;"></textarea>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            필요한 재료명
                                        </td>
                                        <td>
                                            필요한 재료량
                                        </td>
                                    </tr>

                                    <tr>
                                        <th><input type="text" name="Iname0"/></th>
                                        <td>
                                            <input type="text" name="Inum0"/>
                                        </td>
                                    </tr>								
                                    <tr>
                                        <th><input type="text" name="Iname1"/></th>
                                        <td>
                                            <input type="text" name="Inum1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><input type="text" name="Iname2"/></th>
                                        <td>
                                            <input type="text" name="Inum2"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><input type="text" name="Iname3"/></th>
                                        <td>
                                            <input type="text" name="Inum3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><input type="text" name="Iname4"/></th>
                                        <td>
                                            <input type="text" name="Inum4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <input type="text" name="Iname5"/>
                                        </th>
                                        <td>
                                            <input type="text" name="Inum5"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><input type="text" name="Iname6"/></th>
                                        <td>
                                            <input type="text" name="Inum6"/>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th><input type="text" name="Iname7"/></th>
                                        <td>
                                            <input type="text" name="Inum7"/>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th><input type="text" name="Iname8"/></th>
                                        <td>
                                            <input type="text" name="Inum8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><input type="text" name="Iname9"/></th>
                                        <td>
                                            <input type="text" name="Inum9"/>
                                        </td>
                                    </tr>
                                </tbody></table>
                            <br>
                            <input type="submit" class="button-lg button-blue" onclick="location.href = 'food_insert.php'" value="추가">
                            <input type="submit" value="취소" class="button-lg button-blue" onclick="location.href = 'main.php'"></form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</html>