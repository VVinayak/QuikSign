<html>
<body bgcolor="black" onload="init()">
<script>
var can,ctx,img;
function init()
{
can=document.getElementById("can");
ctx=can.getContext("2d");
img=document.getElementById("form");
can.width=img.width;
can.height=img.height;
ctx.drawImage(img,0,0,can.width,can.height);
}
function fillDetails()
{
ctx.clearRect(0,0,can.width,can.height);
ctx.drawImage(img,0,0,can.width,can.height);
var field01=document.getElementById("field01");
var field02=document.getElementById("field02");
var field03=document.getElementById("field03");
var field04=document.getElementById("field04");
var field05=document.getElementById("field05");
var field06=document.getElementById("field06");
var field07=document.getElementById("field07");
var field08=document.getElementById("field08");
var field09=document.getElementById("field09");
var field10=document.getElementById("field10");
ctx.fillText(field01.value,can.width/2,can.height/3);
ctx.fillText(field02.value,can.width/2-20,can.height/3+15);
ctx.fillText(field03.value,can.width/5,can.height/2.5);
ctx.fillText(field04.value,can.width/1.5,can.height/2.4+8);
ctx.fillText(field05.value,can.width/5,can.height/2-18);
ctx.fillText(field06.value,can.width/6,can.height/2);
ctx.fillText(field07.value,can.width/5+25,can.height/2);
ctx.fillText(field08.value,can.width/2,can.height/1.5);
ctx.fillText(field09.value,can.width/2-10,can.height/1.33);
ctx.fillText(field10.value,can.width/2+30,can.height/1.08);
}
</script>
<div id="pic" style="position:absolute;top:0%;left:9%;width:80%;height:128%;background-image:url('{{ URL::to('/') }}/back.jpg');background-repeat:no-repeat">
</div>
<button type="button" style="position:absolute;top:20.5%;left:48%;width:25%;height:8%;font-size:20px;color:green" onclick="fillDetails()">Preview</button>
<canvas id="can" style="position:absolute;top:21%;left:10%;width:30%;height:75%;border:1px solid"></canvas>
<img id="form" src="{{ URL::to('/') }}/{{$row[0]->filename}}" style="display:none;width:30%;height:75%"></img>
<form action="store" method="post" enctype="multipart/form-data">
<input type="text" id="field01" name="field01" placeholder="field1" style="position:absolute;top:30%;left:45%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field02" name="field02" placeholder="field2" style="position:absolute;top:30%;left:65%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field03" name="field03" placeholder="field3" style="position:absolute;top:40%;left:45%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field04" name="field04" placeholder="field4" style="position:absolute;top:40%;left:65%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field05" name="field05" placeholder="field5" style="position:absolute;top:50%;left:45%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field06" name="field06" placeholder="field6" style="position:absolute;top:50%;left:65%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field07" name="field07" placeholder="field7" style="position:absolute;top:60%;left:45%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field08" name="field08" placeholder="field8" style="position:absolute;top:60%;left:65%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field09" name="field09" placeholder="field9" style="position:absolute;top:70%;left:45%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" id="field10" name="field10" placeholder="field10" style="position:absolute;top:70%;left:65%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" name="faculty" placeholder="faculty" style="position:absolute;top:80%;left:47%;width:12%;height:8%;font-size:20px;color:green" /> 
<input type="text" name="deadline" placeholder="yyyy-mm-dd" style="position:absolute;top:80%;left:61%;width:12%;height:8%;font-size:20px;color:green" />
<!--<input type="text" name="recipient" placeholder="recipient id" style="position:absolute;top:90%;left:48%;width:25%;height:8%;font-size:20px;color:green" />-->
<input type="submit" style="position:absolute;top:90%;left:48%;width:25%;height:8%;font-size:20px;color:green"/> 
</form>
<img id="logo" src="{{ URL::to('/') }}/logo2.png" style="position:absolute;left:34%;top:0%;width:30%;height:20%;z-index:1000"></img>
</body>
</html>
