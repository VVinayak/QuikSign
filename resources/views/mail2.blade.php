<html>
<body onload="init('{{$details->field01}}',
'{{$details->field02}}',
'{{$details->field03}}',
'{{$details->field04}}',
'{{$details->field05}}',
'{{$details->field06}}',
'{{$details->field07}}',
'{{$details->field08}}',
'{{$details->field09}}',
'{{$details->field10}}',
'{{ URL::to('/') }}/uploads/fac_{{$details->fid}}_sign.png'
)">
<script>
var can,ctx,img;
function init(a,b,c,d,e,f,g,h,i,j,m)
{
can=document.getElementById("can");
ctx=can.getContext("2d");
img=document.getElementById("form");
can.width=img.width;
can.height=img.height;
ctx.drawImage(img,0,0,can.width,can.height);
fillDetails(a,b,c,d,e,f,g,h,i,j,m);
}
function fillDetails(a,b,c,d,e,f,g,h,i,j,m)
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
var im=document.getElementById("s");
im.src=m;
im.onload=function(){

ctx.drawImage(im,8*can.width/10,8*can.height/10,2*can.width/10,2*can.height/10);

};
}
</script>

<canvas id="can" style="position:absolute;top:21%;left:10%;width:30%;height:75%;border:1px solid"></canvas>
<img id="form" src="{{ URL::to('/') }}/bonafide.png" style="display:none;width:30%;height:75%"></img>
<img id="s" src="" style="position:absolute;left:55%;top:0%;width:45%;height:98%;display:none"/>
</form>
</body>
</html>
