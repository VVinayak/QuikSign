<html>
<body bgcolor="black">
<div id="pic" style="position:absolute;top:0%;left:9%;width:80%;height:128%;background-image:url('{{ URL::to('/') }}/back.jpg');background-repeat:no-repeat">
<a href="/../../student/{{$id}}/pending"><p style="position:absolute;left:40%;top:20%;color:white">Track status of your filled forms</p></a>
<form action="/../../student/{{$id}}/fillup" method="post" enctype="multipart/form-data">
<select name="form" style="position:absolute;top:30%;left:35%;width:30%;height:8%;font-size:20px;color:green">
<option>Bonafide</option>
<!--
<option>Format for consent of teacher</option>
<option>Requisition for course registration</option>
<option>Recommendation letter</option>
-->
</select>
<input type="submit" style="position:absolute;top:53%;left:37%;width:25%;height:8%;font-size:20px;color:green"/>
</form>
</div>
<img id="logo" src="{{ URL::to('/') }}/logo2.png" style="position:absolute;left:34%;top:0%;width:30%;height:20%;z-index:1000"></img>
</body>
</html>