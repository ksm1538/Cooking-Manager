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
                                <span class="board-icon">RECOMMEND</span>
                                <a href="recommend.php">쿠킹데일리</a>
                            </li>
                        </ul>


                    </div>
                </div>
               
                <div class="card-grid active">
                    <div class="board-list post-list card-view" style="position: relative; height: 6210px;">

<?php
                $i=0;
                try{
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $d = $conn->prepare("SELECT DISTINCT Fname FROM food"); 
    $d->execute();
    $qq = $d->fetchAll();
        foreach ($qq as $rs)
        {
            $Fname = $rs['Fname'];  
            
            $oo = $conn->prepare("SELECT COUNT(*) as count FROM food where Fname='$Fname'"); 
            $oo->execute();
            $pp = $oo->fetchAll();
            foreach ($pp as $rs)
            {
                $count=$rs['count'];
            }
            
            $checkcheck=0;
            $stmt = $conn->prepare("SELECT Finame, IMGname, Finum FROM food where Fname='$Fname'"); 
            $stmt->execute();
            $rows = $stmt->fetchAll();
            foreach ($rows as $rs)
            {
                $Finame=$rs['Finame'];
                
                if($rs['IMGname'] != NULL)
                {
                    $IMG=$rs['IMGname']; 
                }
                $Finum=$rs['Finum'];
                
                $super = $conn->prepare("SELECT Iname, Inum FROM ingre where Iid='$userid'");
                $super->execute();
                $power = $super->fetchAll();
                foreach ($power as $rs)
                {
                    $Iname=$rs['Iname'];
                    $Inum=$rs['Inum'];
                    if($Finame==$Iname && $Inum>=$Finum)
                        $checkcheck++;
                }
            }

            if($checkcheck==$count)
            {
                    if($i==0)
                    {
                       echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 0px;'>";
                    }
                    if($i==1)
                    {
                    echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 0px;'>";
                    }
                    if($i==2)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 414px;'>";
                    }
                    if($i==3)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 414px;'>";
                    }
                    if($i==4)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 828px;'>";
                    }
                    if($i==5)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 828px;'>";
                    }
                    if($i==6)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 1242px;'>";
                    }
                    if($i==7)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 1242px;'>";
                    }
                    if($i==8)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 1656px;'>";
                    }
                    if($i==9)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 1656px;'>";
                    }
                    if($i==10)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 2070px;'>";
                    }
                    if($i==11)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 2070px;'>";
                    }
                    if($i==12)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 2484px;'>";
                    }
                    if($i==13)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 2484px;'>";
                    }
                    if($i==14)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 2898px;'>";
                    }
                    if($i==15)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 2898px;'>";
                    }
                    if($i==16)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 3312px;'>";
                    }
                    if($i==17)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 3312px;'>";
                    }
                    if($i==18)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 3726px;'>";
                    }
                    if($i==19)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 3726px;'>";
                    }
                    if($i==20)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 4140px;'>";
                    }
                    if($i==21)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 4140px;'>";
                    }
                    if($i==22)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 4554px;'>";
                    }
                    if($i==23)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 4554px;'>";
                    }
                    if($i==24)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 4968px;'>";
                    }
                    if($i==25)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 4968px;'>";
                    }
                    if($i==26)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 5382px;'>";
                    }
                    if($i==27)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 396px; top: 5382px;'>";
                    }
                    if($i==28)
                    {
                        echo "<div class='list-row' data-role='list-row' style='position: absolute; left: 0px; top: 5796px;'>";
                    }
                    if($i==29)
                    {
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
                    foreach ($b as $rs) /* name, userid, phone */
                    {
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
        }
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }                 
	$conn = null;
        ?>

                    </div>
                </div>


                <div class="board-foot">
                    <div class="select-year" id="innerHtmlArticlePeriod"><div class="btn-group bootstrap-select select line"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="selectAtriclePeriod" title="현재"><span class="filter-option pull-left">현재</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">현재</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2017년</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2016년</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2015년</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2014년</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2013년</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2012년</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2012년 이전</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="select line" onchange="app.selectAtriclePeriod()" id="selectAtriclePeriod" tabindex="-98">			<option value="default">현재</option>		<option value="2017">2017년</option>		<option value="2016">2016년</option>		<option value="2015">2015년</option>		<option value="2014">2014년</option>		<option value="2013">2013년</option>		<option value="2012">2012년</option>		<option value="2011">2012년 이전</option></select></div></div>
                    <div class="board-pagination">		<div class="board-nav-first">		</div>		<div class="board-nav">			<a href="javascript:paging.getBoard(&quot;direct&quot;, 0);" class="board-nav-page active">1</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 1);" class="board-nav-page">2</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 2);" class="board-nav-page">3</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 3);" class="board-nav-page">4</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 4);" class="board-nav-page">5</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 5);" class="board-nav-page">6</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 6);" class="board-nav-page">7</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 7);" class="board-nav-page">8</a>			<a href="javascript:paging.getBoard(&quot;direct&quot;, 8);" class="board-nav-page last">9</a>			<a href="javascript:paging.getBoard(&quot;plus&quot;);" class="board-nav-next">다음</a>		</div></div>
                </div>

            </div>

        </div>
    </div>
</html>