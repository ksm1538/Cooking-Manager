
<html>

    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="fontello.css">
    <link rel="stylesheet" href="clien.css" id="whiteCss">
    <link rel="stylesheet" href="clien.small.css" id="small" disabled="">
    <link rel="stylesheet" href="clien.large.css" id="large" disabled="">
    <link rel="stylesheet" href="jquery-ui.css">




    <div class="sign-in-box">
        <ul>
            <li>
                <h2 class="sign-in-head">쿠킹 매니저</h2>
            </li>
            <form method="POST" action="User_login.php">
                <li><input type="text" autocapitalize="off" placeholder="아이디" name="userid"></li>
                <li>
                    <input type="passWord" placeholder="비밀번호" name="userpass">
                    <button type="submit" class="button-xl" onclick="window.location = 'User_login.php'">로그인</button>
                    <a href="User_create.php" class="button-lg button-blue sign-in" style="margin:20px 0 40px 0;"><i class="fa fa-user-plus" aria-hidden="true"></i>회원가입</a>
                </li>
            </form>
        </ul>
    </div>
</html>