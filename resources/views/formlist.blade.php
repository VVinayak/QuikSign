<!DOCTYPE html>
<html>
<head>
<script>
function redir(url)
{
window.location.href=url;
}
</script>
<meta charset="utf-8" />
<title>QuikSign</title>
<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
<h4 style="color:white">Forms</h4>

<div class="lines"></div>

<ul class="list">
  <li onclick="redir('/welcome/student/{{$id}}/formlist/bonafide')">Bonafide certificate</li>
  <li>Recommendation letter</li>
  <li>Application form</li>
  <li>Permission letter</li>
  <li>Duplicate identity card</li>
    <li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	 <li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	
	<li></li>
	<li></li>
	<li></li>
</ul>
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

  border-left: 1px solid #ffaa9f;
  border-right: 1px solid #ffaa9f;
  width: 2px;
  float: left;
  height: 495px;
  margin-left: 40px;
}
</style>
</head>
<body style="background-image:url('{{ URL::to('/') }}/bg.jpg');">
</body>
</html>
