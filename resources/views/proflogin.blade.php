<html>
<body bgcolor="black">
<div id="pic" style="position:absolute;top:0%;left:9%;width:80%;height:128%;background-image:url('{{ URL::to('/') }}/back.jpg');background-repeat:no-repeat">
<form action='/faculty_login/login' method='post' enctype="multipart/form-data">

<h2 style="color:white;position:absolute;left:42%;top:25%">SIGN IN</h2>

<input type="email" name="email" placeholder="Email id" style="border-radius:10px;position:absolute;top:40%;left:35%;width:25%;height:8%;font-size:20px;color:green" required/> 

<input type="password" name="password" placeholder="Password" style="border-radius:10px;position:absolute;top:55%;left:35%;width:25%;height:8%;font-size:20px;color:green" required/> 

<input type="submit" style="position:absolute;top:70%;left:35%;width:25%;height:8%;font-size:20px;color:green"/>
</form>


</div>
<img id="logo" src="{{ URL::to('/') }}/logo2.png" style="position:absolute;left:34%;top:0%;width:30%;height:20%;z-index:1000"></img>
</body>
</html>
