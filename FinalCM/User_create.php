<?php
/* 데이터 베이스에 연결하기 위해 필요한 요소 */
$dbHost = "localhost";
$dbUsername = "cm";
$dbPasswd = "cm";

/*  변수들  */
$userNameIsUnique = true;
$passwordIsValid = true;
$userIsEmpty = false;
$passwordIsEmpty = false;
$password2IsEmpty = false;
$nameIsEmpty = false;

/** 요청받은 페이지가 스스로 확인한다. */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    /** 입력받은 user의 변수를 저장하고, 저장했다면 $userIsEmpty가 false가 된다. */
    if ($_POST['Id'] == "") {
        $userIsEmpty = true;
    }
    if ($_POST['name'] == "") {
        $nameIsEmpty = true;
    }


    /** 데이터 베이스에 연결 */
    $con = mysqli_connect("localhost", "cm", "cm");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    // 문자 설정
    mysqli_set_charset($con, 'utf-8');

    /** user로 입력받은 이름이 데이터베이스의 이름과 중복되는지 확인한다. */
    mysqli_select_db($con, "CM");
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $user = mysqli_query($con, "SELECT Uid FROM user WHERE Uid='" . $Id . "'");
    $userIDnum = mysqli_num_rows($user);
    if ($userIDnum) {
        $userNameIsUnique = false;
    }

    /** 비밀번호가 입력되었는지, 그리고 비밀번호 재입력칸에 입력이 되었는지 */
    if ($_POST['password'] == "") // 비밀번호가 입력 되었는지
        $passwordIsEmpty = true;
    if ($_POST['password2'] == "") // 비밀번호 재입력에 입력이 되었는지
        $password2IsEmpty = true;
    if ($_POST['password'] != $_POST['password2']) { //비밀번호와 재입력이 같은지
        $passwordIsValid = false;
    }


    if (!$userIsEmpty && $userNameIsUnique && !$passwordIsEmpty && !$password2IsEmpty && $passwordIsValid && !$userIsEmpty) {    // 이 조건을 만족해야 가입이 진행
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        mysqli_select_db($con, "user");
        mysqli_query($con, "INSERT user (Uid, Upass, Uname) VALUES ('" . $Id . "', '" . $password . "', '" . $name . "')");
        mysqli_free_result($user);
        mysqli_close($con);
        header('Location: login.php');
        exit;
    }
}
?>

<html>

    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="fontello.css">
    <link rel="stylesheet" href="clien.css" id="whiteCss">
    <link rel="stylesheet" href="clien.small.css" id="small" disabled="">
    <link rel="stylesheet" href="clien.large.css" id="large" disabled="">
    <link rel="stylesheet" href="jquery-ui.css">




    <div class="sign-in-box">
        <div class="form">
            <form action="User_create.php" method="POST" id="myInfoForm">
                <input type="hidden" name="_csrf" value="9f248047-821c-451f-810b-abad1bd0b384">
                <table>
                    <tbody><tr>
                            <th>아이디</th>
                            <td><input type="text" name="Id"  data-valid="true"><?php
                                if ($userIsEmpty) { //ID을 입력하지 않았을 때
                                    echo ("ID를 입력해주십시오!");
                                    echo ("<br/>");
                                }
                                if (!$userNameIsUnique) {   //ID가 중복될 때
                                    echo ("그 ID는 이미 존재합니다. 다시 한번 확인해주십시오.");
                                    echo ("<br/>");
                                }
                                ?></td>


                        </tr>

                        <tr>
                            <th>비밀번호</th>
                            <td>
                                <input type="password" name="password" value="">
                                <?php
                                if ($passwordIsEmpty) { //비밀번호를 입력하지 않았을 때
                                    echo ("비밀번호를 입력해주십시오");
                                    echo ("<br/>");
                                }
                                ?>
                            </td>

                        </tr>
                        <tr>
                            <th>비밀번호 확인</th>
                            <td>
                                <input type="password" name="password2" value="">
<?php
if ($password2IsEmpty) {    //비밀번호 재입력 란에 입력을 하지 않았을 때
    echo ("비밀번호 확인 란에 입력해주십시오");
    echo ("<br/>");
}
if (!$password2IsEmpty && !$passwordIsValid) {  //비밀번호 란과 비밀번호 재입력 란이 서로 맞지 않을 때
    echo ("<div>비밀번호가 맞지 않습니다.</div>");
    echo ("<br/>");
}
?>
                            </td>

                        </tr>
                        <tr>
                            <th>이름</th>
                            <td><input type="text" name="name"  data-valid="true">
<?php
if ($nameIsEmpty) {
    echo ("이름를 입력해주십시오!");
    echo ("<br/>");
}
?>
                            </td>
                        </tr>

                    </tbody></table>
                <button type="submit" class="button-lg button-blue">저장</button>
                <button type="button" class="button-lg" onclick="location.href = 'login.php'">취소</button></form>
            </form>
        </div>

    </div>

</html>