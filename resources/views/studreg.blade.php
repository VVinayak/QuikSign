<html>
<body bgcolor="black">
<div id="pic" style="position:absolute;top:0%;left:9%;width:80%;height:128%;background-image:url('{{ URL::to('/') }}/back.jpg');background-repeat:no-repeat">
<form action='/student_reg/register' method='post' enctype="multipart/form-data">
<h4 style="color:black;position:absolute;left:38%;top:19%;color:white">Already have an account? <a href="/../student_login" style="color:cyan">Login</a></h4>
<h2 style="color:white;position:absolute;left:42%;top:25%">SIGN UP</h2>

<input type="text" name="name" placeholder="Username" style="border-radius:10px;position:absolute;top:35%;left:35%;width:25%;height:8%;font-size:20px;color:green" required/> 

<input type="email" name="email" placeholder="Email id" style="border-radius:10px;position:absolute;top:50%;left:35%;width:25%;height:8%;font-size:20px;color:green" required/> 

<input type="password" name="password" placeholder="Password" style="border-radius:10px;position:absolute;top:65%;left:35%;width:25%;height:8%;font-size:20px;color:green" required/> 

<input type="submit" style="position:absolute;top:80%;left:35%;width:25%;height:8%;font-size:20px;color:green"/>
</form>


</div>
<img id="logo" src="{{ URL::to('/') }}/logo2.png" style="position:absolute;left:34%;top:0%;width:30%;height:20%;z-index:1000"></img>
</body>
</html>
