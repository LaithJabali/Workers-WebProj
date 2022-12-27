<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="mypagecss.css">
    <link rel="stylesheet" href="css/MyClass.css">
    <script src="https://kit.fontawesome.com/33865a64d5.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="bar">
    <img src="imges/logo.png"  class="logo">
    <ul >
        <li> <a href="Home.html">Home</a> </li>
        <li> <a href="#">Workers</a> </li>
        <li> <a href="signup.php">Sign In</a> </li>
        <li> <a href="contactus.php">Contact Us</a> </li>
        <li> <a href="#">My Page</a> </li>
    </ul>
</div>
<div class="container">

    <div class="leftbox">
        <nav>
            <a onclick="tabs(0)" class="tab active">
                <i class="far fa-address-card"></i>
            </a>
            <a onclick="tabs(1)" class="tab active">
                <i class="fas fa-tools"></i>
            </a>
        </nav>
    </div>
    <div class="rightbox">
        <div class="profile tabShow">
            <h1>Personal Info</h1>
            <input type="text" class="input" placeholder="Full Name" >
            <input type="email" class="input" placeholder="Email" >
            <input type="text" class="input" placeholder="Phone Number" >
            <input type="text" class="input" placeholder="Birthday (DD/MM/YY)" >

            <h2 >Gender:</h2>
            <label class="chk">
                <input type="radio"  name="radio" checked>&nbsp;	Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <label class="chk">
                <input type="radio"  name="radio">&nbsp;	Female
            </label>
            <h2 >City:</h2>
            <select name="City" id="Citys" class="sel">
                <option value="nablus">Nablus</option>
                <option value="jerusalem">Jerusalem</option>
                <option value="bethlehem">Bethlehem</option>
                <option value="ramallah">Ramallah</option>
                <option value="hebron">Hebron</option>
                <option value="Jericho">Jericho</option>
                <option value="qalqilya">Qalqilya</option>
                <option value="jenin">Jenin</option>
                <option value="gaffa">Jaffa</option>
                <option value="Gaza">Gaza</option>
                <option value="akka">Akka</option>
            </select>
            <input type="password" class="input" placeholder="Password" required>
            <div class="content1">
            <button type="button" class="btn"><span></span>Update</button>
            </div>
        </div>

        <div class="information tabShow">
            <h1>Work Info</h1>
            <h2>Your's Work:</h2>
            <select name="work" id="Works" class="sel">

                <option value="builder">Builder</option>
                <option value="paint">Painting works</option>
                <option value="drive">Driver</option>
                <option value="tile">Tile work</option>
                <option value="decor">Decoration works</option>
                <option value="clean">Cleaning work</option>
                <option value="gard">Gardening works</option>
                <option value="gurd">Guard work</option>

            </select><br>
            <br> <input type="text" class="input" placeholder="Your salary (Per Day)" ><br><br>
            <h2>Upload photos of you or your work:</h2>
         <input type="file" id="img" name="img" accept="image/*"><br>
            <div class="content1">
          <br>  <button type="btn" class="btn"><span></span>Update</button>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.6.0.js"></script>
<SCRIPT>
const tabB=document.querySelectorAll(".tab");
const tab=document.querySelectorAll(".tabShow")

function tabs(Index){
    tab.forEach(function (node){
        node.style.display="none";
    });
    tab[Index].style.display="block"
}
tabs(0);
</SCRIPT>
<script>
$(".tab").click(function (){
    $(this).addClass("active").siblings()
    getSelection().removeClass("active");
});

</script>

</body>
</html>
