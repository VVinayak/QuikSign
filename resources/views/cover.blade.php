<html>
<body bgcolor="black">
<style>
.silver-flat-button {
  position: relative;
  vertical-align: top;
  width: 150px;
  height: 150px;
  padding: 0;
  border-radius:5px;
  font-size: 22px;
  color:white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #bdc3c7;
  border: 0;
  border-bottom: 2px solid #acb2b7;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #acb2b7;
  box-shadow: inset 0 -2px #acb2b7;
}
.silver-flat-button:hover {
   width: 190px;
  height: 190px;
  
}

</style>
<script>
function fn(type)
{
if(type=='professor')
window.location.href="/faculty_reg";
else
window.location.href="/student_reg";
}
</script>
<img id="bg" src="{{ URL::to('/') }}/back.jpg" style="width:100%;height:100%;"></img>
<img id="logo" src="{{ URL::to('/') }}/logo2.png" style="position:absolute;left:35%;top:0%;width:30%;height:20%;z-index:1000"></img>
<button type="button" class="silver-flat-button" style="color:red;outline:0;  border-color: transparent;position:absolute;top:36.5%;left:28.9%;" onclick="fn('professor')">PROFESSOR</button>
<button type="button" class="silver-flat-button" style="color:red;border-color: transparent;position:absolute;top:36.5%;left:58%;outline:0" onclick="fn('student')">STUDENT</button>
</body>
</html>