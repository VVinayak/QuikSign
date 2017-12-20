<html>
<body onload="init()" bgcolor="black">
<style>
        .sun-flower-button {
  position: relative;
  vertical-align: top;
  width: 115%;
  height: 40px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #f1c40f;
  border: 0;
  border-bottom: 2px solid #e2b607;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #e2b607;
  box-shadow: inset 0 -2px #e2b607;
}
</style>
<div id="pic" style="position:absolute;top:0%;left:9%;width:80%;height:128%;background-image:url('{{ URL::to('/') }}/back.jpg');background-repeat:no-repeat">

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
fillDetails(a,b,c,d,e,f,g,h,i,j);
}
function func(a,b,c,d,e,f,g,h,i,j,k,l,m)
{
fillDetails(a,b,c,d,e,f,g,h,i,j);
can.onclick=function(){
var sign=confirm("Sign this form?");

if(sign)
{
var im=document.getElementById("s");
im.src=m;
im.onload=function(){

ctx.drawImage(im,8*can.width/10,8*can.height/10,2*can.width/10,2*can.height/10);
//window.location.href="/faculty/update/"+k;
};
}
};
}
function fillDetails(a,b,c,d,e,f,g,h,i,j)
{
ctx.clearRect(0,0,can.width,can.height);
ctx.drawImage(img,0,0,can.width,can.height);
ctx.fillText(a,can.width/2,can.height/3);
ctx.fillText(b,can.width/2-20,can.height/3+15);
ctx.fillText(c,can.width/5,can.height/2.5);
ctx.fillText(d,can.width/1.5,can.height/2.4+8);
ctx.fillText(e,can.width/5,can.height/2-18);
ctx.fillText(f,can.width/6,can.height/2);
ctx.fillText(g,can.width/5+25,can.height/2);
ctx.fillText(h,can.width/2,can.height/1.5);
ctx.fillText(i,can.width/2-10,can.height/1.33);
ctx.fillText(j,can.width/2+30,can.height/1.08);
}
</script>

<canvas id="can" style="position:absolute;top:21%;left:10%;width:40%;height:75%;border:1px solid"></canvas>
<img id="form" src="{{ URL::to('/') }}/bonafide.png" style="display:none;width:30%;height:75%"></img>
<div style="position:absolute;left:60%;top:25%;">
@foreach ($pending as $row)

       @if($please[$i++]->diff($now)->days < 7)
	   <p style="color:white"><marquee>You have less than a week left to sign this!</marquee></p>
	   @endif
	   
  <li class="sun-flower-button" onclick="func('{{$row->field01}}',
'{{$row->field02}}',
'{{$row->field03}}',
'{{$row->field04}}',
'{{$row->field05}}',
'{{$row->field06}}',
'{{$row->field07}}',
'{{$row->field08}}',
'{{$row->field09}}',
'{{$row->field10}}',
'{{$row->id}}',
'{{$row->fid}}',
'{{ URL::to('/') }}/uploads/fac_{{$row->fid}}_sign.png'
)">Student {{$row->sid}} - {{$row->form}} - {{$row->deadline}}  </li>
<br>  
  @endforeach
</div>
</form>
<img id="s" src="" style="position:absolute;left:55%;top:0%;width:45%;height:98%;display:none"/>
<img id="logo" src="{{ URL::to('/') }}/logo2.png" style="position:absolute;left:34%;top:0%;width:30%;height:20%;z-index:1000"></img>
</body>
</html>
