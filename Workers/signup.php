<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signupstyle.css">
    <link rel="stylesheet" href="css/MyClass.css">
</head>
<body>
<div class="back1">
    <div class="bar">
        <img src="imges/logo.png"  class="logo">
        <ul >
            <li> <a href="Home.html">Home</a> </li>
            <li> <a href="#">Workers</a> </li>
            <li> <a href="#">Sign In</a> </li>
            <li> <a href="contactus.php">Contact Us</a> </li>
            <li> <a href="mypage.php">My Page</a> </li>
        </ul>
    </div>
    <div class="formb">
        <div  class="box1">
            <div id="bt"></div>
            <button type="button" class="butn" onclick="Signin()">Sign In</button>
            <button type="button" class="butn" onclick="Signup()">Sign Up</button>
        </div>
        <form id="logn" class="inputG">
            <input type="email" class="inputF" placeholder="Email" required>
            <input type="text" class="inputF" placeholder="Password" required>
            <input type="checkbox" class="chkB">Remember Password
            <div class="content2">
                <button type="button" class="button2"><span></span>Sign Up</button>
            </div>
        </form>
        <form id="reg" class="inputG">
            <input type="text" class="inputF" placeholder="User Name" required>
            <input type="email" class="inputF" placeholder="Email" required>
            <input type="text" class="inputF" placeholder="Password" required>
            <input type="text" class="inputF" placeholder="Confirm Password" required>
            <input type="checkbox" class="chkB">I agree to rules
            <div class="content2">
                <button type="button" class="button2"><span></span>Sign Up</button>
            </div>

        </form>
    </div>
</div>
<script>
    let x = document.getElementById("logn");
    let y = document.getElementById("reg");
    let z = document.getElementById("bt");

    function Signup(){
        x.style.left ="-400px";
        y.style.left ="50px";
        z.style.left ="110px";

    }
    function Signin(){
        x.style.left ="50px";
        y.style.left ="450px";
        z.style.left ="0";

    }

</script>
</body>
</html>