<!DOCTYPE html>
<html lang="en">
<head>
    <title>FF RENTAL MOBIL MAKASSAR</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">   
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>

    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(images/loginbg.jpg) no-repeat;
    background-size: cover;
}
.login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform:translate(-50%, -50%);
    color: brown;
}
.login-box h1{
    float:left;
    font-size: 40px;
    border-bottom:6px solid brown;
    margin-bottom: 50px;
    padding:13px 0;
}
.textbox{
    width:100%;
    overflow: hidden;
    font-size: 40%;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid brown;
}
.textbox i{
    width:26px;
    float:left;
    text-align:center;
}

.textbox input{
    border:none;
    outline: none;
    background: none;
    color:aliceblue;
    font-size: 18px;
    width: 80%;
    float:left;
    margin: 0 10px;
}
.btn{
    width: 100%;
    background: none;
    border: 2px solid brown;
    color:aliceblue;
    padding: 5px;
    font-size:18px;
    cursor:pointer;
    margin:12px 0;
}
    </style>
</head>

<body>
<div class="login-box">
<h1>Login</h1>

<form action="ceklogin.php" method="POST">

<div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="txtusername" class="form-control"
    placeholder="Username" autofocus required>
</div>

<div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="txtpassword" class="form-control"
    placeholder="Password" required>
</div>

<button type="submit" name="kirim" class="btn btn-primary btn-block">Login</button>
</div>
</form>
</body>

</body>
</html>
