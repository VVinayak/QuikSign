<html>


<script>
var can,ctx;
var downloadLnk;
function func(name,signature,id,form)
{
downloadLnk=document.getElementById("downloadLnk");
var img=document.getElementById('f');
can=document.getElementById("can");
ctx=can.getContext("2d");
can.width=img.width;
can.height=img.height;
img.src=name;
ctx.drawImage(img,0,0,can.width,can.height);
can.onclick=function(){
var sign=confirm("Sign this form?");
if(sign)
{
var im=document.getElementById("s");
im.src=signature;
im.onload=function(){
ctx.drawImage(im,8*can.width/10,8*can.height/10,2*can.width/10,2*can.height/10);
var text=can.toDataURL();
var url="/welcome/faculty/"+id+"/send/"+form;
$.ajax({
type:"POST",
url:url,
dataType:'text',
data:{
base64data:can.toDataURL()
}
});
};
}
};
}
function download() {
    var dt = can.toDataURL('image/jpeg');
    this.href = dt;
};
document.addEventListener("DOMContentLoaded",function(){
document.getElementById("downloadLnk").addEventListener('click', download, false);
});
</script>

<style>
body {
  background-color :#f5f5f5;
  width: 600px;
  margin: 0 auto;
  padding: 0;
}
h4 {
  color: #cd0000;
  font-size: 42px;
  letter-spacing: -2px;
  text-align: left;
}
.list {
position:absolute;
left:0%;
  color: #555;
  font-size: 22px;
  padding: 0 !important;
  width: 500px;
  font-family: courier, monospace;
  border: 1px solid #dedede;
}
.list li {
background-color:white;
  list-style: none;
  border-bottom: 1px dotted #ccc;
  text-indent: 25px;
  height: auto;
  padding: 10px;
  text-transform: capitalize;
}
.list li:hover {
  background-color: yellow;
  -webkit-transition: all 0.2s;
  -moz-transition:    all 0.2s;
  -ms-transition:     all 0.2s;
  -o-transition:      all 0.2s;
}
.lines {
  position:absolute;
  left:0%;
  z-index:1;
  border-left: 1px solid #ffaa9f;
  border-right: 1px solid #ffaa9f;
  width: 2px;
  float: left;
  height: 495px;
  margin-left: 40px;
}
</style>

<body style="background-image:url('{{ URL::to('/') }}/bg.jpg');">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<title>QuikSign</title>
<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
<h4 style="color:white">Pending forms</h4>

<div class="lines"></div>

<ul class="list">
  @foreach ($pending as $row)
  <li onclick="func('{{ URL::to('/') }}/uploads/{{$row->filename}}','{{ URL::to('/') }}/uploads/{{$row->fid}}_sign.png','{{$row->fid}}','{{$row->form}}')">Student {{$row->sid}} - {{$row->form}} - {{$row->deadline}}  </li>
  
  @endforeach
</ul>
<a id="downloadLnk" download="{{ URL::to('/') }}/uploads/form.jpg">download</a>
<img id="f" src="" style="position:absolute;left:55%;top:0%;width:45%;height:98%;display:none"/>
<canvas id="can" style="position:absolute;left:55%;top:0%;width:45%;height:98%;border:1px solid white"></canvas>
<img id="s" src="" style="position:absolute;left:55%;top:0%;width:45%;height:98%;display:none"/>
</form>
</body>

</html>